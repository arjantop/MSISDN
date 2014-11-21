<?php

$metadata = simplexml_load_file('tmp/libphonenumber-read-only/resources/PhoneNumberMetadata.xml');

$countryCodes = [];
$fsm = [];

// Walk over the xml territory nodes and extract country and country codes information.
foreach($metadata->territories[0] as $territory) {
    $country = (string)$territory['id'];
    if(!preg_match('/^[A-Z]{2}$/', $country))
    {
        // We are only interested in the country codes of actual countries.
        continue;
    }
    $countryCode = (string)$territory['countryCode'];
    if(array_key_exists($countryCode, $countryCodes) && !$territory['mainCountryForCode'])
    {
        // Only keep the main country for the country code if there are collisions.
        continue;
    }
    $countryCodes[$countryCode] = $country;
}

// Construct a simple FSM from the collected country code to country mapping.
foreach($countryCodes as $countryCode=>$country){
    $countryCode = (string)$countryCode;
    $current = &$fsm;
    for($i = 0; $i < strlen($countryCode); $i++)
    {
        $char = $countryCode[$i];
        if($i + 1 == strlen($countryCode))
        {
            // The value of the final state is the country value.
            $current[$char] = $country;
        }
        else
        {
            if(!array_key_exists($char, $current))
            {
                // Create a new state transition array if it does not already exist.
                $current[$char] = [];
            }
            // Move to the next state.
            $current = &$current[$char];
        }
    }
}

echo file_get_contents('scripts/gen/CountryCodeFsm.php');
var_export($fsm);
echo ";\n}\n";
