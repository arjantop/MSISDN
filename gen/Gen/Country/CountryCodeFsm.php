<?php

namespace Gen\Country;

class CountryCodeFsm extends \Util\Fsm
{
    public function __construct()
    {
        $this->currentState = &self::$fsmArray;
    }

    private static $fsmArray =
array (
  2 =>
  array (
    4 =>
    array (
      7 => 'AC',
      4 => 'AO',
      3 => 'CD',
      2 => 'CG',
      1 => 'GA',
      0 => 'GQ',
      5 => 'GW',
      6 => 'IO',
      8 => 'SC',
      9 => 'SD',
    ),
    9 =>
    array (
      7 => 'AW',
      1 => 'ER',
      8 => 'FO',
      9 => 'GL',
      0 => 'SH',
    ),
    2 =>
    array (
      6 => 'BF',
      9 => 'BJ',
      5 => 'CI',
      0 => 'GM',
      4 => 'GN',
      3 => 'ML',
      2 => 'MR',
      7 => 'NE',
      1 => 'SN',
      8 => 'TG',
    ),
    5 =>
    array (
      7 => 'BI',
      3 => 'DJ',
      1 => 'ET',
      4 => 'KE',
      8 => 'MZ',
      0 => 'RW',
      2 => 'SO',
      5 => 'TZ',
      6 => 'UG',
    ),
    6 =>
    array (
      7 => 'BW',
      9 => 'KM',
      6 => 'LS',
      1 => 'MG',
      5 => 'MW',
      4 => 'NA',
      2 => 'RE',
      8 => 'SZ',
      0 => 'ZM',
      3 => 'ZW',
    ),
    3 =>
    array (
      6 => 'CF',
      7 => 'CM',
      8 => 'CV',
      3 => 'GH',
      1 => 'LR',
      0 => 'MU',
      4 => 'NG',
      2 => 'SL',
      9 => 'ST',
      5 => 'TD',
    ),
    1 =>
    array (
      3 => 'DZ',
      2 => 'MA',
      8 => 'LY',
      1 => 'SS',
      6 => 'TN',
    ),
    0 => 'EG',
    7 => 'ZA',
  ),
  3 =>
  array (
    7 =>
    array (
      6 => 'AD',
      4 => 'AM',
      5 => 'BY',
      2 => 'EE',
      0 => 'LT',
      1 => 'LV',
      7 => 'MC',
      3 => 'MD',
      8 => 'SM',
      9 => 'VA',
    ),
    5 =>
    array (
      5 => 'AL',
      8 => 'FI',
      9 => 'BG',
      7 => 'CY',
      0 => 'GI',
      3 => 'IE',
      4 => 'IS',
      2 => 'LU',
      6 => 'MT',
      1 => 'PT',
    ),
    8 =>
    array (
      7 => 'BA',
      5 => 'HR',
      2 => 'ME',
      9 => 'MK',
      1 => 'RS',
      6 => 'SI',
      0 => 'UA',
    ),
    2 => 'BE',
    4 => 'ES',
    3 => 'FR',
    0 => 'GR',
    6 => 'HU',
    9 => 'IT',
    1 => 'NL',
  ),
  9 =>
  array (
    7 =>
    array (
      1 => 'AE',
      3 => 'BH',
      5 => 'BT',
      2 => 'IL',
      6 => 'MN',
      7 => 'NP',
      0 => 'PS',
      4 => 'QA',
    ),
    3 => 'AF',
    9 =>
    array (
      4 => 'AZ',
      5 => 'GE',
      6 => 'KG',
      2 => 'TJ',
      3 => 'TM',
      8 => 'UZ',
    ),
    1 => 'IN',
    6 =>
    array (
      4 => 'IQ',
      2 => 'JO',
      5 => 'KW',
      1 => 'LB',
      0 => 'MV',
      8 => 'OM',
      6 => 'SA',
      3 => 'SY',
      7 => 'YE',
    ),
    8 => 'IR',
    4 => 'LK',
    5 => 'MM',
    2 => 'PK',
    0 => 'TR',
  ),
  1 => 'US',
  5 =>
  array (
    4 => 'AR',
    9 =>
    array (
      0 => 'GP',
      1 => 'BO',
      9 => 'CW',
      3 => 'EC',
      4 => 'GF',
      2 => 'GY',
      6 => 'MQ',
      5 => 'PY',
      7 => 'SR',
      8 => 'UY',
    ),
    5 => 'BR',
    0 =>
    array (
      1 => 'BZ',
      6 => 'CR',
      0 => 'FK',
      2 => 'GT',
      4 => 'HN',
      9 => 'HT',
      5 => 'NI',
      7 => 'PA',
      8 => 'PM',
      3 => 'SV',
    ),
    6 => 'CL',
    7 => 'CO',
    3 => 'CU',
    2 => 'MX',
    1 => 'PE',
    8 => 'VE',
  ),
  4 =>
  array (
    3 => 'AT',
    1 => 'CH',
    2 =>
    array (
      0 => 'CZ',
      3 => 'LI',
      1 => 'SK',
    ),
    9 => 'DE',
    5 => 'DK',
    4 => 'GB',
    7 => 'NO',
    8 => 'PL',
    0 => 'RO',
    6 => 'SE',
  ),
  6 =>
  array (
    1 => 'AU',
    7 =>
    array (
      3 => 'BN',
      9 => 'FJ',
      2 => 'NF',
      4 => 'NR',
      5 => 'PG',
      7 => 'SB',
      0 => 'TL',
      6 => 'TO',
      8 => 'VU',
    ),
    8 =>
    array (
      2 => 'CK',
      6 => 'KI',
      7 => 'NC',
      3 => 'NU',
      9 => 'PF',
      0 => 'PW',
      8 => 'TV',
      1 => 'WF',
      5 => 'WS',
    ),
    9 =>
    array (
      1 => 'FM',
      2 => 'MH',
      0 => 'TK',
    ),
    2 => 'ID',
    0 => 'MY',
    4 => 'NZ',
    3 => 'PH',
    5 => 'SG',
    6 => 'TH',
  ),
  8 =>
  array (
    8 =>
    array (
      0 => 'BD',
      6 => 'TW',
    ),
    6 => 'CN',
    5 =>
    array (
      2 => 'HK',
      5 => 'KH',
      0 => 'KP',
      6 => 'LA',
      3 => 'MO',
    ),
    1 => 'JP',
    2 => 'KR',
    4 => 'VN',
  ),
  7 => 'RU',
);
}
