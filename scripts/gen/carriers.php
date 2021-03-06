<?php

$carrierData = 'tmp/libphonenumber-read-only/resources/carrier/en';

$dstDir = 'gen/Gen/Carrier/';

function parse_carriers($dialingCode, $filename)
{
    $countryCarriers = [];
    $lines = file($filename);
    foreach ($lines as $line) {
        if (!preg_match('/^[0-9]/', $line)) {
            // Skip license and empty lines.
            continue;
        }
        list($carrierPrefix, $carrierName) = explode('|', rtrim($line));
        $countryCarriers[substr($carrierPrefix, strlen($dialingCode))] = $carrierName;
    }
    return $countryCarriers;
}

function make_fsm($data)
{
    $fsm = [];
    foreach($data as $key=>$value){
        $key = (string)$key;
        $current = &$fsm;
        for($i = 0; $i < strlen($key); $i++)
        {
            $char = $key[$i];
            if($i + 1 == strlen($key))
            {
                // The value of the final state is the provided value.
                $current[$char] = $value;
            }
            else
            {
                if (is_string($current))
                {
                    // Skip the inclusion of conflicting carrier prefixes.
                    continue;
                }
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
    return $fsm;
}

$files = array_diff(scandir($carrierData), ['..', '.']);

foreach ($files as $file) {
    $dialingCode = explode('.', $file)[0];

    $className = 'Fsm' . $dialingCode;
    $fileName = $dstDir . $className . '.php';
    $handle = fopen($fileName, 'w+');
    if (!$handle) {
        exit("Unable to open file: $filaName");
    }
    $countryCarriers = parse_carriers($dialingCode, $carrierData . '/' . $file);
    $classDefinition = <<<EOT
<?php

namespace Gen\Carrier;

class $className
{
    public static \$fsmArray = 
EOT;
    fwrite($handle, $classDefinition);
    $fsm = make_fsm($countryCarriers);
    fwrite($handle, var_export($fsm, true));
    fwrite($handle, ";\n}\n");
    fclose($handle);
}
