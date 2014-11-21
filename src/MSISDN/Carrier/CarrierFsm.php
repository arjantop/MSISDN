<?php

namespace MSISDN\Carrier;

class CarrierFsm extends \Util\Fsm
{
    public function __construct($dialingCode)
    {
        if (!array_key_exists($dialingCode, self::$fsmArray)) {
            $this->currentState = [];
        } else {
            $this->currentState = &self::$fsmArray[$dialingCode];
        }
    }

    private static $fsmArray =
array (
  1 =>
  array (
    2 =>
    array (
      4 =>
      array (
        2 =>
        array (
          3 =>
          array (
            5 => 'BaTelCo',
          ),
          4 =>
          array (
            5 => 'BaTelCo',
          ),
          5 =>
          array (
            5 => 'BaTelCo',
          ),
        ),
        6 =>
        array (
          2 =>
          array (
            3 => 'LIME',
            4 => 'LIME',
            5 =>
            array (
              0 => 'LIME',
              1 => 'LIME',
              2 => 'LIME',
              3 => 'LIME',
              4 => 'LIME',
              8 => 'Digicel',
            ),
            6 => 'Digicel',
          ),
          4 =>
          array (
            5 => 'Sunbeach Communications',
          ),
          8 =>
          array (
            2 => 'Digicel',
          ),
        ),
      ),
      6 =>
      array (
        4 =>
        array (
          5 =>
          array (
            3 =>
            array (
              6 => 'Weblinks Limited',
              7 => 'Weblinks Limited',
              8 => 'Weblinks Limited',
              9 => 'Weblinks Limited',
            ),
            8 =>
            array (
              1 => 'Digicel',
              2 => 'Digicel',
              3 => 'Digicel',
              4 => 'Digicel',
            ),
          ),
          7 =>
          array (
            2 =>
            array (
              9 => 'Cable & Wireless',
            ),
            7 =>
            array (
              2 => 'Cable & Wireless',
            ),
          ),
        ),
      ),
    ),
    4 =>
    array (
      4 =>
      array (
        1 =>
        array (
          3 => 'Mobility',
          5 =>
          array (
            0 =>
            array (
              0 => 'Digicel Bermuda',
            ),
            3 =>
            array (
              9 => 'Digicel Bermuda',
            ),
            9 =>
            array (
              0 => 'Digicel Bermuda',
              9 => 'Digicel Bermuda',
            ),
          ),
          7 => 'Cellular One',
        ),
      ),
      7 =>
      array (
        3 =>
        array (
          4 =>
          array (
            0 =>
            array (
              2 => 'Affordable Island Communications',
            ),
            1 => 'Digicel Grenada',
            2 =>
            array (
              0 => 'Digicel Grenada',
            ),
          ),
          5 =>
          array (
            2 =>
            array (
              0 => 'Affordable Island Communications',
              1 => 'Affordable Island Communications',
            ),
            3 => 'AWS Grenada',
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Affordable Island Communications',
            ),
          ),
        ),
      ),
    ),
    6 =>
    array (
      4 =>
      array (
        9 =>
        array (
          2 =>
          array (
            3 => 'C&W',
            4 => 'C&W',
          ),
          3 =>
          array (
            3 => 'DIGICEL',
            4 => 'DIGICEL',
          ),
          4 =>
          array (
            3 => 'Islandcom',
          ),
        ),
      ),
      7 =>
      array (
        1 =>
        array (
          8 =>
          array (
            3 =>
            array (
              8 => 'i CAN_GSM',
            ),
            4 =>
            array (
              8 => 'i CAN_GSM',
            ),
            5 =>
            array (
              8 => 'i CAN_GSM',
            ),
            6 =>
            array (
              8 => 'Choice Phone',
            ),
            7 =>
            array (
              8 => 'Choice Phone',
            ),
            8 =>
            array (
              8 => 'Choice Phone',
            ),
            9 =>
            array (
              8 => 'Choice Phone',
            ),
          ),
        ),
      ),
      8 =>
      array (
        4 =>
        array (
          2 =>
          array (
            5 =>
            array (
              2 => 'Blue Sky',
              4 => 'Blue Sky',
              6 => 'Blue Sky',
              8 => 'Blue Sky',
            ),
          ),
          7 =>
          array (
            3 =>
            array (
              1 => 'ASTCA',
              3 => 'ASTCA',
            ),
            7 =>
            array (
              0 => 'ASTCA',
            ),
          ),
        ),
      ),
    ),
    7 =>
    array (
      5 =>
      array (
        8 =>
        array (
          2 =>
          array (
            8 => 'Cable & Wireless',
          ),
          3 =>
          array (
            8 =>
            array (
              4 => 'Cable & Wireless',
            ),
          ),
          4 =>
          array (
            6 =>
            array (
              0 => 'Cable & Wireless',
              1 => 'Cable & Wireless',
            ),
            8 =>
            array (
              4 => 'Cable & Wireless',
              5 => 'Cable & Wireless',
              6 => 'Cable & Wireless',
              7 => 'Cable & Wireless',
              8 => 'Cable & Wireless',
              9 => 'Cable & Wireless',
            ),
          ),
          5 =>
          array (
            1 => 'AT&T',
            2 => 'AT&T',
            8 =>
            array (
              4 => 'Cable & Wireless',
            ),
          ),
          7 => 'Digicel',
        ),
      ),
      6 =>
      array (
        7 =>
        array (
          3 =>
          array (
            1 =>
            array (
              5 => 'Digicel',
              6 => 'Digicel',
              7 => 'Digicel',
            ),
          ),
          2 =>
          array (
            2 =>
            array (
              5 => 'Cable & Wireless',
            ),
            3 =>
            array (
              5 => 'Cable & Wireless',
            ),
            4 =>
            array (
              5 => 'Cable & Wireless',
            ),
            6 =>
            array (
              5 => 'Cable & Wireless',
            ),
            7 =>
            array (
              5 => 'Cable & Wireless',
              6 => 'Cable & Wireless',
              7 => 'Cable & Wireless',
            ),
            8 =>
            array (
              5 => 'Cable & Wireless',
            ),
            9 =>
            array (
              5 => 'Cable & Wireless',
            ),
          ),
          6 =>
          array (
            1 =>
            array (
              2 => 'Digicel',
              3 => 'Digicel',
              4 => 'Digicel',
              5 => 'Digicel',
              6 => 'Digicel',
              7 => 'Digicel',
            ),
          ),
        ),
      ),
      8 =>
      array (
        4 =>
        array (
          4 =>
          array (
            3 =>
            array (
              0 => 'AT&T',
              1 => 'AT&T',
              2 => 'AT&T',
              3 => 'Digicel',
              4 => 'Digicel',
            ),
            5 =>
            array (
              4 => 'Cable & Wireless',
              5 => 'Cable & Wireless',
            ),
            8 =>
            array (
              9 => 'Cable & Wireless',
            ),
            9 =>
            array (
              0 => 'Cable & Wireless',
              1 => 'Cable & Wireless',
              2 => 'Cable & Wireless',
              3 => 'Cable & Wireless',
              4 => 'Cable & Wireless',
              5 => 'Cable & Wireless',
            ),
          ),
          5 =>
          array (
            2 =>
            array (
              6 => 'Digicel',
              7 => 'Digicel',
              8 => 'Digicel',
              9 => 'Digicel',
            ),
            3 =>
            array (
              0 => 'Digicel',
              1 => 'Digicel',
              2 => 'Digicel',
              3 => 'Digicel',
              4 => 'Digicel',
            ),
          ),
        ),
        7 =>
        array (
          2 =>
          array (
            0 =>
            array (
              3 => 'Claro',
            ),
            1 =>
            array (
              0 => 'SunCom Wireless Puerto Rico',
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
              8 => 'Claro',
              9 => 'Claro',
            ),
            2 =>
            array (
              0 => 'CENTENNIAL',
              1 => 'CENTENNIAL',
              2 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              4 => 'CENTENNIAL',
              5 => 'SunCom Wireless Puerto Rico',
              6 => 'SunCom Wireless Puerto Rico',
              7 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
            5 =>
            array (
              3 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
              8 => 'Claro',
              9 => 'Claro',
            ),
            6 =>
            array (
              0 => 'Claro',
            ),
            9 =>
            array (
              1 => 'CENTENNIAL',
              9 => 'SunCom Wireless Puerto Rico',
            ),
          ),
          3 =>
          array (
            0 =>
            array (
              0 => 'CENTENNIAL',
            ),
            1 =>
            array (
              0 => 'SunCom Wireless Puerto Rico',
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
              8 => 'Claro',
              9 =>
              array (
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
            ),
            4 =>
            array (
              1 => 'SunCom Wireless Puerto Rico',
              4 => 'SunCom Wireless Puerto Rico',
              6 => 'SunCom Wireless Puerto Rico',
            ),
            5 =>
            array (
              5 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
              9 => 'SunCom Wireless Puerto Rico',
            ),
            6 =>
            array (
              7 => 'SunCom Wireless Puerto Rico',
              8 => 'SunCom Wireless Puerto Rico',
              9 => 'CENTENNIAL',
            ),
            7 =>
            array (
              1 => 'Claro',
              2 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
            ),
            8 =>
            array (
              0 => 'Claro',
              1 => 'Claro',
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              9 => 'Claro',
            ),
            9 =>
            array (
              0 => 'Claro',
              1 => 'Claro',
              2 => 'Claro',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              0 => 'CENTENNIAL',
            ),
            1 =>
            array (
              0 => 'SunCom Wireless Puerto Rico',
            ),
            3 =>
            array (
              4 => 'CENTENNIAL',
            ),
            4 =>
            array (
              7 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
            5 =>
            array (
              0 => 'Claro',
              3 => 'Claro',
              4 => 'SunCom Wireless Puerto Rico',
              8 => 'SunCom Wireless Puerto Rico',
              9 => 'SunCom Wireless Puerto Rico',
            ),
            6 =>
            array (
              0 => 'SunCom Wireless Puerto Rico',
              2 => 'SunCom Wireless Puerto Rico',
              3 => 'SunCom Wireless Puerto Rico',
              5 => 'CENTENNIAL',
              6 => 'SunCom Wireless Puerto Rico',
            ),
            7 =>
            array (
              1 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              4 => 'CENTENNIAL',
              8 => 'SunCom Wireless Puerto Rico',
              9 => 'CENTENNIAL',
            ),
            8 =>
            array (
              1 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
            ),
          ),
          5 =>
          array (
            1 =>
            array (
              3 => 'SunCom Wireless Puerto Rico',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
              8 => 'Claro',
              9 => 'Claro',
            ),
            2 =>
            array (
              0 => 'CENTENNIAL',
              1 => 'CENTENNIAL',
              2 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              8 => 'SunCom Wireless Puerto Rico',
            ),
            3 =>
            array (
              4 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
            ),
            4 =>
            array (
              4 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
              6 => 'SunCom Wireless Puerto Rico',
            ),
            5 =>
            array (
              1 => 'CENTENNIAL',
              3 => 'Claro',
            ),
            6 =>
            array (
              1 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              8 => 'SunCom Wireless Puerto Rico',
              9 => 'CENTENNIAL',
            ),
            7 =>
            array (
              9 => 'Claro',
            ),
            8 =>
            array (
              0 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
            9 =>
            array (
              5 => 'SunCom Wireless Puerto Rico',
              7 => 'SunCom Wireless Puerto Rico',
              8 => 'SunCom Wireless Puerto Rico',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'SunCom Wireless Puerto Rico',
              2 => 'CENTENNIAL',
              4 => 'SunCom Wireless Puerto Rico',
              5 => 'SunCom Wireless Puerto Rico',
              7 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
            1 =>
            array (
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
              9 => 'SunCom Wireless Puerto Rico',
            ),
            2 =>
            array (
              0 => 'CENTENNIAL',
              1 => 'CENTENNIAL',
              2 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              4 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
              6 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
              9 => 'SunCom Wireless Puerto Rico',
            ),
            4 => 'CENTENNIAL',
            5 => 'CENTENNIAL',
            6 =>
            array (
              2 => 'SunCom Wireless Puerto Rico',
              6 => 'SunCom Wireless Puerto Rico',
            ),
            7 =>
            array (
              3 => 'SunCom Wireless Puerto Rico',
              5 => 'CENTENNIAL',
              8 => 'SunCom Wireless Puerto Rico',
            ),
            8 =>
            array (
              6 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
            9 =>
            array (
              0 => 'CENTENNIAL',
              2 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
            ),
          ),
          7 =>
          array (
            1 =>
            array (
              7 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'SunCom Wireless Puerto Rico',
              3 => 'CENTENNIAL',
              4 => 'SunCom Wireless Puerto Rico',
              8 => 'CENTENNIAL',
            ),
            1 =>
            array (
              2 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
              6 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
            ),
            2 =>
            array (
              2 => 'SunCom Wireless Puerto Rico',
              3 => 'SunCom Wireless Puerto Rico',
              4 => 'CENTENNIAL',
              6 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
            ),
            3 =>
            array (
              3 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
            ),
            4 =>
            array (
              0 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
              9 => 'SunCom Wireless Puerto Rico',
            ),
            5 =>
            array (
              2 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              4 => 'CENTENNIAL',
              7 => 'CENTENNIAL',
            ),
            6 =>
            array (
              1 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
            7 =>
            array (
              1 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
            ),
            9 =>
            array (
              2 => 'CENTENNIAL',
              3 => 'CENTENNIAL',
              8 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
          ),
        ),
      ),
    ),
    8 =>
    array (
      0 =>
      array (
        9 =>
        array (
          2 =>
          array (
            0 => 'Tricom',
            2 => 'Claro',
            3 => 'Claro',
            4 => 'Claro',
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Tricom',
          ),
          3 =>
          array (
            0 => 'Viva',
            1 => 'Tricom',
            2 => 'Tricom',
            3 => 'Claro',
            4 => 'Tricom',
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Claro',
          ),
          4 =>
          array (
            1 => 'Viva',
            2 => 'Claro',
            3 => 'Viva',
            4 => 'Viva',
            5 => 'Claro',
            7 => 'Tricom',
            8 => 'Claro',
            9 => 'Claro',
          ),
          5 =>
          array (
            1 => 'Claro',
            4 => 'Claro',
          ),
          6 =>
          array (
            0 => 'Claro',
            2 => 'Tricom',
            3 => 'Tricom',
            4 => 'Tricom',
            5 => 'Tricom',
            7 => 'Claro',
            9 => 'Claro',
          ),
          7 =>
          array (
            0 => 'Claro',
            1 => 'Claro',
            2 => 'Claro',
            4 => 'Claro',
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Viva',
            8 => 'Claro',
            9 => 'Claro',
          ),
          8 =>
          array (
            0 => 'Orange',
            1 => 'Viva',
            2 => 'Claro',
            3 => 'Claro',
            4 => 'Orange',
            5 => 'Orange',
            6 => 'Orange',
            7 => 'Tricom',
            8 => 'Orange',
            9 => 'Orange',
          ),
          9 =>
          array (
            1 => 'Orange',
            2 => 'Tricom',
            3 => 'Tricom',
            4 => 'Tricom',
            5 => 'Claro',
            7 => 'Orange',
            8 => 'Orange',
            9 => 'Tricom',
          ),
        ),
      ),
      6 =>
      array (
        8 =>
        array (
          2 =>
          array (
            8 => 'Digicel',
            9 => 'Digicel',
          ),
          3 => 'Digicel',
          4 => 'bmobile',
          6 => 'bmobile',
          7 => 'bmobile',
        ),
        9 =>
        array (
          5 =>
          array (
            5 => 'CariGlobe St. Kitts',
            6 => 'The Cable St. Kitts',
          ),
          6 =>
          array (
            6 => 'Cable & Wireless',
          ),
          7 =>
          array (
            6 => 'Digicel',
          ),
        ),
      ),
    ),
    9 =>
    array (
      3 =>
      array (
        9 =>
        array (
          2 =>
          array (
            0 =>
            array (
              1 => 'CENTENNIAL',
            ),
            1 =>
            array (
              2 => 'CENTENNIAL',
              4 => 'CENTENNIAL',
            ),
            4 =>
            array (
              0 => 'SunCom Wireless Puerto Rico',
              1 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                9 =>
                array (
                  9 => 'Claro',
                ),
              ),
              2 => 'Claro',
              3 =>
              array (
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
              8 => 'Claro',
              9 => 'Claro',
            ),
            5 =>
            array (
              0 => 'Claro',
              1 => 'Claro',
              2 => 'CENTENNIAL',
              3 => 'Claro',
              4 => 'Claro',
              5 => 'Claro',
              6 => 'Claro',
              7 => 'Claro',
              8 => 'Claro',
              9 => 'Claro',
            ),
          ),
          3 =>
          array (
            0 =>
            array (
              7 => 'CENTENNIAL',
            ),
            2 =>
            array (
              5 => 'SunCom Wireless Puerto Rico',
              9 => 'CENTENNIAL',
            ),
            3 =>
            array (
              4 => 'Claro',
              9 => 'SunCom Wireless Puerto Rico',
            ),
            9 =>
            array (
              4 => 'CENTENNIAL',
            ),
          ),
          4 =>
          array (
            4 =>
            array (
              0 => 'CENTENNIAL',
            ),
          ),
          6 =>
          array (
            2 =>
            array (
              8 => 'CENTENNIAL',
            ),
            3 =>
            array (
              0 => 'CENTENNIAL',
              9 => 'CENTENNIAL',
            ),
            4 =>
            array (
              0 => 'CENTENNIAL',
              2 => 'CENTENNIAL',
              4 => 'CENTENNIAL',
              5 => 'CENTENNIAL',
            ),
            9 =>
            array (
              7 => 'CENTENNIAL',
            ),
          ),
          7 =>
          array (
            1 =>
            array (
              7 => 'CENTENNIAL',
            ),
            3 =>
            array (
              1 => 'CENTENNIAL',
            ),
            7 =>
            array (
              7 => 'Claro',
            ),
          ),
          8 =>
          array (
            6 =>
            array (
              5 => 'SunCom Wireless Puerto Rico',
            ),
            9 =>
            array (
              1 => 'SunCom Wireless Puerto Rico',
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              0 => 'CENTENNIAL',
            ),
            4 =>
            array (
              0 => 'CENTENNIAL',
            ),
            6 =>
            array (
              9 => 'CENTENNIAL',
            ),
          ),
        ),
      ),
    ),
  ),
  20 =>
  array (
    1 =>
    array (
      0 => 'Vodafone',
      1 => 'Etisalat',
      2 => 'Mobinil',
    ),
  ),
  211 =>
  array (
    9 =>
    array (
      1 => 'Zain',
      2 => 'MTN',
      5 => 'Vivacell',
      7 => 'Gemtel',
    ),
  ),
  212 =>
  array (
    6 =>
    array (
      0 =>
      array (
        0 => 'Inwi',
        1 => 'Inwi',
        2 => 'Inwi',
        3 => 'Inwi',
        4 => 'Inwi',
        5 => 'Inwi',
        6 => 'Inwi',
        7 => 'Inwi',
        8 => 'Inwi',
      ),
      1 =>
      array (
        0 => 'Maroc Telecom',
        1 => 'Maroc Telecom',
        2 => 'Méditel',
        3 => 'Maroc Telecom',
        4 => 'Méditel',
        5 => 'Maroc Telecom',
        6 => 'Maroc Telecom',
        7 => 'Méditel',
        8 => 'Maroc Telecom',
        9 => 'Méditel',
      ),
      2 =>
      array (
        0 => 'Méditel',
        1 => 'Méditel',
        2 => 'Maroc Telecom',
        3 => 'Maroc Telecom',
        4 => 'Maroc Telecom',
        5 => 'Méditel',
        6 => 'Inwi',
        7 => 'Inwi',
        8 => 'Maroc Telecom',
        9 => 'Inwi',
      ),
      3 =>
      array (
        0 => 'Inwi',
        1 => 'Méditel',
        2 => 'Méditel',
        3 => 'Inwi',
        4 => 'Inwi',
        5 => 'Inwi',
        6 => 'Maroc Telecom',
        7 => 'Maroc Telecom',
        8 => 'Inwi',
        9 => 'Maroc Telecom',
      ),
      4 =>
      array (
        0 => 'Inwi',
        1 => 'Maroc Telecom',
        2 => 'Maroc Telecom',
        3 => 'Maroc Telecom',
        4 => 'Méditel',
        5 => 'Méditel',
        6 => 'Inwi',
        7 => 'Inwi',
        8 => 'Maroc Telecom',
        9 => 'Méditel',
      ),
      5 =>
      array (
        0 => 'Maroc Telecom',
        1 => 'Maroc Telecom',
        2 => 'Maroc Telecom',
        3 => 'Maroc Telecom',
        4 => 'Maroc Telecom',
        5 => 'Maroc Telecom',
        6 => 'Méditel',
        7 => 'Méditel',
        8 => 'Maroc Telecom',
        9 => 'Maroc Telecom',
      ),
      6 =>
      array (
        0 => 'Méditel',
        1 => 'Maroc Telecom',
        2 => 'Maroc Telecom',
        3 => 'Méditel',
        4 => 'Méditel',
        5 => 'Méditel',
        6 => 'Maroc Telecom',
        7 => 'Maroc Telecom',
        8 => 'Maroc Telecom',
        9 => 'Méditel',
      ),
      7 =>
      array (
        0 => 'Maroc Telecom',
        1 => 'Maroc Telecom',
        2 => 'Maroc Telecom',
        3 => 'Maroc Telecom',
        4 => 'Méditel',
        5 => 'Méditel',
        6 => 'Maroc Telecom',
        7 => 'Maroc Telecom',
        8 => 'Maroc Telecom',
        9 => 'Méditel',
      ),
      8 =>
      array (
        0 => 'Inwi',
        1 => 'Inwi',
      ),
      9 =>
      array (
        2 => 'GlobalStar',
        4 => 'Méditel',
        5 => 'Inwi',
        7 => 'Maroc Telecom',
        8 => 'Inwi',
        9 => 'Inwi',
      ),
    ),
  ),
  213 =>
  array (
    5 =>
    array (
      4 => 'Nedjma',
      5 => 'Nedjma',
      6 => 'Nedjma',
    ),
    6 => 'Mobilis',
    7 =>
    array (
      7 => 'Djezzy',
      9 => 'Djezzy',
    ),
  ),
  216 =>
  array (
    2 => 'Ooredoo',
    4 =>
    array (
      0 => 'Tunisie Telecom',
      1 => 'Tunisie Telecom',
      2 => 'Tunisie Telecom',
      4 => 'Tunisie Telecom',
    ),
    5 => 'Orange',
    9 => 'Tunisie Telecom',
  ),
  220 =>
  array (
    2 => 'Africell',
    3 => 'QCell',
    6 => 'Comium',
    7 => 'Africell',
    9 => 'Gamcel',
  ),
  221 =>
  array (
    7 =>
    array (
      0 => 'Expresso',
      2 => 'HAYO',
      6 => 'Tigo',
      7 => 'Orange',
      8 => 'Orange',
      9 => 'ADIE',
    ),
  ),
  222 =>
  array (
    2 => 'Chinguitel',
    3 => 'Mattel',
    4 => 'Mauritel',
  ),
  223 =>
  array (
    7 => 'Orange',
  ),
  224 =>
  array (
    6 =>
    array (
      0 => 'Sotelgui',
      2 => 'Orange',
      3 => 'Intercel',
      5 => 'Cellcom',
      6 => 'Areeba',
    ),
  ),
  225 =>
  array (
    0 =>
    array (
      1 => 'Moov',
      2 => 'Moov',
      3 => 'Moov',
      4 => 'MTN',
      5 => 'MTN',
      6 => 'MTN',
      7 => 'Orange',
      8 => 'Orange',
      9 => 'Orange',
    ),
    4 =>
    array (
      0 => 'Moov',
      1 => 'Moov',
      2 => 'Moov',
      4 => 'MTN',
      5 => 'MTN',
      6 => 'MTN',
      7 => 'Orange',
      8 => 'Orange',
      9 => 'Orange',
    ),
    5 =>
    array (
      4 => 'MTN',
      5 => 'MTN',
      6 => 'MTN',
      7 => 'Orange',
      8 => 'Orange',
      9 => 'Orange',
    ),
    6 =>
    array (
      0 => 'GreenN',
      1 => 'GreenN',
      5 => 'KoZ',
      6 => 'KoZ',
      7 => 'KoZ',
      9 => 'Aircom',
    ),
    7 =>
    array (
      5 => 'MTN',
      7 => 'Orange',
    ),
  ),
  226 =>
  array (
    6 =>
    array (
      0 => 'Telmob',
      1 => 'Telmob',
      2 => 'Telmob',
      3 => 'Telmob',
      4 => 'Airtel',
      5 => 'Airtel',
      6 => 'Airtel',
      7 => 'Airtel',
      8 => 'Telecel Faso',
      9 => 'Telecel Faso',
    ),
    7 =>
    array (
      0 => 'Telmob',
      1 => 'Telmob',
      2 => 'Telmob',
      3 => 'Telmob',
      4 => 'Airtel',
      5 => 'Airtel',
      6 => 'Airtel',
      7 => 'Airtel',
      8 => 'Telecel Faso',
      9 => 'Telecel Faso',
    ),
  ),
  227 =>
  array (
    8 =>
    array (
      9 => 'Airtel',
    ),
    9 =>
    array (
      0 => 'Orange',
      1 => 'Orange',
      2 => 'Orange',
      4 => 'Moov',
      5 => 'Moov',
      6 => 'Airtel',
      7 => 'Airtel',
      8 => 'Airtel',
      9 => 'Airtel',
    ),
  ),
  228 =>
  array (
    9 =>
    array (
      8 => 'Moov',
      9 => 'Moov',
    ),
  ),
  229 =>
  array (
    6 =>
    array (
      1 => 'MTN',
      4 => 'Moov',
      6 => 'MTN',
      7 => 'MTN',
      8 => 'Glo',
    ),
    9 =>
    array (
      0 => 'Libercom',
      3 => 'BLK',
      4 => 'Moov',
      5 => 'Moov',
      7 => 'MTN',
      8 => 'Glo',
      9 => 'Glo',
    ),
  ),
  230 =>
  array (
    5 =>
    array (
      2 =>
      array (
        5 => 'Cellplus',
        9 => 'MTML',
      ),
      4 =>
      array (
        2 =>
        array (
          1 => 'Emtel',
          2 => 'Emtel',
          3 => 'Emtel',
          8 => 'Emtel',
          9 => 'Emtel',
        ),
        4 => 'Emtel',
        7 =>
        array (
          1 => 'Mauritius Telecom',
          2 => 'Emtel',
          3 => 'Emtel',
          4 => 'Emtel',
          5 => 'Emtel',
          6 => 'Emtel',
          7 => 'Emtel',
          8 => 'Emtel',
          9 => 'Emtel',
        ),
        9 => 'Emtel',
      ),
      7 =>
      array (
        0 => 'Cellplus',
        1 => 'Emtel',
        2 => 'Emtel',
        3 => 'Emtel',
        4 => 'Emtel',
        5 => 'Cellplus',
        6 => 'Cellplus',
        7 => 'Cellplus',
        8 => 'Cellplus',
        9 => 'Cellplus',
      ),
      8 =>
      array (
        2 => 'Cellplus',
        5 => 'Emtel',
        6 => 'MTML',
        7 =>
        array (
          1 => 'MTML',
          5 => 'Cellplus',
          6 => 'Cellplus',
          7 => 'Cellplus',
          8 => 'Cellplus',
        ),
      ),
      9 =>
      array (
        0 => 'Cellplus',
        1 => 'Cellplus',
        2 => 'Cellplus',
        3 => 'Emtel',
        4 => 'Cellplus',
        5 => 'MTML',
        6 => 'MTML',
        7 => 'Emtel',
        8 => 'Emtel',
      ),
    ),
  ),
  231 =>
  array (
    3 =>
    array (
      3 =>
      array (
        0 => 'West Africa Telecom',
      ),
    ),
    5 =>
    array (
      5 =>
      array (
        5 => 'Novafone',
      ),
    ),
    7 =>
    array (
      7 => 'Cellcom',
    ),
    8 =>
    array (
      8 => 'Lonestar Cell',
    ),
    9 =>
    array (
      9 =>
      array (
        4 => 'Atlantic Wireless',
      ),
    ),
  ),
  232 =>
  array (
    3 =>
    array (
      0 => 'Africell',
      3 => 'Comium',
    ),
    7 =>
    array (
      6 => 'Airtel',
      7 => 'Africell',
      8 => 'Airtel',
      9 => 'Airtel',
    ),
    8 =>
    array (
      8 => 'Africell',
    ),
  ),
  233 =>
  array (
    2 =>
    array (
      0 => 'Vodafone',
      3 => 'Globacom (Zain)',
      4 => 'MTN',
      6 => 'Airtel',
      7 => 'tiGO',
      8 => 'Expresso',
    ),
    5 =>
    array (
      4 => 'MTN',
      5 =>
      array (
        4 => 'MTN',
      ),
      7 => 'tiGO',
    ),
  ),
  234 =>
  array (
    1 =>
    array (
      7 =>
      array (
        3 => 'Starcomms',
        4 => 'Starcomms',
      ),
      8 =>
      array (
        0 =>
        array (
          4 => 'Starcomms',
        ),
        1 => 'Starcomms',
        2 => 'Starcomms',
        4 => 'Starcomms',
        5 => 'Starcomms',
        7 => 'Starcomms',
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
        ),
        9 => 'Starcomms',
      ),
      9 =>
      array (
        5 => 'Starcomms',
      ),
    ),
    2 =>
    array (
      8 =>
      array (
        7 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
        ),
      ),
    ),
    3 =>
    array (
      1 =>
      array (
        8 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
        ),
      ),
      9 =>
      array (
        6 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
        ),
        8 =>
        array (
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
      ),
    ),
    4 =>
    array (
      2 =>
      array (
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
        ),
      ),
      6 =>
      array (
        7 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        8 =>
        array (
          0 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          7 => 'Starcomms',
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
        ),
      ),
    ),
    5 =>
    array (
      2 =>
      array (
        7 =>
        array (
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        8 => 'Starcomms',
      ),
      3 =>
      array (
        8 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          9 => 'Starcomms',
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
        ),
      ),
      6 =>
      array (
        8 =>
        array (
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
        ),
      ),
    ),
    6 =>
    array (
      2 =>
      array (
        7 =>
        array (
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        8 => 'Starcomms',
      ),
      4 =>
      array (
        3 =>
        array (
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        6 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          9 => 'Starcomms',
        ),
        7 =>
        array (
          0 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          9 => 'Starcomms',
        ),
        8 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          9 => 'Starcomms',
        ),
        9 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
        ),
      ),
      9 =>
      array (
        8 =>
        array (
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
      ),
    ),
    7 =>
    array (
      0 =>
      array (
        2 =>
        array (
          1 => 'M-Tel',
          2 => 'M-Tel',
          5 => 'Visafone',
          6 => 'Visafone',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        3 => 'MTN',
        4 => 'Visafone',
        5 => 'Glo',
        6 => 'MTN',
        7 => 'Glo',
        8 => 'Airtel',
      ),
      3 =>
      array (
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
        ),
      ),
      6 =>
      array (
        9 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
        ),
      ),
    ),
    8 =>
    array (
      0 =>
      array (
        2 => 'Airtel',
        3 => 'MTN',
        4 => 'M-Tel',
        5 => 'Glo',
        6 => 'MTN',
        7 => 'Glo',
        8 => 'Airtel',
        9 => 'Etisalat',
      ),
      1 =>
      array (
        0 => 'MTN',
        1 => 'Glo',
        2 => 'Airtel',
        3 => 'MTN',
        4 => 'MTN',
        5 => 'Glo',
        6 => 'MTN',
        7 => 'Etisalat',
        8 => 'Etisalat',
        9 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
        ),
      ),
      2 =>
      array (
        8 =>
        array (
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          2 => 'Starcomms',
        ),
      ),
      4 =>
      array (
        2 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
        ),
        3 =>
        array (
          1 => 'Starcomms',
          4 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        5 =>
        array (
          3 => 'Starcomms',
          4 => 'Starcomms',
          6 => 'Starcomms',
        ),
        7 =>
        array (
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        8 =>
        array (
          0 => 'Starcomms',
          1 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
        9 =>
        array (
          0 => 'Starcomms',
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          1 => 'Starcomms',
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          2 => 'Starcomms',
          3 => 'Starcomms',
          4 => 'Starcomms',
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
          8 => 'Starcomms',
          9 => 'Starcomms',
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          5 => 'Starcomms',
          6 => 'Starcomms',
          7 => 'Starcomms',
        ),
      ),
    ),
    9 =>
    array (
      0 =>
      array (
        2 => 'Airtel',
        3 => 'MTN',
        9 => 'Etisalat',
      ),
      8 =>
      array (
        0 => 'Starcomms',
        7 => 'Starcomms',
      ),
    ),
  ),
  235 =>
  array (
    6 => 'Airtel',
  ),
  236 =>
  array (
    7 =>
    array (
      0 => 'TC',
      2 => 'Orange',
      5 => 'CTP',
      7 => 'Nationlink',
    ),
  ),
  237 =>
  array (
    7 => 'MTN Cameroon',
    9 => 'Orange',
  ),
  238 =>
  array (
    9 =>
    array (
      1 => 'T+',
      2 => 'T+',
      5 => 'CVMOVEL',
      7 => 'CVMOVEL',
      8 => 'CVMOVEL',
      9 => 'CVMOVEL',
    ),
  ),
  239 =>
  array (
    9 =>
    array (
      8 => 'CSTmovel',
      9 => 'CSTmovel',
    ),
  ),
  240 =>
  array (
    5 => 'Orange GQ',
    6 => 'Orange GQ',
    7 => 'Orange GQ',
  ),
  241 =>
  array (
    0 =>
    array (
      4 => 'Airtel',
      5 => 'Moov',
      6 => 'Libertis',
      7 => 'Airtel',
    ),
    1 =>
    array (
      0 => 'Libertis',
      1 => 'Libertis',
    ),
    2 =>
    array (
      0 => 'Libertis',
      1 => 'Libertis',
      2 => 'Libertis',
      3 => 'Libertis',
      4 => 'Libertis',
      5 => 'Libertis',
      6 => 'Libertis',
      7 => 'Libertis',
    ),
    3 => 'Libertis',
    4 => 'Airtel',
    5 => 'Moov',
    6 => 'Libertis',
    7 => 'Airtel',
    9 =>
    array (
      5 => 'Libertis',
      7 => 'Libertis',
    ),
  ),
  242 =>
  array (
    0 =>
    array (
      5 => 'Airtel',
      6 => 'Libertis Telecom',
    ),
  ),
  243 =>
  array (
    8 =>
    array (
      0 => 'Supercell',
      1 => 'Vodacom',
      2 => 'Vodacom',
      4 => 'CCT',
      8 => 'Yozma Timeturns sprl -YTT',
      9 => 'Tigo',
    ),
    9 =>
    array (
      7 => 'Zain',
      8 => 'Zain',
      9 => 'Zain',
    ),
  ),
  244 =>
  array (
    9 =>
    array (
      1 => 'Movicel',
      2 => 'UNITEL',
      3 => 'UNITEL',
      4 => 'UNITEL',
      9 => 'Movicel',
    ),
  ),
  245 =>
  array (
    5 => 'Orange',
    6 => 'Areeba',
  ),
  248 =>
  array (
    2 =>
    array (
      7 => 'Airtel',
      8 => 'Airtel',
    ),
  ),
  249 =>
  array (
    9 =>
    array (
      1 => 'Zain',
      2 => 'MTN',
      5 => 'Network of The World Ltd',
      6 => 'Zain',
      9 => 'MTN',
    ),
  ),
  250 =>
  array (
    7 =>
    array (
      3 => 'Airtel',
    ),
  ),
  251 =>
  array (
    9 =>
    array (
      1 => 'ETH-MTN',
    ),
  ),
  252 =>
  array (
    2 =>
    array (
      4 => 'Telesom',
      8 => 'Nationlink',
    ),
    6 =>
    array (
      3 => 'Telesom',
      7 => 'Nationlink',
      8 => 'Nationlink',
      9 => 'Nationlink',
    ),
    7 =>
    array (
      9 => 'Somtel',
    ),
    9 =>
    array (
      0 =>
      array (
        7 => 'Golis Telecom',
      ),
    ),
  ),
  253 =>
  array (
    7 =>
    array (
      7 =>
      array (
        6 => 'Evatis',
        7 => 'Evatis',
        8 => 'Evatis',
      ),
    ),
  ),
  254 =>
  array (
    7 =>
    array (
      0 => 'Safaricom',
      1 => 'Safaricom',
      2 => 'Safaricom',
      3 => 'Airtel',
      6 => 'Airtel',
      5 =>
      array (
        0 => 'Essar',
        1 => 'Essar',
        2 => 'Essar',
        3 => 'Essar',
        4 => 'Essar',
        5 => 'Essar',
        6 => 'Essar',
      ),
      7 =>
      array (
        0 => 'Telkom',
        1 => 'Telkom',
        2 => 'Telkom',
        3 => 'Telkom',
        4 => 'Telkom',
        5 => 'Telkom',
      ),
      8 =>
      array (
        0 => 'Airtel',
        1 => 'Airtel',
        2 => 'Airtel',
        5 => 'Airtel',
        6 => 'Airtel',
        7 => 'Airtel',
        8 => 'Airtel',
        9 => 'Airtel',
      ),
    ),
  ),
  255 =>
  array (
    6 =>
    array (
      5 => 'tiGO',
      8 => 'Airtel',
    ),
    7 =>
    array (
      1 => 'tiGO',
      5 => 'Vodacom',
      6 => 'Vodacom',
      7 => 'Zantel',
      8 => 'Airtel',
    ),
  ),
  256 =>
  array (
    2 =>
    array (
      0 =>
      array (
        3 =>
        array (
          0 => 'Afrimax',
        ),
      ),
    ),
    7 =>
    array (
      0 => 'Warid',
      1 => 'UTL',
      2 =>
      array (
        0 => 'Smile',
        3 => 'Afrimax',
      ),
      3 =>
      array (
        0 => 'K2',
      ),
      4 => 'Sure Telecom',
      5 => 'Airtel',
      6 => 'i-Tel',
      7 => 'MTN',
      8 => 'MTN',
      9 => 'Orange',
    ),
  ),
  257 =>
  array (
    2 =>
    array (
      9 => 'Leo',
    ),
    7 =>
    array (
      1 => 'Leo',
      5 => 'Smart Mobile',
      6 => 'Econet',
      7 => 'Onatel',
      8 => 'Tempo',
      9 => 'Leo',
    ),
  ),
  258 =>
  array (
    8 =>
    array (
      2 => 'mcel',
      3 => 'mcel',
      4 => 'Vodacom',
      7 => 'Movitel',
    ),
  ),
  260 =>
  array (
    9 =>
    array (
      5 => 'ZAMTEL',
      6 => 'MTN',
      7 => 'Airtel',
    ),
  ),
  261 =>
  array (
    3 =>
    array (
      2 => 'Orange',
      3 => 'Airtel',
      4 => 'Telma',
      9 => 'Blueline',
    ),
  ),
  263 =>
  array (
    7 =>
    array (
      1 => 'Net*One',
      3 => 'Telecel',
      7 => 'Econet',
    ),
  ),
  265 =>
  array (
    8 =>
    array (
      8 => 'TNM',
    ),
    9 =>
    array (
      9 => 'Airtel',
    ),
  ),
  267 =>
  array (
    7 =>
    array (
      1 => 'Mascom',
      2 => 'Orange',
      3 => 'BTC Mobile',
      4 =>
      array (
        0 => 'Mascom',
        1 => 'Mascom',
        2 => 'Mascom',
        3 => 'Orange',
        4 => 'Orange',
        5 => 'Mascom',
        6 => 'Mascom',
        7 => 'Mascom',
      ),
      5 =>
      array (
        0 => 'Orange',
        1 => 'Orange',
        2 => 'Orange',
        3 => 'Orange',
        4 => 'Mascom',
        5 => 'Mascom',
        6 => 'Mascom',
        7 => 'Orange',
        8 => 'BTC Mobile',
        9 => 'Mascom',
      ),
      6 =>
      array (
        0 => 'Mascom',
        1 => 'Mascom',
        2 => 'Mascom',
        3 => 'Orange',
        4 => 'Orange',
        5 => 'Orange',
        6 => 'Mascom',
        7 => 'Mascom',
        8 => 'BTC Mobile',
        9 => 'BTC Mobile/Orange',
      ),
      7 =>
      array (
        0 => 'Mascom',
        1 => 'Mascom',
        4 => 'Orange',
        5 => 'Orange',
        6 => 'Mascom',
        7 => 'Mascom',
      ),
    ),
  ),
  268 =>
  array (
    6 => 'Swazi MTN',
  ),
  27 =>
  array (
    6 =>
    array (
      0 =>
      array (
        3 => 'MTN',
        4 => 'MTN',
        5 => 'MTN',
        6 => 'Vodacom',
        7 => 'Vodacom',
        8 => 'Vodacom',
        9 => 'Vodacom',
      ),
      1 =>
      array (
        0 => 'Cell C',
        1 => 'Cell C',
        2 => 'Cell C',
        3 => 'Cell C',
        4 => 'Telkom Mobile',
        5 => 'Cell C',
        6 => 'Cell C',
        7 => 'Cell C',
        8 => 'Cell C',
        9 => 'Cell C',
      ),
      2 =>
      array (
        0 => 'Cell C',
        1 => 'Cell C',
        2 => 'Cell C',
        3 => 'Cell C',
        4 => 'Cell C',
      ),
    ),
    7 =>
    array (
      1 =>
      array (
        0 => 'MTN',
        1 => 'Vodacom',
        2 => 'Vodacom',
        3 => 'Vodacom',
        4 => 'Vodacom',
        5 => 'Vodacom',
        6 => 'Vodacom',
        7 => 'MTN',
        8 => 'MTN',
        9 => 'MTN',
      ),
      2 => 'Vodacom',
      3 => 'MTN',
      4 => 'CVll C',
      6 => 'Vodacom',
      8 => 'MTN',
      9 => 'Vodacom',
    ),
    8 =>
    array (
      1 =>
      array (
        0 => 'MTN',
        1 => 'Telkom Mobile',
        2 => 'Telkom Mobile',
        3 => 'Telkom Mobile',
        4 => 'Telkom Mobile',
        5 => 'Telkom Mobile',
        6 => 'WBS Mobile',
        7 => 'Telkom Mobile',
        8 => 'Vodacom',
      ),
      2 => 'Vodacom',
      3 => 'MTN',
      4 => 'Cell C',
    ),
  ),
  297 =>
  array (
    5 =>
    array (
      6 => 'SETAR',
      9 =>
      array (
        2 => 'SETAR',
        3 => 'SETAR',
        4 => 'SETAR',
        7 => 'SETAR',
        8 => 'SETAR',
      ),
    ),
    6 =>
    array (
      6 =>
      array (
        0 => 'SETAR',
        1 => 'SETAR',
      ),
      9 =>
      array (
        0 => 'SETAR',
      ),
    ),
    7 =>
    array (
      3 => 'Digicel',
      4 => 'Digicel',
    ),
    9 =>
    array (
      9 =>
      array (
        5 => 'SETAR',
        6 => 'SETAR',
        7 => 'SETAR',
        8 => 'SETAR',
      ),
    ),
  ),
  298 =>
  array (
    2 => 'Faroese Telecom',
    5 => 'Vodafone',
    6 => 'Vodafone',
    7 => 'Vodafone',
  ),
  299 =>
  array (
    2 => 'TELE Greenland A/S',
    4 => 'TELE Greenland A/S',
    5 => 'TELE Greenland A/S',
  ),
  30 =>
  array (
    6 =>
    array (
      9 =>
      array (
        0 => 'Wind',
        3 => 'Wind',
        4 => 'Vodafone',
        5 => 'Vodafone',
        7 => 'Cosmote',
        8 => 'Cosmote',
      ),
    ),
  ),
  31 =>
  array (
    6 =>
    array (
      1 =>
      array (
        0 => 'KPN',
        1 => 'Vodafone Libertel B.V.',
        2 => 'KPN',
        3 => 'KPN',
        4 => 'T-Mobile',
        5 => 'Vodafone Libertel B.V.',
        6 => 'Telfort',
        7 => 'Telfort',
      ),
      2 =>
      array (
        0 => 'KPN',
        1 => 'Vodafone Libertel B.V.',
        2 => 'KPN',
        3 => 'KPN',
        4 => 'T-Mobile',
        5 => 'Vodafone Libertel B.V.',
        6 => 'Telfort',
        7 => 'Vodafone Libertel B.V.',
        9 => 'Vodafone Libertel B.V.',
      ),
      3 =>
      array (
        0 => 'KPN',
        1 => 'Vodafone Libertel B.V.',
        3 => 'Telfort',
        4 => 'T-Mobile',
        5 =>
        array (
          1 => 'Intercity Zakelijk',
          9 => 'ASPIDER Solutions Nederland B.V.',
        ),
        6 => 'Tele2',
        7 => 'Teleena (MVNE)',
      ),
      4 =>
      array (
        0 => 'Tele2',
        1 => 'T-Mobile',
        2 => 'T-Mobile',
        3 => 'T-Mobile',
        4 => 'Telfort',
        5 => 'Telfort',
        6 => 'Vodafone Libertel B.V.',
        7 => 'Telfort',
        9 => 'Telfort',
      ),
      5 =>
      array (
        0 => 'Vodafone Libertel B.V.',
        1 => 'KPN',
        2 => 'Vodafone Libertel B.V.',
        3 => 'KPN',
        4 => 'Vodafone Libertel B.V.',
        5 => 'Vodafone Libertel B.V.',
        6 => 'T-Mobile',
        7 => 'KPN',
        8 => 'Telfort',
        9 => 'Vectone Mobile/Delight Mobile',
      ),
      8 =>
      array (
        0 => 'Vodafone Libertel B.V.',
        1 => 'T-Mobile',
        3 => 'KPN',
        4 => 'Lycamobile',
        5 => 'Lycamobile',
        6 => 'Lycamobile',
        7 => 'Lycamobile',
      ),
    ),
  ),
  32 =>
  array (
    4 =>
    array (
      6 => 'Telenet',
      7 => 'Proximus',
      8 => 'BASE',
      9 => 'Mobistar',
    ),
  ),
  33 =>
  array (
    6 =>
    array (
      0 =>
      array (
        0 =>
        array (
          1 => 'Orange France',
          2 => 'SFR',
          3 => 'Bouygues',
          7 => 'SFR',
          8 => 'Orange France',
          9 => 'Bouygues',
        ),
        1 => 'SFR',
        3 => 'SFR',
        4 =>
        array (
          0 => 'SFR',
          1 => 'SFR',
          4 => 'SFR',
          5 => 'SFR',
          6 => 'SFR',
          7 => 'SFR',
          8 => 'SFR',
          9 => 'SFR',
        ),
        5 =>
        array (
          0 => 'SFR',
          1 => 'SFR',
          2 => 'SFR',
          3 => 'SFR',
          4 => 'SFR',
        ),
        6 =>
        array (
          9 => 'SFR',
        ),
        7 => 'Orange France',
        8 => 'Orange France',
        9 => 'SFR',
      ),
      1 => 'SFR',
      2 => 'SFR',
      3 =>
      array (
        4 => 'SFR',
        5 => 'SFR',
        6 =>
        array (
          0 => 'SFR',
          1 => 'SFR',
          2 => 'SFR',
          3 => 'SFR',
          4 => 'SFR',
        ),
      ),
      4 =>
      array (
        1 =>
        array (
          6 =>
          array (
            6 => 'SFR',
            7 => 'SFR',
            8 => 'SFR',
            9 => 'SFR',
          ),
        ),
        2 => 'Orange France',
        3 => 'Orange France',
        5 => 'Orange France',
        6 => 'SFR',
        7 => 'Orange France',
        8 => 'Orange France',
      ),
      5 =>
      array (
        0 => 'Bouygues',
        3 => 'Bouygues',
        4 => 'Orange France',
        5 => 'SFR',
        8 => 'Bouygues',
        9 => 'Bouygues',
      ),
      6 => 'Bouygues',
      7 => 'Orange France',
      8 => 'Orange France',
      9 =>
      array (
        2 => 'Bouygues',
        3 => 'Bouygues',
        6 => 'Bouygues',
        8 => 'Bouygues',
        9 => 'Bouygues',
      ),
    ),
  ),
  350 =>
  array (
    5 =>
    array (
      4 => 'GibTel',
      6 => 'GibTel',
      7 => 'GibTel',
      8 => 'GibTel',
    ),
    6 =>
    array (
      2 => 'Shine',
    ),
  ),
  351 =>
  array (
    9 =>
    array (
      1 => 'Vodafone',
      2 =>
      array (
        2 => 'TMN',
        4 =>
        array (
          0 => 'TMN',
          1 => 'TMN',
          2 => 'TMN',
          3 => 'TMN',
          4 => 'TMN',
        ),
        5 => 'TMN',
        6 => 'TMN',
        7 => 'TMN',
      ),
      3 => 'Optimus',
      6 => 'TMN',
    ),
  ),
  352 =>
  array (
    6 =>
    array (
      2 =>
      array (
        1 => 'POST',
        8 => 'POST',
      ),
      6 =>
      array (
        1 => 'Orange',
        8 => 'Orange',
      ),
      7 =>
      array (
        1 => 'Join',
      ),
      9 =>
      array (
        1 => 'Tango',
        8 => 'Tango',
      ),
    ),
  ),
  353 =>
  array (
    8 =>
    array (
      3 => '3',
      5 => 'Meteor',
      6 => 'O2',
      7 => 'Vodafone',
      8 => 'eMobile',
      9 => 'Tesco Mobile',
    ),
  ),
  354 =>
  array (
    3 =>
    array (
      8 =>
      array (
        5 => 'Síminn',
        8 => 'IMC',
        9 => 'IMC',
      ),
    ),
    5 =>
    array (
      1 =>
      array (
        9 => 'Nova',
      ),
    ),
    6 =>
    array (
      1 =>
      array (
        1 => 'Tal',
        2 => 'Tal',
        3 => 'Tal',
        4 => 'Tal',
        5 => 'Vodafone',
        6 => 'Vodafone',
        7 => 'Vodafone',
        8 => 'Vodafone',
        9 => 'Vodafone',
      ),
      3 =>
      array (
        0 => 'IMC',
      ),
      4 =>
      array (
        6 => 'IMC',
        7 => 'IMC',
      ),
      5 =>
      array (
        9 => 'Vodafone',
      ),
      6 => 'Vodafone',
      7 => 'Vodafone',
      9 => 'Vodafone',
    ),
    7 =>
    array (
      7 => 'Nova',
      8 => 'Nova',
    ),
    8 =>
    array (
      2 => 'Vodafone',
      3 => 'Síminn',
      4 => 'Síminn',
      5 => 'Síminn',
      6 => 'Síminn',
      9 => 'Síminn',
    ),
  ),
  355 =>
  array (
    6 =>
    array (
      6 => 'Plus Communication',
      7 => 'Eagle Mobile',
      8 => 'AMC',
      9 => 'Vodafone',
    ),
  ),
  356 =>
  array (
    7 =>
    array (
      2 =>
      array (
        1 =>
        array (
          0 => 'GO Mobile',
        ),
      ),
      7 => 'Melita Mobile',
      9 => 'GO Mobile',
    ),
    9 =>
    array (
      2 =>
      array (
        1 =>
        array (
          0 => 'Vodafone',
          1 => 'Vodafone',
        ),
        3 =>
        array (
          1 => 'Vodafone',
        ),
      ),
      6 =>
      array (
        9 =>
        array (
          6 => 'YOM',
        ),
      ),
      8 =>
      array (
        1 =>
        array (
          1 => 'Redtouch Fone',
          2 => 'Redtouch Fone',
          3 => 'Redtouch Fone',
        ),
        8 =>
        array (
          9 => 'GO Mobile',
        ),
        9 =>
        array (
          7 => 'Vodafone',
        ),
      ),
      9 => 'Vodafone',
    ),
  ),
  357 =>
  array (
    1 =>
    array (
      2 =>
      array (
        3 => 'Cytamobile-Vodafone',
      ),
    ),
    9 =>
    array (
      5 => 'PrimeTel',
      6 => 'MTN',
      7 => 'Cytamobile-Vodafone',
      9 => 'Cytamobile-Vodafone',
    ),
  ),
  358 =>
  array (
    4 =>
    array (
      1 => 'DNA',
      2 => 'Sonera',
      3 =>
      array (
        2 =>
        array (
          0 => 'DNA',
          1 => 'DNA',
        ),
        6 => 'TDC',
        8 => 'TDC',
      ),
      4 => 'DNA',
      5 =>
      array (
        0 => 'Sonera',
        1 => 'Elisa',
        2 => 'Elisa',
        3 => 'Elisa',
        4 =>
        array (
          1 => 'Sonera',
          2 => 'Finnet Group / NOKIA OYJ',
          3 => 'Finnet Group / NOKIA OYJ',
          4 => 'Finnet Group / NOKIA OYJ',
          5 => 'Finnet Group / NOKIA OYJ',
        ),
        5 =>
        array (
          9 => 'Sonera',
        ),
        6 => 'Elisa',
        7 =>
        array (
          0 => 'AMT',
          3 => 'AMT',
          4 => 'DNA',
          5 => 'AMT',
          6 => 'DNA',
          7 => 'DNA',
          8 => 'DNA',
          9 => 'DNA',
        ),
        8 => 'Elisa',
      ),
      6 => 'Elisa',
      9 =>
      array (
        4 =>
        array (
          4 => 'DNA',
        ),
      ),
    ),
    5 =>
    array (
      0 => 'Elisa',
    ),
  ),
  359 =>
  array (
    8 =>
    array (
      7 => 'Vivacom',
      8 => 'M-Tel',
      9 => 'GLOBUL',
    ),
    9 =>
    array (
      8 => 'GLOBUL',
    ),
  ),
  36 =>
  array (
    2 =>
    array (
      0 => 'Telenor',
    ),
    3 =>
    array (
      0 => 'T-Mobile',
    ),
    7 =>
    array (
      0 => 'Vodafone',
    ),
  ),
  370 =>
  array (
    6 =>
    array (
      0 => 'Tele 2',
      1 => 'Omnitel',
      2 => 'Omnitel',
      4 =>
      array (
        0 => 'BITĖ',
        1 => 'BITĖ',
        2 => 'BITĖ',
        3 => 'BITĖ',
        4 => 'BITĖ',
        5 => 'Tele 2',
        6 => 'Tele 2',
        7 => 'Tele 2',
        8 => 'Tele 2',
        9 => 'BITĖ',
      ),
      5 => 'BITĖ',
      6 =>
      array (
        0 => 'BITĖ',
        2 => 'Omnitel',
      ),
      7 => 'Tele 2',
      8 =>
      array (
        0 => 'Omnitel',
        1 => 'BITĖ',
        2 => 'Omnitel',
        3 => 'Tele 2',
        4 => 'Tele 2',
        5 => 'BITĖ',
        6 => 'Omnitel',
        7 => 'Omnitel',
        8 => 'Omnitel',
        9 => 'BITĖ',
      ),
      9 =>
      array (
        0 => 'BITĖ',
        2 => 'Omnitel',
        3 => 'Omnitel',
        4 => 'Omnitel',
        5 => 'Omnitel',
        6 => 'Omnitel',
        7 => 'Omnitel',
        8 => 'Omnitel',
        9 => 'BITĖ',
      ),
    ),
  ),
  372 =>
  array (
    5 =>
    array (
      0 => 'EMT',
      1 =>
      array (
        9 => 'EMT',
      ),
      2 => 'EMT',
      3 =>
      array (
        0 => 'EMT',
        3 => 'EMT',
        4 => 'EMT',
        6 => 'EMT',
        7 => 'EMT',
        8 => 'EMT',
        9 => 'EMT',
      ),
      4 =>
      array (
        5 => 'Elisa',
      ),
      5 => 'Tele 2',
      6 => 'Elisa',
      7 =>
      array (
        7 => 'Elisa',
      ),
      8 => 'Tele 2',
      9 =>
      array (
        0 => 'EMT',
      ),
    ),
  ),
  373 =>
  array (
    5 =>
    array (
      6 =>
      array (
        2 => 'IDC',
      ),
    ),
    6 =>
    array (
      0 => 'Orange',
      1 =>
      array (
        0 => 'Orange',
        1 => 'Orange',
      ),
      2 =>
      array (
        1 => 'Orange',
      ),
      5 =>
      array (
        0 => 'Eventis Mobile',
      ),
      7 =>
      array (
        1 => 'Moldtelecom',
        2 => 'Moldtelecom',
        3 => 'Moldtelecom',
        4 => 'Moldtelecom',
        5 => 'Moldtelecom',
        6 => 'Moldtelecom',
        7 =>
        array (
          0 => 'Moldtelecom',
          1 => 'Moldtelecom',
          2 => 'Moldtelecom',
          3 => 'Moldtelecom',
          4 => 'Moldtelecom',
        ),
      ),
      8 => 'Orange',
      9 => 'Orange',
    ),
    7 =>
    array (
      6 =>
      array (
        0 => 'Moldcell',
      ),
      7 =>
      array (
        4 => 'IDC',
        5 => 'IDC',
        7 => 'IDC',
        8 => 'IDC',
        9 => 'IDC',
      ),
    ),
  ),
  374 =>
  array (
    4 =>
    array (
      1 => 'Orange',
      3 => 'Beeline',
      9 => 'VivaCell-MTS',
    ),
    5 =>
    array (
      5 => 'Orange',
    ),
    7 =>
    array (
      7 => 'VivaCell-MTS',
    ),
    9 =>
    array (
      1 => 'Beeline',
      3 => 'VivaCell-MTS',
      4 => 'VivaCell-MTS',
      5 => 'Orange',
      6 => 'Beeline',
      8 => 'VivaCell-MTS',
      9 => 'Beeline',
    ),
  ),
  375 =>
  array (
    2 =>
    array (
      5 => 'life:)',
      9 =>
      array (
        1 => 'Velcom',
        2 => 'MTS',
        3 => 'Velcom',
        4 => 'Belcel',
        5 => 'MTS',
        6 => 'Velcom',
        7 => 'MTS',
        8 => 'MTS',
        9 => 'Velcom',
      ),
    ),
    3 =>
    array (
      3 => 'MTS',
    ),
    4 =>
    array (
      4 => 'Velcom',
    ),
  ),
  376 =>
  array (
    3 => 'Mobiland',
  ),
  380 =>
  array (
    9 =>
    array (
      4 => 'IT',
    ),
  ),
  381 =>
  array (
    6 =>
    array (
      0 => 'VIP',
      1 => 'VIP',
      2 => 'Telenor',
      3 => 'Telenor',
      4 => 'mt:s',
      5 => 'mt:s',
      6 => 'mt:s',
      8 => 'VIP',
      9 => 'Telenor',
    ),
  ),
  385 =>
  array (
    9 =>
    array (
      1 => 'Vip',
      2 => 'Vip',
      5 => 'Tele2',
      8 => 'T-Mobile',
      9 => 'T-Mobile',
    ),
  ),
  386 =>
  array (
    3 =>
    array (
      0 => 'Si.mobil',
      1 => 'Mobitel',
    ),
    4 =>
    array (
      0 => 'Si.mobil',
      1 => 'Mobitel',
      9 => 'Mobitel',
    ),
    5 =>
    array (
      1 => 'Mobitel',
    ),
    6 =>
    array (
      4 => 'T-2',
    ),
    7 =>
    array (
      0 => 'Tušmobil',
      1 => 'Mobitel',
    ),
  ),
  387 =>
  array (
    6 =>
    array (
      0 => 'BH Mobile',
      1 => 'BH Mobile',
      2 => 'BH Mobile',
      3 => 'HT-ERONET',
      5 => 'm:tel',
      6 => 'm:tel',
    ),
  ),
  389 =>
  array (
    7 =>
    array (
      0 => 'T-Mobile',
      1 => 'T-Mobile',
      2 => 'T-Mobile',
      3 =>
      array (
        2 => 'Albafone',
      ),
      4 =>
      array (
        2 =>
        array (
          1 => 'Mobik Telekomunikacii',
        ),
      ),
      5 => 'One',
      6 => 'One',
      7 => 'vip',
      8 => 'vip',
    ),
  ),
  39 =>
  array (
    3 =>
    array (
      2 => 'Wind',
      3 => 'TIM',
      4 => 'Vodafone',
      6 => 'TIM',
      7 =>
      array (
        0 => 'TIM',
        3 => '3 Italia',
        7 => 'Vodafone',
      ),
      8 => 'Wind',
      9 => '3 Italia',
    ),
  ),
  40 =>
  array (
    7 =>
    array (
      2 => 'Vodafone',
      3 => 'Vodafone',
      4 => 'Orange',
      5 => 'Orange',
      6 => 'Cosmote',
      7 => 'Digi.Mobil',
    ),
  ),
  41 =>
  array (
    7 =>
    array (
      6 => 'Sunrise',
      7 => 'Tele4u',
      8 => 'Orange',
      9 => 'Swisscom',
    ),
  ),
  420 =>
  array (
    6 =>
    array (
      0 =>
      array (
        1 => 'O2',
        2 => 'O2',
        3 => 'T-Mobile',
        4 => 'T-Mobile',
        5 => 'T-Mobile',
        6 => 'O2',
        7 => 'O2',
        8 => 'Vodafone',
      ),
    ),
    7 =>
    array (
      2 => 'O2',
      3 => 'T-Mobile',
      7 => 'Vodafone',
    ),
    9 =>
    array (
      3 => 'T-Mobile',
      6 =>
      array (
        2 => 'O2',
        3 => 'T-Mobile',
        4 => 'T-Mobile',
        5 => 'T-Mobile',
        6 => 'O2',
        7 => 'Vodafone',
      ),
    ),
  ),
  421 =>
  array (
    9 =>
    array (
      0 =>
      array (
        3 => 'Telekom',
        4 => 'Telekom',
        5 => 'Orange',
        6 => 'Orange',
        7 => 'Orange',
        8 => 'Orange',
      ),
      1 =>
      array (
        5 => 'Orange',
        6 => 'Orange',
        7 => 'Orange',
        8 => 'Orange',
      ),
      4 =>
      array (
        0 => 'O2',
        4 => 'O2',
        8 => 'O2',
        9 => 'O2',
      ),
    ),
  ),
  43 =>
  array (
    6 =>
    array (
      5 =>
      array (
        0 => 'tele.ring',
      ),
      6 =>
      array (
        0 => 'Hutchison Drei Austria',
        4 => 'A1 TA',
      ),
      7 =>
      array (
        6 => 'T-Mobile AT',
        7 =>
        array (
          0 => 'T-Mobile AT',
          1 => 'T-Mobile AT',
          2 => 'T-Mobile AT',
          8 => 'T-Mobile AT',
          9 => 'T-Mobile AT',
        ),
      ),
      8 =>
      array (
        1 =>
        array (
          8 =>
          array (
            3 => 'Orange AT',
          ),
        ),
        8 => 'Orange AT',
      ),
      9 =>
      array (
        9 => 'Orange AT',
      ),
    ),
  ),
  45 =>
  array (
    2 =>
    array (
      0 =>
      array (
        1 => 'TDC',
        2 => 'TDC',
        3 => 'TDC',
        4 => 'TDC',
        5 => 'TDC',
        6 => 'Telenor',
        7 => 'Telenor',
        8 => 'Telenor',
        9 => 'Telenor',
      ),
      1 => 'TDC',
      2 =>
      array (
        1 => 'Telenor',
        2 => 'Telenor',
        3 => 'Telenor',
        4 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        8 => 'Telenor',
        9 => 'Telenor',
      ),
      3 =>
      array (
        1 => 'TDC',
        2 => 'TDC',
        3 => 'TDC',
        4 => 'TDC',
        5 => 'TDC',
        6 => 'TDC',
        7 => 'TDC',
        8 => 'TDC',
        9 =>
        array (
          0 => 'TDC',
          1 => 'TDC',
          2 => 'TDC',
          3 => 'TDC',
          4 => 'TDC',
          5 => 'Telia',
          6 => 'TDC',
          7 => 'TDC',
          8 => 'TDC',
          9 => 'TDC',
        ),
      ),
      4 => 'TDC',
      5 =>
      array (
        1 => 'Telenor',
        2 => 'Telenor',
        3 => 'Telenor',
        4 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
        9 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
        ),
      ),
      6 => 'Telia',
      7 => 'Telia',
      8 => 'Telia',
      9 => 'TDC',
    ),
    3 =>
    array (
      0 => 'TDC',
      1 =>
      array (
        1 => '3',
        2 => '3',
        3 =>
        array (
          0 => '3',
          1 =>
          array (
            2 => 'Telenor',
          ),
          2 => '3',
          3 => '3',
          4 => '3',
          5 => '3',
          6 => '3',
          7 => '3',
          8 => '3',
          9 => 'Telenor',
        ),
        4 => '3',
        5 => '3',
        6 => '3',
        7 => '3',
        8 => '3',
      ),
      2 =>
      array (
        0 => 'Telenor',
        1 => 'Telenor',
        2 => 'Telenor',
        3 => 'Telenor',
        4 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        8 => 'Telenor',
      ),
      3 =>
      array (
        9 =>
        array (
          6 =>
          array (
            9 =>
            array (
              2 => 'Telenor',
              3 => 'Telenor',
            ),
          ),
        ),
      ),
      6 =>
      array (
        8 =>
        array (
          7 =>
          array (
            4 => 'Telenor',
          ),
        ),
      ),
    ),
    4 =>
    array (
      0 =>
      array (
        1 => 'TDC',
        2 => 'TDC',
        3 => 'TDC',
        4 => 'TDC',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        8 => 'Telenor',
        9 => 'Telenor',
      ),
      1 =>
      array (
        1 => 'Telenor',
        2 => 'Telenor',
        3 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        8 => 'Telenor',
        9 => 'Telenor',
      ),
      2 =>
      array (
        1 =>
        array (
          0 => 'Telia',
          2 => 'Telia',
          3 => 'Telia',
          4 => 'Telia',
          7 => 'TDC',
        ),
        2 =>
        array (
          0 => 'Telia',
          1 => 'Telia',
          2 => 'Telia',
          3 => 'Telia',
          4 => 'Telia',
          5 => 'Telia',
          6 => 'Telia',
        ),
        3 => 'Telia',
        4 => 'Telenor',
        5 => 'Telenor',
        6 =>
        array (
          0 => 'Telenor',
        ),
        7 =>
        array (
          0 => 'Telenor',
          6 => 'Telia',
          7 => 'Telia',
          8 => 'Telia',
          9 => 'Telia',
        ),
        8 => 'Telenor',
        9 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telia',
          7 => 'Telia',
          8 => 'Telia',
          9 => 'Telia',
        ),
      ),
    ),
    5 =>
    array (
      0 =>
      array (
        1 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
        ),
        2 => 'Telenor',
        3 =>
        array (
          0 => 'Telenor',
          2 => 'Telenor',
          5 => 'Telenor',
          7 => 'Telenor',
        ),
        4 =>
        array (
          6 => 'Telenor',
        ),
        5 => 'Telenor',
        6 =>
        array (
          0 => 'TDC',
          1 =>
          array (
            0 =>
            array (
              0 =>
              array (
                0 => 'TDC',
              ),
            ),
          ),
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telenor',
        ),
        7 => 'Telenor',
        8 => 'Telenor',
        9 => 'Telenor',
      ),
      1 =>
      array (
        0 => 'TDC',
        1 => 'TDC',
        2 => 'TDC',
        3 => 'TDC',
        4 => 'TDC',
        5 => 'TDC',
        6 => 'TDC',
        7 => 'TDC',
        8 =>
        array (
          0 => 'TDC',
          1 => 'TDC',
          2 => 'TDC',
          3 => 'TDC',
          4 => 'TDC',
          5 => 'TDC',
          6 => 'TDC',
          7 => 'TDC',
          8 => 'Telia',
          9 => 'Telia',
        ),
        9 => 'TDC',
      ),
      2 =>
      array (
        1 =>
        array (
          0 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telia',
          4 => 'Telia',
          5 => 'Telia',
          6 => 'Telia',
          7 => 'Telia',
          8 => 'Telia',
          9 => 'Telia',
        ),
        2 =>
        array (
          1 => 'Telia',
          2 => 'Telenor',
          3 => 'Telia',
          4 => 'Telia',
          5 => 'Telenor',
          6 => 'Telia',
          7 => 'Telia',
          8 => 'Telia',
          9 => 'Telia',
        ),
        3 =>
        array (
          1 => 'Telia',
          2 => 'Telia',
          3 => 'Telenor',
          4 => 'Telia',
          5 => 'Telia',
          6 => 'Telia',
          7 => 'Telia',
          8 => 'Telia',
          9 => 'Telia',
        ),
        4 =>
        array (
          1 => 'Telia',
          2 => 'Telenor',
          3 => 'Telia',
          4 => 'Telenor',
          5 => 'Telia',
          6 => 'Telia',
          7 => 'Telia',
          8 => 'Telia',
          9 => 'Telia',
        ),
        5 =>
        array (
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telenor',
        ),
        6 => 'Telenor',
        7 => 'Telenor',
        8 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
        ),
        9 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
        ),
      ),
      3 =>
      array (
        1 =>
        array (
          0 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telia',
        ),
        2 =>
        array (
          2 => 'Telia',
          3 => 'Telia',
        ),
        3 =>
        array (
          0 => 'Telia',
          1 => 'Telia',
          3 => 'TDC',
          4 => 'Telia',
          5 => 'Telia',
          6 => 'Telia',
          7 => 'Telia',
          8 => 'Telia',
          9 => 'Telia',
        ),
        4 => 'Telia',
        5 => '3',
        6 => '3',
        7 =>
        array (
          0 => '3',
          1 => '3',
          2 => '3',
          3 => '3',
          4 => '3',
          5 => '3',
        ),
        9 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          9 => 'Telenor',
        ),
      ),
    ),
    6 =>
    array (
      0 =>
      array (
        1 => 'Telia',
        2 => 'Telia',
        3 => 'Telia',
        4 => 'Telia',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        8 => 'Telenor',
        9 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'TDC',
        ),
      ),
      1 =>
      array (
        0 => 'TDC',
        1 => 'TDC',
        2 => 'TDC',
        3 => 'TDC',
        4 =>
        array (
          0 => 'TDC',
          1 => 'TDC',
          2 => 'TDC',
          3 => 'TDC',
          4 => 'TDC',
          5 => 'TDC',
          6 => 'Telia',
          7 => 'TDC',
        ),
        5 => 'TDC',
        6 => 'TDC',
        7 => 'TDC',
      ),
      3 =>
      array (
        1 => 'Telenor',
      ),
    ),
    7 =>
    array (
      0 =>
      array (
        3 =>
        array (
          0 =>
          array (
            4 => 'Telenor',
          ),
          4 =>
          array (
            3 => 'Telenor',
          ),
        ),
      ),
      1 =>
      array (
        1 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
        ),
        3 => 'Lycamobile Denmark Ltd',
        8 => 'Lycamobile Denmark Ltd',
      ),
      2 =>
      array (
        1 => 'Telenor',
        2 => 'Telenor',
        3 => 'Telenor',
        4 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
      ),
      8 =>
      array (
        1 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
        ),
      ),
    ),
    8 =>
    array (
      0 =>
      array (
        1 =>
        array (
          0 =>
          array (
            3 => 'Telenor',
            4 => 'Telenor',
          ),
        ),
      ),
    ),
    9 =>
    array (
      1 =>
      array (
        4 => 'Lycamobile Denmark Ltd',
        6 => 'Lycamobile Denmark Ltd',
        7 => 'Lycamobile Denmark Ltd',
      ),
      6 =>
      array (
        9 =>
        array (
          4 =>
          array (
            4 =>
            array (
              8 =>
              array (
                5 => 'Telenor',
                6 => 'Telenor',
                7 => 'Telenor',
                8 => 'Telenor',
                9 => 'Telenor',
              ),
              9 => 'Telenor',
            ),
            5 =>
            array (
              0 => 'Telenor',
              1 => 'Telenor',
              2 => 'Telenor',
              3 => 'Telenor',
              4 => 'Telenor',
              5 => 'Telenor',
              6 => 'Telenor',
            ),
          ),
        ),
      ),
      9 =>
      array (
        5 =>
        array (
          1 => 'Telenor',
          5 => 'Telenor',
        ),
      ),
    ),
  ),
  47 =>
  array (
    4 =>
    array (
      0 =>
      array (
        0 =>
        array (
          0 => 'NetCom',
          1 => 'NetCom',
        ),
        1 =>
        array (
          0 => 'NetCom',
          1 => 'NetCom',
        ),
        2 =>
        array (
          2 => 'Telenor',
          8 => 'Telenor',
          9 => 'NetCom',
        ),
        3 =>
        array (
          1 => 'NetCom',
          2 => 'NetCom',
        ),
        4 =>
        array (
          5 => 'NetCom',
          6 => 'NetCom',
          7 => 'NetCom',
          8 => 'NetCom',
          9 => 'NetCom',
        ),
        5 =>
        array (
          5 => 'NetCom',
        ),
        6 =>
        array (
          0 => 'NetCom',
          1 => 'NetCom',
          2 => 'NetCom',
          3 => 'NetCom',
          4 => 'NetCom',
        ),
        7 =>
        array (
          7 => 'NetCom',
        ),
        8 =>
        array (
          7 => 'Telenor',
        ),
      ),
      1 =>
      array (
        0 =>
        array (
          4 => 'NetCom',
          6 => 'NetCom',
        ),
        1 =>
        array (
          0 => 'NetCom',
          4 => 'NetCom',
        ),
        2 => 'Tele2',
        3 => 'Tele2',
        4 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        8 =>
        array (
          4 => 'Telenor',
          5 => 'Telenor',
        ),
        9 =>
        array (
          0 => 'NetCom',
        ),
      ),
      5 =>
      array (
        2 => 'NetCom',
        3 =>
        array (
          9 => 'NetCom',
        ),
        4 => 'NetCom',
        5 =>
        array (
          0 => 'NetCom',
          1 => 'NetCom',
          9 => 'NetCom',
        ),
        6 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          3 => 'NetCom',
          6 => 'Telenor',
        ),
        8 =>
        array (
          0 => 'Telenor',
          6 => 'NetCom',
        ),
      ),
      6 =>
      array (
        2 =>
        array (
          1 => 'Telenor',
          3 => 'NetCom',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
        ),
        3 =>
        array (
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telenor',
        ),
        4 => 'NetCom',
        5 =>
        array (
          0 => 'NetCom',
          4 => 'NetCom',
        ),
        6 =>
        array (
          0 => 'NetCom',
          1 => 'NetCom',
          2 => 'NetCom',
          3 => 'NetCom',
          6 => 'Telenor',
        ),
        7 =>
        array (
          0 => 'NetCom',
          3 => 'NetCom',
          4 => 'NetCom',
          5 => 'NetCom',
        ),
        8 => 'Telenor',
        9 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
        ),
      ),
      7 =>
      array (
        0 =>
        array (
          5 => 'NetCom',
        ),
        2 =>
        array (
          3 => 'Tele2',
          4 => 'Tele2',
          5 => 'Tele2',
          6 => 'Tele2',
          7 => 'Tele2',
          8 => 'Tele2',
          9 => 'Tele2',
        ),
        3 => 'Tele2',
        4 =>
        array (
          0 => 'Telenor',
          4 => 'NetCom',
          6 => 'Telenor',
        ),
        6 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
        ),
        7 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
        ),
        8 => 'Telenor',
        9 =>
        array (
          0 => 'Telenor',
          1 => 'Network Norway',
          2 => 'Network Norway',
          3 => 'Network Norway',
        ),
      ),
      8 =>
      array (
        0 => 'Telenor',
        1 => 'Telenor',
        2 => 'Telenor',
        3 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
        ),
      ),
    ),
    5 =>
    array (
      9 =>
      array (
        1 => 'Telenor',
      ),
    ),
    9 =>
    array (
      0 => 'Telenor',
      1 =>
      array (
        2 =>
        array (
          4 => 'Telenor',
        ),
        3 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        8 => 'Telenor',
        9 =>
        array (
          1 => 'Telenor',
          9 => 'Telenor',
        ),
      ),
      2 =>
      array (
        0 => 'NetCom',
        1 =>
        array (
          0 => 'NetCom',
          7 => 'NetCom',
        ),
        2 => 'NetCom',
        3 =>
        array (
          7 => 'NetCom',
        ),
        4 => 'NetCom',
        5 =>
        array (
          7 => 'NetCom',
        ),
        6 => 'NetCom',
        7 =>
        array (
          7 => 'NetCom',
        ),
        8 => 'NetCom',
        9 =>
        array (
          7 => 'NetCom',
        ),
      ),
      3 =>
      array (
        0 => 'NetCom',
        1 =>
        array (
          7 => 'NetCom',
        ),
        2 => 'NetCom',
        3 =>
        array (
          7 => 'NetCom',
        ),
        4 => 'NetCom',
        5 =>
        array (
          7 => 'NetCom',
        ),
        6 => 'NetCom',
        7 =>
        array (
          7 => 'NetCom',
        ),
        8 => 'NetCom',
        9 =>
        array (
          1 => 'NetCom',
        ),
      ),
      4 =>
      array (
        0 =>
        array (
          3 => 'Telenor',
          5 => 'Telenor',
        ),
        1 =>
        array (
          3 => 'Telenor',
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telenor',
        ),
        2 =>
        array (
          3 => 'NetCom',
          5 => 'Telenor',
        ),
        7 =>
        array (
          4 => 'Telenor',
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telenor',
        ),
        8 => 'Telenor',
        9 =>
        array (
          7 => 'Telenor',
          8 => 'Telenor',
        ),
      ),
      5 =>
      array (
        0 => 'Telenor',
        1 => 'Telenor',
        2 => 'Telenor',
        3 =>
        array (
          6 => 'Telenor',
        ),
        4 => 'Telenor',
        5 =>
        array (
          2 => 'Telenor',
          5 => 'Telenor',
        ),
        7 => 'Telenor',
        8 => 'Telenor',
        9 => 'Telenor',
      ),
      6 =>
      array (
        0 =>
        array (
          1 => 'Telenor',
          4 => 'Telenor',
          9 => 'Telenor',
        ),
        2 =>
        array (
          0 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
        ),
        5 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
        ),
        8 =>
        array (
          3 => 'NetCom',
        ),
      ),
      7 =>
      array (
        0 => 'Telenor',
        1 => 'Telenor',
        4 =>
        array (
          0 => 'Telenor',
          1 => 'Telenor',
          2 => 'Telenor',
          3 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telenor',
        ),
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
        9 =>
        array (
          5 => 'Telenor',
          6 => 'Telenor',
          7 => 'Telenor',
          8 => 'Telenor',
          9 => 'Telenor',
        ),
      ),
      8 =>
      array (
        0 => 'NetCom',
        1 =>
        array (
          5 => 'NetCom',
        ),
        2 => 'NetCom',
        3 =>
        array (
          7 => 'NetCom',
        ),
        4 => 'NetCom',
        5 =>
        array (
          4 => 'NetCom',
        ),
        6 => 'NetCom',
        7 =>
        array (
          6 => 'NetCom',
        ),
        8 => 'NetCom',
        9 =>
        array (
          9 => 'NetCom',
        ),
      ),
      9 =>
      array (
        0 => 'Telenor',
        1 =>
        array (
          5 => 'Telenor',
          6 => 'Telenor',
        ),
        2 => 'Telenor',
        3 => 'Telenor',
        4 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
      ),
    ),
  ),
  48 =>
  array (
    5 =>
    array (
      0 => 'Orange',
      1 => 'Orange',
      3 =>
      array (
        0 => 'Play',
        1 => 'Play',
        2 => 'T-Mobile',
        3 => 'Play',
        5 => 'Play',
      ),
      7 => 'Play',
    ),
    6 =>
    array (
      0 =>
      array (
        0 => 'T-Mobile',
        1 => 'Plus',
        2 => 'T-Mobile',
        3 => 'Plus',
        4 => 'T-Mobile',
        5 => 'Plus',
        6 => 'T-Mobile',
        7 => 'Plus',
        8 => 'T-Mobile',
        9 => 'Plus',
      ),
      6 =>
      array (
        0 => 'T-Mobile',
        1 => 'Plus',
        2 => 'T-Mobile',
        3 => 'Plus',
        4 => 'T-Mobile',
        5 => 'Plus',
        6 =>
        array (
          6 => 'Play',
        ),
        7 => 'Plus',
        8 => 'T-Mobile',
        9 => 'Plus',
      ),
      9 =>
      array (
        0 =>
        array (
          1 => 'Orange',
          2 => 'Orange',
          3 => 'Orange',
          4 => 'Orange',
          5 => 'Orange',
          6 => 'Orange',
          7 => 'CenterNet',
        ),
        1 => 'Plus',
        2 => 'T-Mobile',
        3 => 'Plus',
        4 => 'T-Mobile',
        5 => 'Plus',
        6 => 'T-Mobile',
        7 => 'Plus',
        8 => 'T-Mobile',
        9 =>
        array (
          0 =>
          array (
            2 => 'Cyfrowy Polsat',
            3 => 'Cyfrowy Polsat',
            4 => 'Cyfrowy Polsat',
            5 => 'Cyfrowy Polsat',
            6 => 'Cyfrowy Polsat',
            7 => 'Cyfrowy Polsat',
            8 => 'Cyfrowy Polsat',
            9 => 'Cyfrowy Polsat',
          ),
          2 =>
          array (
            0 => 'Cyfrowy Polsat',
            1 => 'Cyfrowy Polsat',
            3 => 'Cyfrowy Polsat',
            4 => 'Cyfrowy Polsat',
            5 => 'Cyfrowy Polsat',
            6 => 'Cyfrowy Polsat',
            7 => 'Cyfrowy Polsat',
            8 => 'Cyfrowy Polsat',
            9 => 'Cyfrowy Polsat',
          ),
          6 =>
          array (
            1 => 'Cyfrowy Polsat',
            2 => 'Cyfrowy Polsat',
            3 => 'Cyfrowy Polsat',
            4 => 'Cyfrowy Polsat',
            5 => 'Cyfrowy Polsat',
            6 => 'Cyfrowy Polsat',
            7 => 'Plus',
            8 => 'Cyfrowy Polsat',
            9 => 'Plus',
          ),
          8 => 'Plus',
          9 => 'Plus',
        ),
      ),
    ),
    7 =>
    array (
      2 =>
      array (
        0 =>
        array (
          0 => 'CenterNet',
          1 => 'CenterNet',
          2 => 'CenterNet',
          3 => 'CenterNet',
          4 => 'CenterNet',
          5 => 'CenterNet',
          6 => 'CenterNet',
          7 => 'CenterNet',
          9 => 'CenterNet',
        ),
        1 => 'Plus',
        2 => 'Plus',
        3 => 'Plus',
        4 => 'Plus',
        5 => 'Plus',
        6 => 'Plus',
        7 =>
        array (
          0 => 'Plus',
          2 => 'T-Mobile',
          3 => 'T-Mobile',
          4 => 'Plus',
          5 => 'Plus',
          6 => 'Plus',
          7 => 'Plus',
          8 => 'Plus',
          9 => 'Plus',
        ),
        8 =>
        array (
          0 => 'Mobyland',
          1 => 'T-Mobile',
          2 => 'T-Mobile',
          3 => 'T-Mobile',
          4 => 'T-Mobile',
          5 => 'T-Mobile',
          6 => 'T-Mobile',
          7 => 'T-Mobile',
          8 => 'T-Mobile',
        ),
      ),
    ),
  ),
  49 =>
  array (
    1 =>
    array (
      5 =>
      array (
        1 => 'T-Mobile',
        2 =>
        array (
          0 => 'Vodafone',
          1 => 'Vodafone/Lycamobile',
          2 => 'Vodafone',
          3 => 'Vodafone',
          5 => 'Vodafone',
          9 => 'Vodafone/Truphone',
        ),
        7 =>
        array (
          0 => 'Eplus/Telogic',
          3 => 'Eplus',
          5 => 'Eplus',
          7 => 'Eplus',
          8 => 'Eplus',
          9 => 'Eplus/Sipgate',
        ),
        9 =>
        array (
          0 => 'O2',
        ),
      ),
      6 =>
      array (
        0 => 'T-Mobile',
        2 => 'Vodafone',
        3 => 'Eplus',
      ),
      7 =>
      array (
        0 => 'T-Mobile',
        1 => 'T-Mobile',
        2 => 'Vodafone',
        3 => 'Vodafone',
        4 => 'Vodafone',
        5 => 'T-Mobile',
        6 => 'O2',
        7 => 'Eplus',
        8 => 'Eplus',
        9 => 'O2',
      ),
    ),
  ),
  501 =>
  array (
    2 =>
    array (
      0 => 'DigiCell',
      1 => 'DigiCell',
    ),
  ),
  505 =>
  array (
    5 =>
    array (
      5 => 'Claro',
      7 => 'Claro',
      8 => 'Claro',
    ),
    7 =>
    array (
      5 => 'Movistar',
      6 => 'Movistar',
      7 => 'Movistar',
      8 => 'Movistar',
    ),
    8 =>
    array (
      1 => 'Movistar',
      2 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Movistar',
        5 => 'Movistar',
        6 => 'Movistar',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Movistar',
      ),
      3 =>
      array (
        2 => 'Movistar',
        3 => 'Claro',
        5 => 'Claro',
        6 => 'Claro',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Movistar',
      ),
      4 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Movistar',
        6 => 'Movistar',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Claro',
      ),
      5 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Movistar',
        6 => 'Movistar',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Movistar',
      ),
      6 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Claro',
        6 => 'Claro',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Claro',
      ),
      7 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Movistar',
        6 => 'Movistar',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Movistar',
      ),
      8 =>
      array (
        0 => 'Movistar',
        1 => 'Movistar',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Claro',
        6 => 'Movistar',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Movistar',
      ),
      9 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Movistar',
        6 => 'Movistar',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Movistar',
      ),
    ),
  ),
  506 =>
  array (
    5 =>
    array (
      0 =>
      array (
        0 => 'OMV',
        1 => 'OMV',
      ),
      7 =>
      array (
        0 => 'OMV',
        1 => 'OMV',
        2 => 'OMV',
        3 => 'OMV',
      ),
    ),
    7 =>
    array (
      0 =>
      array (
        0 =>
        array (
          1 =>
          array (
            0 => 'Claro',
            1 => 'Claro',
            2 => 'Claro',
            3 => 'Claro',
            4 => 'Claro',
          ),
          2 => 'Claro',
          3 => 'Claro',
          4 => 'Claro',
          5 => 'Claro',
          6 => 'Claro',
          7 => 'Claro',
          8 => 'Claro',
          9 => 'Claro',
        ),
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Claro',
        6 => 'Claro',
        7 => 'Claro',
        8 => 'Claro',
        9 => 'Claro',
      ),
      1 => 'Claro',
      2 => 'Claro',
      3 =>
      array (
        0 =>
        array (
          0 => 'Claro',
          1 => 'Claro',
        ),
      ),
    ),
    8 =>
    array (
      3 => 'Kolbi ICE',
      8 => 'Kolbi ICE',
      9 => 'Kolbi ICE',
    ),
  ),
  507 =>
  array (
    1 =>
    array (
      1 =>
      array (
        1 => 'Digicel',
      ),
      6 =>
      array (
        1 => 'Cable & Wireless',
      ),
    ),
    2 =>
    array (
      1 =>
      array (
        8 => 'Telefónica Móviles',
        9 => 'Telefónica Móviles',
      ),
    ),
    6 =>
    array (
      0 => 'Digicel',
      1 =>
      array (
        0 => 'Digicel',
        1 => 'Digicel',
        2 => 'Digicel',
        3 => 'Digicel',
        4 => 'Digicel',
        5 => 'Digicel',
      ),
      2 => 'Claro',
      3 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        4 => 'Cable & Wireless',
        5 => 'Telefónica Móviles',
        6 => 'Telefónica Móviles',
        7 => 'Cable & Wireless',
        8 => 'Telefónica Móviles',
        9 => 'Telefónica Móviles',
      ),
      4 => 'Telefónica Móviles',
      5 =>
      array (
        0 => 'Cable & Wireless',
        1 => 'Cable & Wireless',
        2 => 'Cable & Wireless',
        3 => 'Cable & Wireless',
        4 => 'Cable & Wireless',
        5 => 'Cable & Wireless',
        6 => 'Telefónica Móviles',
        7 => 'Telefónica Móviles',
        8 => 'Telefónica Móviles',
        9 => 'Telefónica Móviles',
      ),
      6 =>
      array (
        0 => 'Telefónica Móviles',
        1 => 'Telefónica Móviles',
        2 => 'Telefónica Móviles',
        3 => 'Telefónica Móviles',
        4 => 'Telefónica Móviles',
        5 => 'Cable & Wireless',
        6 => 'Cable & Wireless',
        7 => 'Cable & Wireless',
        8 => 'Cable & Wireless',
        9 => 'Cable & Wireless',
      ),
      7 => 'Cable & Wireless',
      8 =>
      array (
        0 => 'Cable & Wireless',
        1 => 'Telefónica Móviles',
        2 => 'Telefónica Móviles',
        3 => 'Telefónica Móviles',
        4 => 'Cable & Wireless',
        5 => 'Telefónica Móviles',
        6 => 'Telefónica Móviles',
        7 => 'Cable & Wireless',
        8 => 'Cable & Wireless',
        9 => 'Telefónica Móviles',
      ),
      9 =>
      array (
        0 => 'Cable & Wireless',
        1 => 'Cable & Wireless',
        2 => 'Telefónica Móviles',
        3 => 'Telefónica Móviles',
        4 => 'Cable & Wireless',
        5 => 'Cable & Wireless',
        6 => 'Cable & Wireless',
        7 => 'Telefónica Móviles',
        8 => 'Cable & Wireless',
        9 => 'Cable & Wireless',
      ),
    ),
    8 =>
    array (
      1 =>
      array (
        0 => 'Mobilphone',
        1 => 'Mobilphone',
      ),
      7 =>
      array (
        2 => 'Cable & Wireless',
        3 => 'Cable & Wireless',
      ),
    ),
  ),
  51 =>
  array (
    1 =>
    array (
      9 =>
      array (
        7 =>
        array (
          3 => 'Claro',
          5 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 =>
            array (
              0 => 'Movistar',
            ),
          ),
        ),
        8 =>
        array (
          0 =>
          array (
            0 =>
            array (
              3 => 'Movistar',
              4 => 'Movistar',
              5 => 'Movistar',
              6 => 'Movistar',
              7 => 'Movistar',
              8 => 'Movistar',
              9 => 'Movistar',
            ),
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 =>
            array (
              0 => 'Claro',
            ),
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Claro',
          ),
          5 => 'Movistar',
          6 => 'Claro',
          7 => 'Claro',
          8 => 'Movistar',
          9 => 'Claro',
        ),
        9 =>
        array (
          0 => 'Movistar',
          1 => 'Claro',
          2 => 'Claro',
          3 => 'Claro',
          4 =>
          array (
            3 => 'Claro',
            4 => 'Movistar',
            5 => 'Movistar',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Claro',
          ),
          5 =>
          array (
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Movistar',
            6 => 'Movistar',
            7 => 'Movistar',
            8 => 'Movistar',
            9 => 'Movistar',
          ),
          6 => 'Movistar',
          7 => 'Claro',
          8 =>
          array (
            0 => 'Movistar',
            4 => 'Movistar',
            6 => 'Movistar',
            7 => 'Movistar',
            8 => 'Movistar',
            9 => 'Movistar',
          ),
        ),
      ),
    ),
    4 =>
    array (
      1 =>
      array (
        9 =>
        array (
          4 =>
          array (
            1 =>
            array (
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
              ),
              8 =>
              array (
                8 => 'Movistar',
                9 => 'Movistar',
              ),
              9 => 'Movistar',
            ),
          ),
        ),
      ),
      2 =>
      array (
        9 =>
        array (
          4 =>
          array (
            2 =>
            array (
              0 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
              ),
              4 => 'Movistar',
              6 => 'Movistar',
              7 => 'Claro',
              9 => 'Movistar',
            ),
          ),
        ),
      ),
      3 =>
      array (
        9 =>
        array (
          4 =>
          array (
            3 =>
            array (
              0 => 'Movistar',
              1 => 'Movistar',
              2 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
              ),
              3 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
              ),
              4 => 'Movistar',
              5 => 'Claro',
              6 => 'Movistar',
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
              8 => 'Movistar',
            ),
          ),
        ),
      ),
      4 =>
      array (
        9 =>
        array (
          4 =>
          array (
            8 =>
            array (
              0 =>
              array (
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
              1 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
              ),
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Movistar',
              5 => 'Movistar',
              6 => 'Movistar',
              8 => 'Movistar',
              9 => 'Movistar',
            ),
            9 =>
            array (
              0 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
              1 => 'Claro',
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Movistar',
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
              ),
              6 => 'Movistar',
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
              8 => 'Movistar',
              9 =>
              array (
                1 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
    ),
    5 =>
    array (
      1 =>
      array (
        9 =>
        array (
          5 =>
          array (
            0 =>
            array (
              8 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
              ),
              9 => 'Movistar',
            ),
            1 =>
            array (
              0 => 'Movistar',
              1 => 'Claro',
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Movistar',
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
              ),
              6 => 'Movistar',
              7 => 'Claro',
              8 => 'Movistar',
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      2 =>
      array (
        9 =>
        array (
          5 =>
          array (
            2 =>
            array (
              3 => 'Claro',
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
              ),
              6 => 'Movistar',
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
              ),
              8 => 'Movistar',
              9 =>
              array (
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      3 =>
      array (
        9 =>
        array (
          5 =>
          array (
            3 =>
            array (
              5 =>
              array (
                0 => 'Claro',
                2 => 'Movistar',
              ),
              6 =>
              array (
                1 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
              ),
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
              ),
              9 => 'Movistar',
            ),
          ),
        ),
      ),
      4 =>
      array (
        9 =>
        array (
          5 =>
          array (
            8 =>
            array (
              0 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
              1 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
              ),
              2 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
              3 => 'Claro',
              4 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
              ),
              5 => 'Movistar',
              6 => 'Movistar',
              7 => 'Claro',
              8 => 'Movistar',
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Claro',
                6 => 'Claro',
                8 => 'Claro',
              ),
            ),
            9 =>
            array (
              0 => 'Movistar',
              1 => 'Claro',
              2 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
              3 => 'Claro',
              4 => 'Movistar',
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
              ),
              6 => 'Movistar',
              7 => 'Claro',
              8 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
              9 =>
              array (
                1 => 'Movistar',
                2 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      6 =>
      array (
        9 =>
        array (
          5 =>
          array (
            6 =>
            array (
              0 => 'Movistar',
              1 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
              ),
              2 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
              ),
              3 => 'Claro',
              4 => 'Movistar',
              5 => 'Movistar',
              6 => 'Movistar',
              7 => 'Claro',
              8 => 'Movistar',
              9 => 'Movistar',
            ),
          ),
        ),
      ),
    ),
    6 =>
    array (
      1 =>
      array (
        9 =>
        array (
          6 =>
          array (
            1 =>
            array (
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
              ),
              6 => 'Movistar',
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
              ),
              9 => 'Movistar',
            ),
            2 =>
            array (
              7 => 'Claro',
            ),
          ),
        ),
      ),
      2 =>
      array (
        9 =>
        array (
          6 =>
          array (
            2 =>
            array (
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
              ),
              6 => 'Movistar',
              9 => 'Movistar',
            ),
          ),
        ),
      ),
      3 =>
      array (
        9 =>
        array (
          6 =>
          array (
            3 =>
            array (
              6 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                9 => 'Movistar',
              ),
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
              ),
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      4 =>
      array (
        9 =>
        array (
          5 =>
          array (
            4 =>
            array (
              1 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
              ),
              4 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
              ),
            ),
          ),
          6 =>
          array (
            4 =>
            array (
              0 => 'Movistar',
              1 => 'Claro',
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Movistar',
              5 => 'Movistar',
              6 => 'Movistar',
              7 => 'Movistar',
              8 => 'Movistar',
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      5 =>
      array (
        9 =>
        array (
          6 =>
          array (
            5 =>
            array (
              3 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
              ),
              6 => 'Movistar',
              7 => 'Claro',
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      6 =>
      array (
        9 =>
        array (
          6 =>
          array (
            6 =>
            array (
              0 =>
              array (
                0 => 'Movistar',
              ),
              6 => 'Movistar',
              7 => 'Claro',
              8 => 'Movistar',
              9 => 'Movistar',
            ),
          ),
        ),
      ),
      7 =>
      array (
        9 =>
        array (
          6 =>
          array (
            7 =>
            array (
              4 => 'Claro',
              6 =>
              array (
                5 => 'Movistar',
                6 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
              ),
              9 =>
              array (
                8 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
    ),
    7 =>
    array (
      2 =>
      array (
        9 =>
        array (
          7 =>
          array (
            2 =>
            array (
              6 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
              ),
              8 => 'Movistar',
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      3 =>
      array (
        9 =>
        array (
          6 =>
          array (
            8 =>
            array (
              4 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
              ),
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
              8 => 'Movistar',
              9 => 'Movistar',
            ),
            9 =>
            array (
              0 => 'Movistar',
              1 => 'Movistar',
              2 => 'Movistar',
              4 => 'Movistar',
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
              ),
              6 => 'Movistar',
              8 => 'Movistar',
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      4 =>
      array (
        9 =>
        array (
          7 =>
          array (
            8 =>
            array (
              4 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
              ),
              7 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
                3 => 'Claro',
                4 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
              ),
              8 => 'Movistar',
              9 => 'Movistar',
            ),
            9 =>
            array (
              0 => 'Movistar',
              1 => 'Movistar',
              2 => 'Movistar',
              3 => 'Claro',
              5 =>
              array (
                6 => 'Movistar',
                7 => 'Movistar',
              ),
              6 => 'Movistar',
              7 => 'Claro',
              8 => 'Movistar',
              9 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      6 =>
      array (
        9 =>
        array (
          7 =>
          array (
            6 =>
            array (
              0 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
              ),
              2 =>
              array (
                1 => 'Claro',
                2 => 'Claro',
              ),
              3 => 'Claro',
              4 => 'Movistar',
              5 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
              ),
              6 => 'Movistar',
              7 => 'Movistar',
              8 => 'Movistar',
              9 =>
              array (
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
                7 => 'Movistar',
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
    ),
    8 =>
    array (
      2 =>
      array (
        9 =>
        array (
          8 =>
          array (
            2 =>
            array (
              3 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                2 => 'Claro',
              ),
              6 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                8 => 'Movistar',
              ),
              7 => 'Claro',
              9 =>
              array (
                8 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      3 =>
      array (
        9 =>
        array (
          8 =>
          array (
            3 =>
            array (
              6 => 'Movistar',
              7 => 'Claro',
              9 =>
              array (
                8 => 'Movistar',
                9 => 'Movistar',
              ),
            ),
          ),
        ),
      ),
      4 =>
      array (
        9 =>
        array (
          7 =>
          array (
            4 =>
            array (
              2 => 'Claro',
              3 =>
              array (
                0 => 'Claro',
                1 => 'Claro',
                5 => 'Claro',
                6 => 'Claro',
                7 => 'Claro',
                8 => 'Claro',
                9 => 'Claro',
              ),
              7 => 'Claro',
            ),
          ),
          8 =>
          array (
            4 =>
            array (
              0 =>
              array (
                0 => 'Movistar',
                1 => 'Movistar',
                2 => 'Movistar',
                3 => 'Movistar',
                4 => 'Movistar',
                5 => 'Movistar',
                6 => 'Movistar',
              ),
              1 => 'Claro',
              2 => 'Claro',
              3 => 'Claro',
              4 => 'Claro',
              5 => 'Movistar',
              6 => 'Movistar',
              7 => 'Claro',
              8 => 'Movistar',
              9 => 'Movistar',
            ),
          ),
        ),
      ),
    ),
  ),
  53 =>
  array (
    5 => 'CUBACEL',
  ),
  54 =>
  array (
    9 =>
    array (
      1 =>
      array (
        1 =>
        array (
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
        ),
      ),
      2 =>
      array (
        2 =>
        array (
          0 => 'Personal',
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
          7 => 'Personal',
          8 => 'Personal',
          9 => 'Personal',
        ),
        3 =>
        array (
          0 => 'Personal',
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
          9 => 'Personal',
        ),
        4 =>
        array (
          7 => 'Personal',
          9 => 'Personal',
        ),
        6 =>
        array (
          0 => 'Personal',
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
        ),
        8 =>
        array (
          0 => 'Personal',
        ),
        9 =>
        array (
          0 => 'Personal',
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
          7 => 'Personal',
          8 => 'Personal',
          9 => 'Personal',
        ),
      ),
      3 =>
      array (
        3 =>
        array (
          2 => 'Personal',
          6 => 'Personal',
          8 => 'Personal',
        ),
        4 =>
        array (
          0 => 'Personal',
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
          7 => 'Personal',
          8 => 'Personal',
          9 => 'Personal',
        ),
        5 =>
        array (
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          6 => 'Personal',
          7 => 'Personal',
          8 => 'Personal',
        ),
        6 =>
        array (
          2 => 'Personal',
          4 => 'Personal',
        ),
        7 =>
        array (
          0 => 'Personal',
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
          7 => 'Personal',
          8 => 'Personal',
          9 => 'Personal',
        ),
        8 =>
        array (
          0 => 'Personal',
          1 => 'Personal',
          2 => 'Personal',
          3 => 'Personal',
          4 => 'Personal',
          5 => 'Personal',
          6 => 'Personal',
          7 => 'Personal',
          8 => 'Personal',
          9 => 'Personal',
        ),
      ),
    ),
  ),
  55 =>
  array (
    1 =>
    array (
      1 =>
      array (
        9 =>
        array (
          5 =>
          array (
            4 =>
            array (
              7 =>
              array (
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
              ),
            ),
            7 =>
            array (
              6 =>
              array (
                9 => 'Vivo',
              ),
              7 => 'Vivo',
              8 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
              ),
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              5 =>
              array (
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                0 => 'Vivo',
              ),
            ),
            1 =>
            array (
              6 =>
              array (
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              7 => 'Claro BR',
              8 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              9 => 'Vivo',
            ),
            3 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            6 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 =>
              array (
                0 => 'Claro BR',
              ),
            ),
            8 =>
            array (
              4 => 'Vivo',
              5 => 'Vivo',
              6 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
              ),
            ),
            9 =>
            array (
              0 => 'Vivo',
              1 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              2 => 'Claro BR',
              3 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
              ),
            ),
          ),
          7 =>
          array (
            0 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 => 'TIM',
              3 =>
              array (
                0 => 'TIM',
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
              ),
              4 =>
              array (
                9 => 'TIM',
              ),
              5 =>
              array (
                0 => 'TIM',
                1 => 'TIM',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              9 => 'Vivo',
            ),
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 => 'Claro BR',
            9 =>
            array (
              6 =>
              array (
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              7 =>
              array (
                0 => 'Claro BR',
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              8 => 'Oi',
              9 =>
              array (
                0 => 'Oi',
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
              ),
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              2 =>
              array (
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            1 => 'TIM',
            2 => 'TIM',
            3 => 'TIM',
            4 => 'TIM',
            5 => 'TIM',
            6 => 'TIM',
            7 => 'TIM',
            8 => 'Claro BR',
            9 => 'Claro BR',
          ),
          9 =>
          array (
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Vivo',
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 => 'Vivo',
          ),
        ),
      ),
      2 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              6 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              7 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              8 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
              ),
            ),
            8 =>
            array (
              0 =>
              array (
                8 => 'Oi',
                9 => 'Oi',
              ),
              1 => 'Oi',
              2 =>
              array (
                0 => 'Oi',
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
              ),
            ),
          ),
          9 =>
          array (
            1 => 'Claro BR',
            2 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
              ),
            ),
            7 => 'Vivo',
          ),
        ),
      ),
      3 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              6 =>
              array (
                1 => 'TIM',
              ),
            ),
            8 =>
            array (
              0 =>
              array (
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              1 => 'Oi',
              2 =>
              array (
                0 => 'Oi',
              ),
            ),
          ),
          9 =>
          array (
            1 => 'Claro BR',
            2 =>
            array (
              0 => 'Claro BR',
              1 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
              ),
            ),
            7 => 'Vivo',
          ),
        ),
      ),
      4 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              6 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
              ),
            ),
            8 =>
            array (
              0 =>
              array (
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              1 =>
              array (
                0 => 'Oi',
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
                4 => 'Oi',
              ),
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              0 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              1 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              2 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              3 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
              ),
              4 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              5 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
              ),
              6 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              7 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              8 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              9 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
              ),
            ),
            6 => 'Vivo',
            7 => 'Vivo',
            8 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
              ),
            ),
          ),
        ),
      ),
      5 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
              ),
            ),
            8 =>
            array (
              0 =>
              array (
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              1 =>
              array (
                0 => 'Oi',
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
              ),
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              0 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              1 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              2 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              3 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              4 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              5 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              6 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              7 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              8 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
              ),
            ),
            2 =>
            array (
              0 =>
              array (
                1 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
              ),
            ),
            7 => 'Vivo',
          ),
        ),
      ),
      6 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              6 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              7 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              8 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
              ),
            ),
            8 =>
            array (
              0 =>
              array (
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              1 => 'Oi',
              2 =>
              array (
                0 => 'Oi',
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
              ),
            ),
          ),
          9 =>
          array (
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
            ),
            7 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              1 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              2 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              3 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              4 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              5 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              7 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
              ),
              8 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
              ),
              9 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                6 => 'Vivo',
              ),
            ),
            9 =>
            array (
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
              ),
              7 =>
              array (
                5 => 'Vivo',
              ),
              9 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
              ),
            ),
          ),
        ),
      ),
      7 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
              ),
            ),
            8 =>
            array (
              0 =>
              array (
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              1 =>
              array (
                0 => 'Oi',
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
              ),
            ),
          ),
          9 =>
          array (
            1 => 'Claro BR',
            2 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              1 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              2 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              3 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              4 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
              ),
            ),
            7 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              1 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              2 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              3 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              4 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              5 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              7 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              8 =>
              array (
                0 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
              ),
              9 =>
              array (
                1 => 'Vivo',
              ),
            ),
          ),
        ),
      ),
      8 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
              ),
            ),
            8 =>
            array (
              1 =>
              array (
                0 => 'Oi',
                1 => 'Oi',
              ),
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 =>
              array (
                0 => 'Claro BR',
              ),
              9 =>
              array (
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              1 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
              ),
              2 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              3 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              4 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              5 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              7 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              8 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
              ),
            ),
            7 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              1 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              2 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              3 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              4 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              5 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
              ),
              7 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              8 => 'Vivo',
              9 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
            ),
          ),
        ),
      ),
      9 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 => 'TIM',
            2 =>
            array (
              0 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                9 => 'TIM',
              ),
            ),
          ),
          9 =>
          array (
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 =>
            array (
              0 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              1 => 'Vivo',
              2 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              3 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              4 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              5 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              7 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              8 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              9 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
            ),
            7 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              7 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 =>
              array (
                0 => 'Vivo',
              ),
            ),
          ),
        ),
      ),
    ),
    2 =>
    array (
      1 =>
      array (
        9 =>
        array (
          7 =>
          array (
            1 => 'Vivo',
            2 => 'Vivo',
            3 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
              ),
            ),
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
          ),
          8 =>
          array (
            1 => 'TIM',
            2 => 'TIM',
            3 =>
            array (
              0 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              6 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              7 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              8 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
              ),
            ),
            4 =>
            array (
              0 =>
              array (
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
              1 =>
              array (
                1 => 'Oi',
                2 => 'Oi',
                3 => 'Oi',
                4 => 'Oi',
                5 => 'Oi',
                6 => 'Oi',
                7 => 'Oi',
                8 => 'Oi',
                9 => 'Oi',
              ),
            ),
            5 => 'Oi',
            6 => 'Oi',
            7 => 'Oi',
            8 => 'Oi',
            9 => 'Oi',
          ),
          9 =>
          array (
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Vivo',
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 => 'Vivo',
          ),
        ),
      ),
      2 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
              ),
            ),
            5 => 'Oi',
            6 => 'Oi',
            7 => 'Oi',
            8 => 'Oi',
            9 => 'Oi',
          ),
          9 =>
          array (
            1 =>
            array (
              0 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
              ),
            ),
            2 =>
            array (
              0 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              1 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              2 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              3 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              4 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              5 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              6 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              7 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              8 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
            ),
            7 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
              ),
            ),
            8 => 'Vivo',
            9 => 'Vivo',
          ),
        ),
      ),
      4 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
              ),
              8 =>
              array (
                2 => 'TIM',
              ),
            ),
            5 => 'Oi',
            6 => 'Oi',
            7 => 'Oi',
            8 => 'Oi',
            9 => 'Oi',
          ),
          9 =>
          array (
            2 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 =>
              array (
                0 => 'Claro BR',
                1 => 'Claro BR',
                2 => 'Claro BR',
              ),
              9 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
            ),
            3 =>
            array (
              0 =>
              array (
                1 => 'Claro BR',
              ),
              9 =>
              array (
                5 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
              ),
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      7 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              2 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              3 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              4 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              5 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              6 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
              7 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
              ),
              8 =>
              array (
                2 => 'TIM',
              ),
            ),
            5 => 'Oi',
            6 => 'Oi',
            7 => 'Oi',
            8 => 'Oi',
            9 => 'Oi',
          ),
          9 =>
          array (
            2 =>
            array (
              0 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
              ),
              2 =>
              array (
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              3 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              4 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              5 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              6 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              7 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              8 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              9 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
            ),
            3 =>
            array (
              0 =>
              array (
                9 => 'Claro BR',
              ),
              1 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                6 => 'Claro BR',
              ),
            ),
            6 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 =>
              array (
                0 => 'Vivo',
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
              ),
            ),
            7 => 'Vivo',
            8 => 'Vivo',
            9 => 'Vivo',
          ),
        ),
      ),
      8 =>
      array (
        9 =>
        array (
          8 =>
          array (
            1 =>
            array (
              1 =>
              array (
                1 => 'TIM',
                2 => 'TIM',
                3 => 'TIM',
                4 => 'TIM',
                5 => 'TIM',
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
            ),
            5 => 'Oi',
            6 => 'Oi',
            7 => 'Oi',
            8 => 'Oi',
            9 => 'Oi',
          ),
          9 =>
          array (
            2 =>
            array (
              1 =>
              array (
                0 => 'Claro BR',
              ),
              2 =>
              array (
                2 => 'Claro BR',
              ),
              5 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
              ),
              7 =>
              array (
                1 => 'Claro BR',
                2 => 'Claro BR',
                3 => 'Claro BR',
                4 => 'Claro BR',
                5 => 'Claro BR',
                6 => 'Claro BR',
                7 => 'Claro BR',
                8 => 'Claro BR',
                9 => 'Claro BR',
              ),
              9 =>
              array (
                1 => 'Claro BR',
                8 => 'Claro BR',
              ),
            ),
            8 =>
            array (
              8 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
              ),
            ),
            9 =>
            array (
              0 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
              ),
              1 =>
              array (
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              2 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
              ),
              3 =>
              array (
                5 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              4 =>
              array (
                5 => 'Vivo',
                6 => 'Vivo',
              ),
              5 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              6 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              7 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              8 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
                9 => 'Vivo',
              ),
              9 =>
              array (
                1 => 'Vivo',
                2 => 'Vivo',
                3 => 'Vivo',
                4 => 'Vivo',
                5 => 'Vivo',
                6 => 'Vivo',
                7 => 'Vivo',
                8 => 'Vivo',
              ),
            ),
          ),
        ),
      ),
    ),
    3 =>
    array (
      1 =>
      array (
        8 =>
        array (
          2 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
            ),
          ),
          3 => 'Claro BR',
          4 => 'Claro BR',
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 => 'TIM',
            2 => 'TIM',
            3 => 'TIM',
            4 => 'TIM',
            5 => 'TIM',
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          2 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          3 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            6 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            7 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            8 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            9 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
          ),
          7 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            6 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            7 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            8 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            9 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            6 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            7 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            8 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            9 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 => 'Telemig Celular',
            6 => 'Telemig Celular',
            7 => 'Telemig Celular',
            8 => 'Telemig Celular',
            9 => 'Telemig Celular',
          ),
        ),
      ),
      2 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 => 'Claro BR',
            8 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
            ),
            9 =>
            array (
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            6 => 'Telemig Celular',
            7 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            8 => 'Telemig Celular',
            9 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
            ),
          ),
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            2 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            3 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            4 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            5 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              8 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              3 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
            ),
            3 =>
            array (
              3 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            6 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            7 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            8 => 'Telemig Celular',
          ),
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 => 'TIM',
            2 => 'TIM',
            3 => 'TIM',
            4 => 'TIM',
            5 => 'TIM',
            6 => 'TIM',
            7 => 'TIM',
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          2 =>
          array (
            0 =>
            array (
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            2 =>
            array (
              9 => 'TIM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            8 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
          ),
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            2 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            3 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            4 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            5 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            6 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            7 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            6 => 'Telemig Celular',
            7 => 'Telemig Celular',
            8 => 'Telemig Celular',
            9 =>
            array (
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
            ),
          ),
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            2 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
            ),
            5 =>
            array (
              4 => 'TIM',
            ),
            8 =>
            array (
              6 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            2 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            3 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            4 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            5 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            6 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            8 => 'Telemig Celular',
            9 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
          ),
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            2 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            3 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 =>
            array (
              0 => 'Telemig Celular',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              4 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
            1 => 'Telemig Celular',
            2 => 'Telemig Celular',
            3 => 'Telemig Celular',
            4 => 'Telemig Celular',
            5 => 'Telemig Celular',
            6 => 'Telemig Celular',
            7 => 'Telemig Celular',
            8 => 'Telemig Celular',
            9 =>
            array (
              0 => 'Telemig Celular',
              1 => 'Telemig Celular',
              2 => 'Telemig Celular',
              3 => 'Telemig Celular',
              5 => 'Telemig Celular',
              6 => 'Telemig Celular',
              7 => 'Telemig Celular',
              8 => 'Telemig Celular',
              9 => 'Telemig Celular',
            ),
          ),
        ),
      ),
    ),
    4 =>
    array (
      1 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            5 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            6 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            7 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
            ),
          ),
          7 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
          8 => 'Claro BR',
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
          2 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
            ),
          ),
          6 => 'TIM',
          8 =>
          array (
            0 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
            ),
          ),
          9 => 'TIM',
        ),
      ),
      2 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
            ),
          ),
          8 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
            ),
          ),
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
            ),
          ),
          8 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
            ),
          ),
          6 =>
          array (
            0 => 'TIM',
            1 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
              2 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 => 'TIM',
            1 => 'TIM',
            2 => 'TIM',
            3 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 =>
              array (
                6 => 'TIM',
                7 => 'TIM',
                8 => 'TIM',
                9 => 'TIM',
              ),
            ),
            5 => 'TIM',
            6 => 'TIM',
            7 => 'TIM',
            8 => 'TIM',
          ),
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
          ),
          8 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 =>
            array (
              0 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
            ),
          ),
          9 => 'TIM',
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            2 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            3 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            4 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
            ),
          ),
        ),
      ),
      6 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 => 'Claro BR',
            2 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
            ),
            3 =>
            array (
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              8 => 'TIM',
            ),
          ),
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            5 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
            ),
          ),
          8 => 'Claro BR',
          9 =>
          array (
            0 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 => 'Vivo',
          2 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 => 'TIM',
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
          ),
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            5 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
            ),
          ),
          8 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 => 'TIM',
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 => 'TIM',
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
          ),
        ),
      ),
      9 =>
      array (
        8 =>
        array (
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
          ),
          8 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 => 'Claro BR',
            8 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              5 => 'TIM',
            ),
            6 =>
            array (
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 => 'TIM',
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
          ),
        ),
      ),
    ),
    5 =>
    array (
      1 =>
      array (
        8 =>
        array (
          1 => 'TIM',
          2 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            2 =>
            array (
              6 => 'TIM',
              7 => 'TIM',
            ),
          ),
          4 => 'Brasil Telecom GSM',
          5 => 'Brasil Telecom GSM',
        ),
        9 =>
        array (
          1 => 'Claro BR',
          2 => 'Claro BR',
          3 => 'Claro BR',
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 =>
            array (
              0 => 'Claro BR',
            ),
          ),
          5 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
            ),
          ),
          6 => 'Vivo',
          7 => 'Vivo',
          8 => 'Vivo',
          9 => 'Vivo',
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
            ),
          ),
          2 =>
          array (
            4 =>
            array (
              1 => 'Claro BR',
            ),
          ),
          9 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              3 => 'TIM',
            ),
            2 =>
            array (
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          1 => 'Claro BR',
          2 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          1 => 'Claro BR',
          6 => 'Vivo',
          9 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
    ),
    6 =>
    array (
      1 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 => 'TIM',
            2 => 'TIM',
            3 => 'TIM',
            4 => 'TIM',
            5 => 'TIM',
            6 => 'TIM',
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          4 => 'Brasil Telecom GSM',
          5 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            5 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            6 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            7 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            8 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          6 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 => 'Vivo',
          ),
        ),
      ),
      2 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          4 => 'Brasil Telecom GSM',
          5 => 'Brasil Telecom GSM',
        ),
        9 =>
        array (
          6 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          9 =>
          array (
            1 =>
            array (
              1 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          6 =>
          array (
            0 =>
            array (
              6 => 'Vivo',
              7 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              8 => 'Vivo',
            ),
            2 =>
            array (
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
            5 =>
            array (
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              8 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
            ),
            9 =>
            array (
              5 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              2 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              5 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
          ),
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            5 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          6 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      6 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          6 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              7 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            5 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          6 => 'Vivo',
          8 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
            ),
          ),
          9 => 'Vivo',
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          9 =>
          array (
            1 =>
            array (
              1 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      9 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            1 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            2 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            3 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            4 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            5 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              4 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
              8 => 'Brasil Telecom GSM',
              9 => 'Brasil Telecom GSM',
            ),
            6 =>
            array (
              1 => 'Brasil Telecom GSM',
              2 => 'Brasil Telecom GSM',
              3 => 'Brasil Telecom GSM',
              5 => 'Brasil Telecom GSM',
              6 => 'Brasil Telecom GSM',
              7 => 'Brasil Telecom GSM',
            ),
          ),
        ),
        9 =>
        array (
          9 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
    ),
    7 =>
    array (
      1 =>
      array (
        8 =>
        array (
          1 => 'Claro BR',
          2 => 'Claro BR',
          3 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          2 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              7 => 'TIM',
            ),
          ),
          6 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 => 'Vivo',
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          1 => 'Claro BR',
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              6 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              7 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              7 => 'TIM',
              8 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              7 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            1 =>
            array (
              5 => 'TIM',
              6 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
            ),
            3 =>
            array (
              5 => 'TIM',
            ),
            4 =>
            array (
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          9 =>
          array (
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 => 'Vivo',
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 => 'Vivo',
            9 =>
            array (
              1 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          1 => 'Claro BR',
          2 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              5 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          8 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
            7 =>
            array (
              0 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
            9 =>
            array (
              0 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            1 =>
            array (
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              5 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
            ),
            4 =>
            array (
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          8 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
            8 => 'Vivo',
            9 =>
            array (
              0 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
        ),
      ),
      9 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            1 =>
            array (
              6 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              4 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              5 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
          ),
          8 => 'Vivo',
          9 => 'Vivo',
        ),
      ),
    ),
    8 =>
    array (
      1 =>
      array (
        8 =>
        array (
          1 => 'Vivo',
          2 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Claro BR',
          2 => 'Claro BR',
          3 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
            ),
          ),
          4 => 'Claro BR',
          6 => 'TIM',
          7 =>
          array (
            0 => 'TIM',
            1 => 'TIM',
            2 => 'TIM',
            3 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            4 =>
            array (
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              0 => 'TIM',
            ),
          ),
          9 => 'TIM',
        ),
      ),
      2 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Claro BR',
          3 =>
          array (
            0 => 'Claro BR',
            1 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
            ),
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
            ),
            5 =>
            array (
              1 => 'Claro BR',
            ),
            6 =>
            array (
              1 => 'Claro BR',
            ),
            7 =>
            array (
              1 => 'Claro BR',
            ),
            8 =>
            array (
              1 => 'Claro BR',
            ),
          ),
          4 =>
          array (
            4 =>
            array (
              4 => 'Claro BR',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 => 'TIM',
            1 => 'TIM',
            2 => 'TIM',
            3 => 'TIM',
            4 => 'TIM',
            5 => 'TIM',
            6 => 'TIM',
            7 => 'TIM',
            8 => 'TIM',
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Claro BR',
          3 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
            ),
            4 =>
            array (
              2 => 'Claro BR',
            ),
            5 =>
            array (
              2 => 'Claro BR',
            ),
            6 =>
            array (
              2 => 'Claro BR',
            ),
            7 =>
            array (
              2 => 'Claro BR',
            ),
            8 =>
            array (
              2 => 'Claro BR',
            ),
          ),
          4 =>
          array (
            4 =>
            array (
              4 => 'Claro BR',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 => 'TIM',
            1 => 'TIM',
            2 => 'TIM',
            3 => 'TIM',
            4 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            5 => 'TIM',
            6 => 'TIM',
            7 => 'TIM',
            8 => 'TIM',
            9 => 'TIM',
          ),
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Claro BR',
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
            ),
            7 =>
            array (
              1 => 'Claro BR',
            ),
            8 =>
            array (
              1 => 'Claro BR',
            ),
          ),
          6 =>
          array (
            0 => 'TIM',
            1 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
              2 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              0 => 'TIM',
            ),
          ),
          9 => 'TIM',
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          1 => 'Vivo',
          2 =>
          array (
            0 => 'Vivo',
            1 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Claro BR',
          2 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
            ),
            4 =>
            array (
              4 => 'Claro BR',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 => 'TIM',
          ),
        ),
      ),
      6 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          4 => 'Claro BR',
          5 =>
          array (
            0 => 'Claro BR',
            1 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
            ),
          ),
          9 =>
          array (
            2 => 'TIM',
            3 => 'TIM',
            4 => 'TIM',
            5 =>
            array (
              0 => 'TIM',
              1 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
            ),
          ),
          2 =>
          array (
            4 =>
            array (
              3 => 'Claro BR',
            ),
            5 =>
            array (
              3 => 'Claro BR',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              8 => 'TIM',
            ),
            9 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 =>
            array (
              0 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          2 => 'Claro BR',
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 => 'TIM',
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
            ),
            3 =>
            array (
              0 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
            ),
            4 =>
            array (
              0 => 'TIM',
            ),
            5 =>
            array (
              0 => 'TIM',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
          ),
        ),
      ),
      9 =>
      array (
        8 =>
        array (
          1 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 =>
            array (
              0 => 'Vivo',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 =>
            array (
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
            ),
          ),
          9 =>
          array (
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              4 => 'TIM',
              5 => 'TIM',
            ),
            9 =>
            array (
              7 => 'TIM',
            ),
          ),
        ),
      ),
    ),
    9 =>
    array (
      1 =>
      array (
        8 =>
        array (
          1 => 'TIM',
          2 =>
          array (
            0 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 => 'Claro BR',
            7 => 'Claro BR',
            8 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Vivo',
          2 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 => 'Vivo',
            7 => 'Vivo',
            8 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            1 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            2 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            3 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            4 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
            ),
            1 =>
            array (
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            2 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
            ),
            4 =>
            array (
              0 => 'Oi',
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              9 => 'Oi',
            ),
            6 => 'Oi',
            7 =>
            array (
              1 => 'Oi',
              5 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            8 => 'Oi',
          ),
        ),
      ),
      2 =>
      array (
        8 =>
        array (
          1 => 'TIM',
          2 =>
          array (
            1 =>
            array (
              1 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Vivo',
          2 => 'Vivo',
          3 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 => 'Vivo',
            4 => 'Vivo',
            5 => 'Vivo',
            6 => 'Vivo',
            7 => 'Vivo',
            8 => 'Vivo',
            9 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
            ),
          ),
          6 =>
          array (
            3 =>
            array (
              1 => 'Oi',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            1 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
            ),
            4 =>
            array (
              4 => 'Oi',
            ),
            5 =>
            array (
              1 => 'Oi',
            ),
            6 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            7 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
            ),
            8 => 'Oi',
            9 =>
            array (
              1 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
          ),
        ),
      ),
      3 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
          6 =>
          array (
            5 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              8 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
            ),
            5 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              4 => 'Oi',
            ),
            7 =>
            array (
              0 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
          ),
        ),
      ),
      4 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
              5 => 'Claro BR',
              6 => 'Claro BR',
              7 => 'Claro BR',
              8 => 'Claro BR',
              9 => 'Claro BR',
            ),
            1 =>
            array (
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
              4 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 => 'Vivo',
          2 =>
          array (
            0 => 'Vivo',
            1 => 'Vivo',
            2 => 'Vivo',
            3 =>
            array (
              0 => 'Vivo',
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
            ),
          ),
          6 =>
          array (
            6 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
              4 => 'Oi',
            ),
            4 =>
            array (
              4 => 'Oi',
            ),
            5 =>
            array (
              3 => 'Oi',
              5 => 'Oi',
            ),
            6 =>
            array (
              9 => 'Oi',
            ),
            7 =>
            array (
              0 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              7 => 'Oi',
              9 => 'Oi',
            ),
          ),
        ),
      ),
      5 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 => 'Claro BR',
            1 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
            ),
            5 =>
            array (
              9 => 'Oi',
            ),
            6 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              7 => 'Oi',
            ),
            7 =>
            array (
              0 => 'Oi',
              1 => 'Oi',
              2 => 'Oi',
              4 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
            ),
            8 =>
            array (
              1 => 'Oi',
            ),
          ),
        ),
      ),
      6 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 => 'Claro BR',
            1 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
              3 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            1 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
            ),
            6 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
            ),
            7 =>
            array (
              0 => 'Oi',
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
            ),
            8 =>
            array (
              1 => 'Oi',
            ),
          ),
        ),
      ),
      7 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 => 'Claro BR',
            1 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
          ),
          6 =>
          array (
            1 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
            ),
            5 =>
            array (
              3 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            7 =>
            array (
              8 => 'Oi',
              9 => 'Oi',
            ),
          ),
        ),
      ),
      8 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            6 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            7 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            8 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 => 'Claro BR',
            3 => 'Claro BR',
            4 => 'Claro BR',
            5 => 'Claro BR',
            6 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
          ),
          6 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            1 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            2 =>
            array (
              1 => 'Oi',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            1 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
              4 => 'Oi',
            ),
            4 =>
            array (
              4 => 'Oi',
            ),
            6 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            7 =>
            array (
              0 => 'Oi',
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
            ),
            8 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              8 => 'Oi',
            ),
            9 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
            ),
          ),
        ),
      ),
      9 =>
      array (
        8 =>
        array (
          1 =>
          array (
            1 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            2 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            3 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            4 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
              4 => 'TIM',
              5 => 'TIM',
              6 => 'TIM',
              7 => 'TIM',
              8 => 'TIM',
              9 => 'TIM',
            ),
            5 =>
            array (
              1 => 'TIM',
              2 => 'TIM',
              3 => 'TIM',
            ),
          ),
          4 =>
          array (
            0 => 'Claro BR',
            1 => 'Claro BR',
            2 =>
            array (
              0 => 'Claro BR',
              1 => 'Claro BR',
              2 => 'Claro BR',
            ),
          ),
          5 => 'Oi',
          6 => 'Oi',
          7 => 'Oi',
          8 => 'Oi',
          9 => 'Oi',
        ),
        9 =>
        array (
          1 =>
          array (
            0 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            1 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
            ),
            2 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            3 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            4 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            5 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            6 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            7 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            8 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
              9 => 'Vivo',
            ),
            9 =>
            array (
              1 => 'Vivo',
              2 => 'Vivo',
              3 => 'Vivo',
              4 => 'Vivo',
              5 => 'Vivo',
              6 => 'Vivo',
              7 => 'Vivo',
              8 => 'Vivo',
            ),
          ),
          6 =>
          array (
            3 =>
            array (
              1 => 'Oi',
            ),
            4 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              9 => 'Oi',
            ),
            5 =>
            array (
              1 => 'Oi',
            ),
          ),
          9 =>
          array (
            0 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
            ),
            3 =>
            array (
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
            ),
            5 =>
            array (
              1 => 'Oi',
              2 => 'Oi',
              3 => 'Oi',
              4 => 'Oi',
              5 => 'Oi',
            ),
            7 =>
            array (
              0 => 'Oi',
              7 => 'Oi',
              8 => 'Oi',
              9 => 'Oi',
            ),
            8 =>
            array (
              4 => 'Oi',
              5 => 'Oi',
              6 => 'Oi',
              7 => 'Oi',
              9 => 'Oi',
            ),
          ),
        ),
      ),
    ),
  ),
  56 =>
  array (
    9 =>
    array (
      4 =>
      array (
        1 => 'Movistar',
        2 => 'Entel',
        3 =>
        array (
          0 => 'Telestar',
          1 => 'Telestar',
          2 => 'Telestar',
          3 => 'Telestar',
          4 => 'Simple',
          5 => 'Simple',
          6 => 'Telefónica Uno Uno Cuatro',
          7 => 'Telefónica Uno Uno Cuatro',
          8 => 'Tribe',
          9 => 'Tribe',
        ),
      ),
      5 =>
      array (
        0 => 'Claro',
        1 =>
        array (
          0 => 'Tribe',
          1 => 'Tribe',
          2 => 'Tribe',
          3 => 'Tribe',
          4 => 'Entel',
          5 => 'Entel',
          6 => 'Entel',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Entel',
        ),
        2 =>
        array (
          0 => 'Entel',
          1 => 'Entel',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Tribe',
          5 => 'Tribe',
          6 => 'Falabella Movil',
          7 => 'Falabella Movil',
          8 => 'Falabella Movil',
          9 => 'Falabella Movil',
        ),
        3 => 'Movistar',
        4 => 'Claro',
        5 =>
        array (
          0 => 'OPS Movil',
          1 => 'Nextel',
          2 => 'Nextel',
          3 => 'Nextel',
          4 => 'Netline',
          5 =>
          array (
            0 => 'Netline',
            1 => 'Netline',
            2 => 'Netline',
            3 => 'Netline',
            4 => 'Netline',
            5 => 'Redvoiss',
            6 => 'Redvoiss',
          ),
          6 => 'Falabella Movil',
          7 => 'Telestar',
          8 => 'Falabella Movil',
          9 => 'Falabella Movil',
        ),
        6 => 'Entel',
        7 => 'Entel',
        8 => 'Movistar',
        9 => 'Claro',
      ),
      6 =>
      array (
        1 => 'Movistar',
        2 =>
        array (
          0 => 'Entel',
          1 => 'Entel',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Entel',
          5 => 'Claro',
          6 => 'Claro',
          7 => 'Claro',
          8 => 'Movistar',
          9 => 'Movistar',
        ),
        3 =>
        array (
          0 => 'Movistar',
          1 => 'Movistar',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'VTR Móvil',
          5 => 'VTR Móvil',
          6 => 'VTR Móvil',
          7 => 'VTR Móvil',
          8 => 'VTR Móvil',
          9 => 'Movistar',
        ),
        4 =>
        array (
          0 => 'Movistar',
          1 => 'Nextel',
          2 => 'Nextel',
          3 => 'Nextel',
          4 => 'Nextel',
          5 => 'Nextel',
          6 => 'Movistar',
          7 => 'Movistar',
          8 => 'Movistar',
          9 => 'Movistar',
        ),
        5 =>
        array (
          0 => 'Entel',
          1 => 'Entel',
          2 => 'Claro',
          3 => 'Claro',
          4 => 'Claro',
          5 => 'Claro',
          6 => 'Claro',
          7 => 'Claro',
          8 => 'Entel',
          9 => 'Entel',
        ),
        6 => 'Entel',
        7 =>
        array (
          0 => 'Claro',
          1 => 'Claro',
          2 => 'Claro',
          3 => 'Claro',
          4 => 'Claro',
          5 => 'Claro',
          6 =>
          array (
            0 => 'Telsur',
            1 => 'Telsur',
            2 => 'Telsur',
            4 => 'Cibeles Telecom',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
          7 =>
          array (
            0 => 'Celupago',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
          8 =>
          array (
            0 => 'Mavi',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
          9 =>
          array (
            0 => 'Telestar',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
        ),
        8 =>
        array (
          0 => 'Movistar',
          1 => 'Movistar',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Movistar',
          8 => 'Nómade Telecomunicaciones',
          9 =>
          array (
            0 => 'Netline',
            1 => 'Netline',
            2 => 'Netline',
            3 => 'Netline',
            4 => 'Netline',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
        ),
        9 =>
        array (
          0 => 'Entel',
          1 =>
          array (
            0 => 'Sociedad Comercial y de Ingeniería Swedcom',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
          2 => 'Television Interactiva',
          3 => 'Quantax',
          4 => 'NetUno',
          5 => 'Blue Two',
          6 => 'Tribe',
          7 => 'VTR Móvil',
          9 => 'Telecomunicaciones Dotcom',
        ),
      ),
      7 =>
      array (
        1 =>
        array (
          0 => 'Entel',
          1 => 'CIT LTDA',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Claro',
          8 => 'Claro',
          9 => 'Claro',
        ),
        2 => 'Claro',
        3 =>
        array (
          0 => 'Claro',
          1 => 'Claro',
          2 => 'Claro',
          3 => 'Claro',
          4 => 'Claro',
          5 => 'Claro',
          6 => 'Claro',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Entel',
        ),
        4 =>
        array (
          0 => 'Claro',
          1 => 'Movistar',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Movistar',
          8 => 'Movistar',
          9 => 'Movistar',
        ),
        5 =>
        array (
          0 => 'Nextel',
          1 => 'Entel',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Entel',
          5 => 'Entel',
          6 => 'Entel',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Claro',
        ),
        6 =>
        array (
          0 => 'Entel',
          1 => 'Movistar',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Entel',
          5 => 'Entel',
          6 => 'Entel',
          7 => 'Claro',
          8 => 'Claro',
          9 => 'Claro',
        ),
        7 =>
        array (
          0 => 'Entel',
          1 => 'Movistar',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Entel',
          5 => 'Entel',
          6 => 'Entel',
          7 => 'Claro',
          8 => 'Claro',
          9 => 'Claro',
        ),
        8 =>
        array (
          0 => 'Entel',
          1 => 'Claro',
          2 => 'Claro',
          3 => 'Claro',
          4 => 'Claro',
          5 => 'Claro',
          6 => 'Claro',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Entel',
        ),
        9 =>
        array (
          0 => 'Claro',
          1 => 'Claro',
          2 => 'Claro',
          3 => 'Claro',
          4 => 'Claro',
          5 => 'Entel',
          6 => 'Entel',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Entel',
        ),
      ),
      8 =>
      array (
        0 => 'Entel',
        1 =>
        array (
          0 =>
          array (
            0 => 'Viva',
            1 => 'Viva',
            2 => 'Viva',
            3 => 'Viva',
            4 => 'Viva',
            5 => 'Nextel',
            6 => 'Nextel',
            7 => 'Nextel',
            8 => 'Nextel',
            9 => 'Nextel',
          ),
          1 => 'Entel',
          2 => 'Movistar',
          3 => 'Entel',
          4 => 'Claro',
          5 => 'Entel',
          6 => 'Movistar',
          7 => 'Movistar',
          8 => 'Entel',
          9 => 'Entel',
        ),
        2 => 'Entel',
        3 => 'Movistar',
        4 =>
        array (
          0 => 'Entel',
          1 => 'Entel',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Entel',
          5 => 'Entel',
          6 => 'Entel',
          7 => 'Entel',
          8 => 'Claro',
          9 => 'Claro',
        ),
        5 => 'Movistar',
        6 => 'Claro',
        7 =>
        array (
          0 => 'Claro',
          1 => 'Claro',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Entel',
          5 => 'Entel',
          6 => 'Entel',
          7 => 'Claro',
          8 => 'Movistar',
          9 => 'Movistar',
        ),
        8 =>
        array (
          0 => 'Claro',
          1 => 'Entel',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Movistar',
          8 => 'Entel',
          9 => 'Entel',
        ),
        9 => 'Movistar',
      ),
      9 =>
      array (
        0 =>
        array (
          0 => 'Claro',
          1 => 'Movistar',
          2 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Movistar',
            6 => 'Mobilink',
            7 => 'Mobilink',
            8 => 'Nextel',
            9 => 'Nextel',
          ),
          3 => 'Movistar',
          4 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Movistar',
            6 => 'Movistar',
            7 => 'Movistar',
            8 => 'Nextel',
            9 => 'Nextel',
          ),
          5 => 'Claro',
          6 => 'Claro',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Entel',
        ),
        1 =>
        array (
          0 => 'Claro',
          2 => 'Entel',
          3 => 'Entel',
          4 =>
          array (
            0 => 'Entel',
            1 => 'Entel',
            2 => 'Entel',
            4 => 'Movistar',
            5 => 'Movistar',
            6 => 'Movistar',
            7 => 'Movistar',
            8 => 'Movistar',
            9 => 'Movistar',
          ),
          5 => 'Entel',
          6 => 'Movistar',
          7 => 'Claro',
          8 => 'Movistar',
          9 => 'Movistar',
        ),
        2 =>
        array (
          0 => 'Claro',
          1 => 'Entel',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Movistar',
          8 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Instabeep',
            6 => 'Movistar',
            7 => 'Movistar',
            8 =>
            array (
              0 => 'Arch Comunicaciones',
              1 => 'Arch Comunicaciones',
              2 => 'Arch Comunicaciones',
              3 => 'Arch Comunicaciones',
              4 => 'Arch Comunicaciones',
              5 => 'Bermann',
              6 => 'Bermann',
            ),
            9 => 'Entel',
          ),
          9 => 'Entel',
        ),
        3 =>
        array (
          0 => 'Entel',
          1 => 'Entel',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Entel',
          6 => 'Movistar',
          7 => 'Movistar',
          8 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Entel',
            3 => 'Entel',
            4 => 'Scharfstein',
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Movistar',
          ),
          9 => 'Claro',
        ),
        4 =>
        array (
          0 => 'Movistar',
          1 => 'Entel',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Entel',
          8 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Entel',
            4 => 'Entel',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
          9 => 'Entel',
        ),
        5 =>
        array (
          0 => 'Entel',
          1 => 'Entel',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Entel',
          8 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Claro',
          ),
          9 => 'Entel',
        ),
        6 =>
        array (
          0 =>
          array (
            0 => 'Movistar',
            1 => 'Entel',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Movistar',
            6 => 'Movistar',
            7 => 'Entel',
            8 => 'Movistar',
            9 => 'Claro',
          ),
          1 => 'Entel',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Entel',
          8 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Claro',
            3 => 'Claro',
            4 => 'Claro',
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Claro',
          ),
          9 => 'Entel',
        ),
        7 =>
        array (
          0 => 'Movistar',
          1 => 'Entel',
          2 => 'Movistar',
          3 => 'Movistar',
          4 => 'Movistar',
          5 => 'Movistar',
          6 => 'Movistar',
          7 => 'Entel',
          8 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Entel',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
          9 => 'Entel',
        ),
        8 =>
        array (
          0 => 'Claro',
          1 => 'Entel',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Claro',
          5 => 'Claro',
          6 => 'Claro',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Entel',
        ),
        9 =>
        array (
          0 => 'Movistar',
          1 => 'Entel',
          2 => 'Claro',
          3 => 'Entel',
          4 => 'Entel',
          5 => 'Movistar',
          6 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
          7 =>
          array (
            0 => 'Movistar',
            1 => 'Movistar',
            2 => 'Movistar',
            3 => 'Movistar',
            4 => 'Movistar',
            5 => 'Claro',
            6 => 'Claro',
            7 => 'Claro',
            8 => 'Claro',
            9 => 'Claro',
          ),
          8 => 'Claro',
          9 =>
          array (
            0 => 'Tesacom',
            1 => 'Entel',
            2 => 'Entel',
            3 => 'Entel',
            4 => 'Entel',
            5 => 'Entel',
            6 => 'Entel',
            7 => 'Entel',
            8 => 'Entel',
            9 => 'Entel',
          ),
        ),
      ),
    ),
  ),
  57 =>
  array (
    3 =>
    array (
      0 =>
      array (
        0 => 'Tigo',
        1 => 'Tigo',
        2 => 'Tigo',
        3 => 'Uff!',
        4 => 'Une',
        5 => 'Movil Exito',
      ),
      1 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
        3 => 'Claro',
        4 => 'Claro',
        5 => 'Movistar',
        6 => 'Movistar',
        7 => 'Movistar',
        8 => 'Movistar',
        9 => 'Virgin Mobile',
      ),
      2 =>
      array (
        0 => 'Claro',
        1 => 'Claro',
        2 => 'Claro',
      ),
      5 =>
      array (
        0 => 'Avantel',
        1 => 'Avantel',
      ),
    ),
  ),
  58 =>
  array (
    4 =>
    array (
      1 =>
      array (
        2 => 'Digitel GSM',
        4 => 'movistar',
        6 => 'Movilnet',
      ),
      2 =>
      array (
        6 => 'Movilnet',
      ),
    ),
  ),
  591 =>
  array (
    7 =>
    array (
      0 => 'Nuevatel',
      1 =>
      array (
        0 => 'Entel',
        1 => 'Entel',
        2 => 'Entel',
        4 => 'Entel',
        5 => 'Entel',
        6 => 'Entel',
        7 => 'Entel',
        8 => 'Entel',
        9 => 'Entel',
      ),
      2 => 'Entel',
      3 =>
      array (
        0 => 'Entel',
        1 => 'Entel',
        2 => 'Entel',
        3 => 'Entel',
        4 =>
        array (
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Entel',
          6 => 'Entel',
          7 => 'Entel',
          8 => 'Entel',
          9 => 'Entel',
        ),
        5 =>
        array (
          3 => 'Entel',
        ),
        6 => 'Entel',
        7 =>
        array (
          0 => 'Entel',
          1 => 'Entel',
          2 => 'Entel',
          3 => 'Entel',
          4 => 'Entel',
          5 => 'Entel',
          7 => 'Entel',
        ),
        8 => 'Entel',
      ),
      4 => 'Entel',
      5 => 'Tigo',
      6 => 'Tigo',
      7 => 'Tigo',
      9 => 'Nuevatel',
    ),
  ),
  595 =>
  array (
    2 =>
    array (
      1 => 'Personal',
    ),
    9 =>
    array (
      6 => 'Personal',
      7 => 'Personal',
      8 => 'Personal',
      9 => 'Personal',
    ),
  ),
  597 =>
  array (
    7 =>
    array (
      1 => 'Digicel',
      2 => 'Digicel',
      4 => 'Digicel',
      5 => 'Telesur',
      6 => 'Digicel',
      7 =>
      array (
        0 => 'Telesur',
        1 => 'Telesur',
        2 => 'Telesur',
        3 => 'Telesur',
        4 => 'Telesur',
      ),
    ),
    8 =>
    array (
      1 => 'Digicel',
      2 => 'Digicel',
      3 => 'Uniqa',
      4 => 'Uniqa',
      5 => 'Telesur',
      6 => 'Telesur',
      7 => 'Telesur',
      8 => 'Telesur',
      9 => 'Telesur',
    ),
  ),
  598 =>
  array (
    9 =>
    array (
      1 => 'Antel',
      2 =>
      array (
        0 => 'Antel',
        1 => 'Antel',
        2 => 'Antel',
      ),
      3 => 'Movistar',
      4 => 'Movistar',
      5 => 'Movistar',
      6 => 'Claro',
      7 => 'Claro',
      8 => 'Antel',
      9 => 'Antel',
    ),
  ),
  599 =>
  array (
    7 =>
    array (
      0 =>
      array (
        0 => 'Digicel',
        1 => 'Digicel',
      ),
      7 =>
      array (
        0 => 'Telbo N.V.',
        7 => 'Telbo N.V.',
      ),
      8 => 'Digicel',
      9 => 'PCS',
    ),
    4 =>
    array (
      1 =>
      array (
        6 =>
        array (
          1 => 'Satel',
          5 => 'WIC',
          6 => 'WIC',
          7 => 'WIC',
          8 => 'WIC',
          9 => 'Satel',
        ),
      ),
    ),
    3 =>
    array (
      1 =>
      array (
        8 =>
        array (
          1 => 'Eutel/Radcomm',
          4 => 'Eutel/Radcomm',
          5 => 'Eutel/Radcomm',
          6 => 'Eutel/Telcell',
          8 => 'Eutel N.V.',
        ),
      ),
    ),
    9 =>
    array (
      5 =>
      array (
        1 => 'Chippie',
        2 => 'Chippie',
        3 => 'Chippie',
        4 => 'Chippie',
        6 => 'Chippie',
      ),
      6 =>
      array (
        1 => 'CSC',
        3 => 'GSM Caribbean',
        6 => 'Digicel',
        7 => 'Digicel',
        8 => 'Digicel',
        9 => 'Digicel',
      ),
    ),
  ),
  60 =>
  array (
    1 =>
    array (
      0 =>
      array (
        2 => 'DiGi',
        3 =>
        array (
          0 => 'Celcom',
          1 => 'Celcom',
          2 => 'Celcom',
          3 => 'Celcom',
          4 => 'Celcom',
          6 => 'DiGi',
          7 => 'DiGi',
          8 => 'DiGi',
          9 => 'DiGi',
        ),
        4 =>
        array (
          0 => 'Celcom',
          1 => 'Celcom',
          2 => 'Maxis',
          3 => 'Maxis',
          6 => 'DiGi',
        ),
        5 =>
        array (
          0 => 'Celcom',
          1 => 'Celcom',
          2 => 'Celcom',
          3 => 'Celcom',
          4 => 'Celcom',
          6 => 'DiGi',
          7 => 'Celcom',
          8 => 'Celcom',
          9 => 'Celcom',
        ),
        6 =>
        array (
          6 => 'DiGi',
        ),
        7 =>
        array (
          0 => 'Maxis',
          1 => 'Maxis',
          6 => 'DiGi',
          7 => 'Celcom',
          8 => 'Celcom',
          9 => 'Celcom',
        ),
        8 =>
        array (
          0 => 'Celcom',
          1 => 'Celcom',
          2 => 'DiGi',
          3 => 'Celcom',
          4 => 'Celcom',
          5 => 'Celcom',
          6 => 'Celcom',
          7 => 'Celcom',
          8 => 'DiGi',
          9 => 'Maxis',
        ),
        9 =>
        array (
          0 => 'DiGi',
          1 => 'DiGi',
          2 => 'DiGi',
          3 => 'DiGi',
          4 => 'DiGi',
          5 => 'DiGi',
          6 => 'DiGi',
          7 => 'DiGi',
          8 => 'DiGi',
        ),
      ),
      1 =>
      array (
        1 =>
        array (
          3 => 'Celcom',
          5 => 'Celcom',
          6 => 'DiGi',
          9 => 'Celcom',
        ),
        2 =>
        array (
          6 => 'DiGi',
        ),
      ),
      2 => 'Maxis',
      3 => 'Celcom',
      4 =>
      array (
        2 => 'Maxis',
        3 => 'DiGi',
        5 => 'Celcom',
        6 => 'DiGi',
        7 => 'Maxis',
        8 => 'Celcom',
        9 => 'DiGi',
      ),
      5 =>
      array (
        9 =>
        array (
          2 =>
          array (
            0 => 'Celcom',
            1 => 'Celcom',
            2 => 'Celcom',
            3 => 'Celcom',
            4 => 'Celcom',
          ),
        ),
      ),
      6 => 'DiGi',
      7 => 'Maxis',
      8 =>
      array (
        2 => 'TM Homeline',
        3 =>
        array (
          1 => 'TM Homeline',
          2 => 'TM Homeline',
          3 => 'TM Homeline',
          5 => 'TM Homeline',
          6 => 'TM Homeline',
          7 => 'TM Homeline',
          8 => 'TM Homeline',
          9 => 'TM Homeline',
        ),
        4 =>
        array (
          0 => 'TM Homeline',
          6 => 'TM Homeline',
          7 => 'TM Homeline',
        ),
        5 =>
        array (
          7 => 'TM Homeline',
        ),
        6 =>
        array (
          6 => 'TM Homeline',
        ),
        7 =>
        array (
          6 => 'TM Homeline',
          7 => 'TM Homeline',
          8 => 'TM Homeline',
          9 => 'TM Homeline',
        ),
        8 =>
        array (
          7 => 'TM Homeline',
        ),
        9 =>
        array (
          0 => 'TM Homeline',
          1 => 'TM Homeline',
          4 => 'TM Homeline',
          5 => 'TM Homeline',
          6 => 'TM Homeline',
          7 => 'TM Homeline',
          8 => 'TM Homeline',
          9 => 'TM Homeline',
        ),
      ),
      9 => 'Celcom',
    ),
  ),
  61 =>
  array (
    4 =>
    array (
      0 =>
      array (
        0 => 'Telstra',
        1 => 'Optus',
        2 => 'Optus',
        3 => 'Optus',
        4 => 'Vodafone',
        5 => 'Vodafone',
        6 => 'Vodafone',
        7 => 'Telstra',
        8 => 'Telstra',
        9 => 'Telstra',
      ),
      1 =>
      array (
        0 => 'Vodafone',
        1 => 'Optus',
        2 => 'Optus',
        3 => 'Optus',
        4 => 'Vodafone',
        5 => 'Vodafone',
        6 => 'Vodafone',
        7 => 'Telstra',
        8 => 'Telstra',
        9 => 'Telstra',
      ),
      2 =>
      array (
        0 => 'PRDafone',
        1 => 'Optus',
        2 => 'Optus',
        3 => 'Optus',
        4 => 'Vodafone',
        5 => 'Vodafone',
        6 => 'Vodafone',
        7 => 'Telstra',
        8 => 'Telstra',
        9 => 'Telstra',
      ),
      3 =>
      array (
        0 => 'Vodafone',
        1 => 'Optus',
        2 => 'Optus',
        3 => 'Vodafone',
        4 => 'Optus',
        5 => 'Optus',
        7 => 'Telstra',
        8 => 'Telstra',
        9 => 'Telstra',
      ),
      4 =>
      array (
        4 =>
        array (
          4 => 'Telstra',
        ),
        7 => 'Telstra',
        8 => 'Telstra',
        9 => 'Vodafone',
      ),
      5 =>
      array (
        0 => 'Vodafone',
        1 => 'Vodafone',
        2 => 'Vodafone',
        5 => 'Telstra',
        6 => 'Telstra',
        7 => 'Telstra',
        8 => 'Telstra',
        9 => 'Telstra',
      ),
      6 =>
      array (
        6 => 'Optus',
        7 => 'Telstra',
        8 => 'Optus',
        9 => 'Lycamobile',
      ),
      7 =>
      array (
        0 => 'Lycamobile',
        3 => 'Telstra',
        4 => 'Telstra',
        5 => 'Telstra',
        6 => 'Telstra',
        7 => 'Telstra',
        8 => 'Optus',
        9 =>
        array (
          0 => 'Optus',
          1 => 'Optus',
        ),
      ),
      8 =>
      array (
        1 => 'Optus',
        7 => 'Telstra',
        8 => 'Telstra M',
        9 =>
        array (
          8 =>
          array (
            4 => 'Victorian Rail Track',
          ),
        ),
      ),
      9 =>
      array (
        0 => 'Telstra',
        1 => 'Telstra',
        7 => 'Telstra',
        8 => 'Telstra',
        9 => 'Telstra',
      ),
    ),
  ),
  62 =>
  array (
    1 =>
    array (
      9 =>
      array (
        9 => 'Esia',
      ),
    ),
    2 =>
    array (
      1 =>
      array (
        3 =>
        array (
          1 =>
          array (
            7 => 'Esia',
          ),
          4 =>
          array (
            3 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
          5 =>
          array (
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            9 => 'Esia',
          ),
          1 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
            6 => 'Esia',
            7 => 'Esia',
            8 => 'Esia',
          ),
        ),
        5 =>
        array (
          1 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 =>
            array (
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
          6 =>
          array (
            1 => 'Esia',
          ),
          9 =>
          array (
            3 =>
            array (
              6 => 'Esia',
            ),
          ),
        ),
        6 =>
        array (
          0 =>
          array (
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
            6 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
            7 => 'Esia',
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        8 =>
        array (
          0 =>
          array (
            2 => 'Esia',
            3 => 'Esia',
            7 => 'Esia',
          ),
          3 =>
          array (
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            6 => 'Esia',
            8 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
          5 =>
          array (
            3 => 'Esia',
            4 => 'Esia',
            5 =>
            array (
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
          9 =>
          array (
            5 =>
            array (
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            6 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
            ),
          ),
        ),
        9 => 'Esia',
      ),
      2 =>
      array (
        8 =>
        array (
          8 =>
          array (
            0 => 'Esia',
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
            ),
          ),
        ),
        9 =>
        array (
          1 => 'Esia',
          2 => 'Esia',
          3 => 'Esia',
          5 => 'Esia',
          6 =>
          array (
            0 => 'Esia',
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
            ),
          ),
          9 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
            6 => 'Esia',
            7 => 'Esia',
          ),
        ),
      ),
      3 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 =>
            array (
              0 => 'Esia',
            ),
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
            ),
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
            ),
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
          ),
        ),
      ),
      4 =>
      array (
        3 =>
        array (
          6 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
            ),
          ),
        ),
        9 =>
        array (
          1 => 'Esia',
        ),
      ),
      5 =>
      array (
        1 =>
        array (
          3 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
          ),
          4 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
          ),
          9 => 'Esia',
        ),
        2 =>
        array (
          9 =>
          array (
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
          ),
        ),
      ),
      6 =>
      array (
        0 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
            ),
            7 => 'Esia',
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
            ),
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
            ),
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        6 =>
        array (
          9 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
          ),
        ),
        7 =>
        array (
          9 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
            4 => 'Esia',
          ),
        ),
      ),
      7 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
            6 => 'Esia',
            7 => 'Esia',
            8 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
        4 =>
        array (
          3 =>
          array (
            5 => 'Esia',
          ),
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
            6 => 'Esia',
            7 => 'Esia',
            8 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
            ),
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
        6 =>
        array (
          9 =>
          array (
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
      ),
      8 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            1 => 'Esia',
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
            ),
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
            ),
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            9 => 'Esia',
          ),
        ),
        6 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
        7 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
      ),
      9 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            9 => 'Esia',
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            0 => 'Esia',
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            9 =>
            array (
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
        8 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
        9 =>
        array (
          0 => 'Esia',
          1 => 'Esia',
          2 => 'Esia',
          3 => 'Esia',
          4 => 'Esia',
          5 => 'Esia',
          6 => 'Esia',
        ),
      ),
    ),
    3 =>
    array (
      1 =>
      array (
        9 =>
        array (
          1 => 'Esia',
          2 => 'Esia',
          3 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
          ),
        ),
      ),
      2 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      3 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      4 =>
      array (
        1 =>
        array (
          6 =>
          array (
            5 => 'Esia',
            6 => 'Esia',
            7 => 'Esia',
            8 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
            ),
          ),
          9 =>
          array (
            7 => 'Esia',
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
      5 =>
      array (
        1 =>
        array (
          9 =>
          array (
            7 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
        4 =>
        array (
          9 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        8 =>
        array (
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      6 =>
      array (
        1 =>
        array (
          3 =>
          array (
            9 => 'Esia',
          ),
          6 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
            ),
          ),
          9 =>
          array (
            6 => 'Esia',
            9 => 'Esia',
          ),
        ),
        2 =>
        array (
          8 =>
          array (
            5 => 'Esia',
            6 => 'Esia',
          ),
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
      ),
      7 =>
      array (
        0 =>
        array (
          9 =>
          array (
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
      ),
      8 =>
      array (
        0 =>
        array (
          4 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      9 =>
      array (
        9 =>
        array (
          0 => 'Esia',
          1 => 'Esia',
          2 => 'Esia',
          3 => 'Esia',
          4 => 'Esia',
          5 => 'Esia',
          6 => 'Esia',
        ),
      ),
    ),
    4 =>
    array (
      0 =>
      array (
        1 =>
        array (
          7 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
      1 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
            6 => 'Esia',
            7 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
      2 =>
      array (
        1 =>
        array (
          9 =>
          array (
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
        6 =>
        array (
          4 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      3 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            9 => 'Esia',
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        8 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
      ),
      5 =>
      array (
        1 =>
        array (
          6 =>
          array (
            1 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
      8 =>
      array (
        1 =>
        array (
          9 =>
          array (
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
    ),
    5 =>
    array (
      1 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            9 => 'Esia',
          ),
        ),
        8 =>
        array (
          3 =>
          array (
            2 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
            ),
          ),
          9 =>
          array (
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
            ),
          ),
        ),
      ),
      3 =>
      array (
        6 =>
        array (
          2 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
      4 =>
      array (
        1 =>
        array (
          9 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
            2 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
          ),
        ),
        8 =>
        array (
          9 =>
          array (
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
        9 =>
        array (
          9 =>
          array (
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
      6 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
    ),
    6 =>
    array (
      1 =>
      array (
        9 =>
        array (
          1 => 'Esia',
          2 =>
          array (
            0 => 'Esia',
            1 => 'Esia',
          ),
        ),
      ),
      4 =>
      array (
        5 =>
        array (
          9 =>
          array (
            2 => 'Esia',
            3 => 'Esia',
          ),
        ),
      ),
      5 =>
      array (
        1 =>
        array (
          9 =>
          array (
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
      ),
    ),
    7 =>
    array (
      1 =>
      array (
        1 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            2 => 'Esia',
            3 => 'Esia',
            4 => 'Esia',
            5 => 'Esia',
          ),
        ),
        3 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
        7 =>
        array (
          4 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      2 =>
      array (
        1 =>
        array (
          8 =>
          array (
            7 => 'Esia',
          ),
          9 =>
          array (
            0 => 'Esia',
            3 => 'Esia',
            7 =>
            array (
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
        7 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
      ),
      3 =>
      array (
        5 =>
        array (
          9 =>
          array (
            8 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            9 => 'Esia',
          ),
        ),
        6 =>
        array (
          4 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      4 =>
      array (
        1 =>
        array (
          9 =>
          array (
            7 => 'Esia',
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
      ),
      5 =>
      array (
        1 =>
        array (
          8 =>
          array (
            3 => 'Esia',
            8 => 'Esia',
          ),
          9 =>
          array (
            4 => 'Esia',
            5 => 'Esia',
            7 =>
            array (
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            8 => 'Esia',
            9 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
              5 => 'Esia',
              6 => 'Esia',
            ),
          ),
        ),
      ),
      6 =>
      array (
        1 =>
        array (
          9 =>
          array (
            6 => 'Esia',
            7 => 'Esia',
            8 => 'Esia',
          ),
        ),
        2 =>
        array (
          9 =>
          array (
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
        5 =>
        array (
          9 =>
          array (
            8 => 'Esia',
          ),
        ),
      ),
      7 =>
      array (
        1 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
        7 =>
        array (
          9 =>
          array (
            9 => 'Esia',
          ),
        ),
        8 =>
        array (
          9 =>
          array (
            1 => 'Esia',
            6 => 'Esia',
            7 => 'Esia',
            8 => 'Esia',
            9 => 'Esia',
          ),
        ),
      ),
    ),
    8 =>
    array (
      1 =>
      array (
        1 => 'Telkomsel',
        2 => 'Telkomsel',
        3 => 'Telkomsel',
        4 => 'IM3',
        5 => 'IM3',
        6 => 'IM3',
        7 => 'XL',
        8 => 'XL',
        9 => 'XL',
      ),
      2 =>
      array (
        1 => 'Telkomsel',
        2 => 'Telkomsel',
        3 => 'Telkomsel',
      ),
      3 =>
      array (
        1 => 'AXIS',
        2 => 'AXIS',
        3 => 'AXIS',
        8 => 'AXIS',
      ),
      5 =>
      array (
        2 => 'Telkomsel',
        3 => 'Telkomsel',
        5 => 'IM3',
        6 => 'IM3',
        7 => 'IM3',
        8 => 'IM3',
        9 => 'XL',
      ),
      7 =>
      array (
        7 => 'XL',
        8 => 'XL',
        9 => 'XL',
      ),
      8 =>
      array (
        1 => 'Smartfren',
        2 => 'Smartfren',
        3 => 'Smartfren',
        7 => 'Smartfren',
        8 => 'Smartfren',
        9 => 'Smartfren',
      ),
      9 =>
      array (
        6 => '3',
        7 => '3',
        8 => '3',
        9 => '3',
      ),
    ),
    9 =>
    array (
      1 =>
      array (
        1 =>
        array (
          4 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
          9 =>
          array (
            9 =>
            array (
              5 => 'Esia',
              6 => 'Esia',
              7 => 'Esia',
              8 => 'Esia',
              9 => 'Esia',
            ),
          ),
        ),
      ),
      6 =>
      array (
        7 =>
        array (
          9 =>
          array (
            0 =>
            array (
              0 => 'Esia',
              1 => 'Esia',
              2 => 'Esia',
              3 => 'Esia',
              4 => 'Esia',
            ),
          ),
        ),
      ),
    ),
  ),
  63 =>
  array (
    9 =>
    array (
      0 =>
      array (
        5 => 'Globe',
        6 => 'Globe',
        7 => 'Smart',
        8 => 'Smart',
        9 => 'Smart',
      ),
      1 =>
      array (
        0 => 'Smart',
        2 => 'Smart',
        4 => 'Globe',
        5 => 'Globe',
        6 => 'Globe',
        7 => 'Globe',
        8 => 'Smart',
        9 => 'Smart',
      ),
      2 =>
      array (
        0 => 'Smart',
        1 => 'Smart',
        2 => 'Sun',
        3 => 'Sun',
        6 => 'Globe',
        7 => 'Globe',
        8 => 'Smart',
        9 => 'Smart',
      ),
      3 =>
      array (
        0 => 'Smart',
        2 => 'Sun',
        3 => 'Sun',
        5 => 'Globe',
        6 => 'Globe',
        7 => 'Globe',
        8 => 'Smart',
        9 => 'Smart',
      ),
      4 =>
      array (
        2 => 'Sun',
        3 => 'Sun',
        6 => 'Smart',
        7 => 'Smart',
        8 => 'Smart',
        9 => 'Smart',
      ),
      7 =>
      array (
        5 => 'Globe',
        6 => 'Globe',
      ),
      9 =>
      array (
        5 => 'Globe',
        9 => 'Smart',
      ),
    ),
  ),
  64 =>
  array (
    2 =>
    array (
      0 =>
      array (
        4 => 'Skinny',
      ),
      1 => 'Vodafone',
      2 => '2degrees',
      5 => 'Telecom',
      6 => 'Vodafone',
      7 => 'Telecom',
      8 => 'Vodafone',
      9 => 'TelstraClear',
    ),
  ),
  65 =>
  array (
    8 =>
    array (
      1 =>
      array (
        0 => 'M1',
        1 => 'StarHub',
        2 => 'SingTel',
        3 => 'StarHub',
        4 => 'StarHub',
        5 => 'StarHub',
        6 => 'StarHub',
        7 => 'M1',
        8 =>
        array (
          0 => 'StarHub',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'StarHub',
          4 => 'StarHub',
          5 => 'StarHub',
          6 => 'StarHub',
          7 => 'StarHub',
          8 => 'M1',
          9 => 'StarHub',
        ),
        9 =>
        array (
          0 => 'M1',
          1 => 'M1',
          2 => 'M1',
          3 => 'M1',
          4 => 'M1',
          5 => 'M1',
          6 => 'M1',
          7 => 'M1',
          8 => 'StarHub',
          9 => 'M1',
        ),
      ),
      2 =>
      array (
        0 => 'StarHub',
        1 =>
        array (
          0 => 'M1',
          1 => 'M1',
          2 => 'M1',
          3 => 'M1',
          4 => 'M1',
          5 => 'M1',
          6 => 'M1',
          7 => 'M1',
          8 => 'SingTel',
          9 => 'M1',
        ),
        2 =>
        array (
          0 => 'StarHub',
          1 => 'StarHub',
          2 => 'M1',
          3 => 'SingTel',
          4 => 'StarHub',
          5 => 'StarHub',
          6 => 'StarHub',
          7 => 'StarHub',
          8 => 'SingTel',
          9 => 'StarHub',
        ),
        3 =>
        array (
          2 => 'StarHub',
          3 => 'StarHub',
          4 => 'StarHub',
          5 => 'StarHub',
        ),
        4 => 'StarHub',
        5 => 'StarHub',
        6 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'SingTel',
          8 => 'StarHub',
          9 => 'SingTel',
        ),
        7 => 'M1',
        8 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'M1',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'SingTel',
          8 => 'M1',
          9 => 'SingTel',
        ),
        9 =>
        array (
          0 => 'StarHub',
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'StarHub',
          4 => 'StarHub',
          5 => 'StarHub',
          6 => 'StarHub',
          7 => 'StarHub',
          8 => 'StarHub',
          9 => 'SingTel',
        ),
      ),
      3 =>
      array (
        0 => 'SingTel',
        1 => 'SingTel',
        2 =>
        array (
          0 => 'M1',
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'M1',
          4 => 'M1',
          5 => 'M1',
          6 => 'M1',
          8 => 'StarHub',
          9 => 'M1',
        ),
        3 =>
        array (
          0 => 'StarHub',
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'M1',
          4 => 'StarHub',
          5 => 'StarHub',
          6 => 'StarHub',
          7 => 'StarHub',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
        4 => 'SingTel',
        5 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'StarHub',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'SingTel',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
        6 =>
        array (
          0 => 'SingTel',
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'StarHub',
          4 => 'StarHub',
          6 => 'M1',
          7 => 'StarHub',
          8 => 'M1',
          9 => 'StarHub',
        ),
        7 =>
        array (
          0 => 'StarHub',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'StarHub',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'StarHub',
          8 => 'StarHub',
          9 => 'SingTel',
        ),
        8 =>
        array (
          0 => 'StarHub',
          1 => 'SingTel',
          2 => 'M1',
          3 => 'M1',
          4 => 'StarHub',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'SingTel',
          8 => 'M1',
          9 => 'StarHub',
        ),
        9 =>
        array (
          0 => 'StarHub',
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'SingTel',
          4 => 'StarHub',
          5 => 'StarHub',
          6 => 'StarHub',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
      ),
      4 =>
      array (
        0 =>
        array (
          0 => 'StarHub',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'SingTel',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
        1 =>
        array (
          0 => 'M1',
          1 => 'SingTel',
          2 => 'M1',
          3 => 'M1',
          4 => 'M1',
          5 => 'M1',
          6 => 'M1',
          7 => 'M1',
          8 => 'M1',
          9 => 'M1',
        ),
        2 => 'SingTel',
        3 => 'SingTel',
        4 => 'M1',
        5 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          7 => 'SingTel',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
        6 =>
        array (
          0 => 'M1',
          1 => 'M1',
          2 => 'M1',
          3 => 'M1',
          4 => 'M1',
          5 => 'M1',
          6 => 'M1',
          7 => 'M1',
          8 => 'StarHub',
          9 => 'M1',
        ),
        7 =>
        array (
          8 => 'StarHub',
        ),
        8 =>
        array (
          0 => 'M1',
          4 => 'M1',
          8 => 'M1',
        ),
        9 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          8 => 'StarHub',
          9 => 'SingTel',
        ),
      ),
      5 =>
      array (
        0 =>
        array (
          0 => 'M1',
          1 => 'StarHub',
          3 => 'StarHub',
          5 => 'StarHub',
          8 => 'StarHub',
          9 => 'StarHub',
        ),
        1 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'StarHub',
          3 => 'StarHub',
          4 => 'StarHub',
          8 => 'SingTel',
          9 => 'StarHub',
        ),
        2 =>
        array (
          0 => 'StarHub',
          1 => 'StarHub',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          8 => 'StarHub',
        ),
        3 =>
        array (
          3 => 'SingTel',
          8 => 'StarHub',
          9 => 'M1',
        ),
        4 => 'M1',
      ),
    ),
    9 =>
    array (
      0 =>
      array (
        0 =>
        array (
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'StarHub',
          4 => 'StarHub',
          5 => 'StarHub',
          6 => 'StarHub',
          7 => 'StarHub',
          8 => 'StarHub',
          9 => 'StarHub',
        ),
        1 => 'SingTel',
        2 => 'StarHub',
        3 => 'SingTel',
        4 => 'M1',
        5 => 'SingTel',
        6 => 'StarHub',
        7 => 'M1',
        8 => 'SingTel',
        9 => 'M1',
      ),
      1 =>
      array (
        0 => 'StarHub',
        1 =>
        array (
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
        ),
        2 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
        ),
        3 => 'SingTel',
        4 => 'StarHub',
        5 => 'SingTel',
        6 => 'StarHub',
        7 => 'SingTel',
        8 => 'StarHub',
        9 =>
        array (
          0 => 'M1',
          1 => 'M1',
          2 => 'M1',
          3 => 'M1',
          4 => 'M1',
          5 => 'M1',
          6 => 'M1',
          7 => 'M1',
          8 => 'M1',
          9 => 'StarHub',
        ),
      ),
      2 =>
      array (
        2 => 'M1',
        3 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'StarHub',
          8 => 'StarHub',
          9 => 'StarHub',
        ),
        4 => 'StarHub',
        7 =>
        array (
          0 => 'StarHub',
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'M1',
          4 => 'M1',
          5 => 'M1',
          6 => 'M1',
          7 => 'M1',
          8 => 'M1',
          9 => 'M1',
        ),
        9 =>
        array (
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'SingTel',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
      ),
      3 =>
      array (
        2 => 'M1',
        3 =>
        array (
          4 => 'SingTel',
          5 => 'StarHub',
          6 => 'StarHub',
          7 => 'StarHub',
          8 => 'StarHub',
          9 => 'StarHub',
        ),
        4 => 'M1',
        5 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
        ),
        6 => 'M1',
        7 =>
        array (
          1 => 'SingTel',
          2 => 'SingTel',
        ),
        8 => 'StarHub',
        9 => 'SingTel',
      ),
      4 =>
      array (
        2 => 'StarHub',
        3 => 'M1',
        4 =>
        array (
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
        ),
        5 => 'StarHub',
        6 => 'SingTel',
        7 => 'M1',
        8 => 'StarHub',
        9 =>
        array (
          9 => 'StarHub',
        ),
      ),
      6 =>
      array (
        1 => 'SingTel',
        2 =>
        array (
          9 => 'SingTel',
        ),
        3 => 'SingTel',
        4 => 'SingTel',
        5 => 'SingTel',
        6 => 'SingTel',
        7 => 'SingTel',
        8 => 'M1',
        9 => 'M1',
      ),
      7 =>
      array (
        1 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'SingTel',
          4 => 'SingTel',
          5 => 'SingTel',
          6 => 'SingTel',
        ),
        2 => 'SingTel',
        3 => 'SingTel',
        4 => 'M1',
        5 => 'SingTel',
        6 => 'M1',
        7 => 'SingTel',
        8 => 'SingTel',
        9 => 'M1',
      ),
      8 =>
      array (
        0 =>
        array (
          0 => 'StarHub',
          6 => 'SingTel',
          7 => 'SingTel',
        ),
        1 =>
        array (
          0 => 'SingTel',
          1 => 'SingTel',
          2 => 'SingTel',
          3 => 'StarHub',
          4 => 'StarHub',
          5 => 'SingTel',
          6 => 'SingTel',
          7 => 'SingTel',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
        2 => 'SingTel',
        3 => 'SingTel',
        4 => 'M1',
        5 => 'StarHub',
        6 =>
        array (
          0 => 'SingTel',
          6 => 'SingTel',
          8 => 'SingTel',
          9 => 'SingTel',
        ),
        7 => 'M1',
        8 =>
        array (
          0 => 'StarHub',
          1 => 'StarHub',
          2 => 'StarHub',
          3 => 'StarHub',
          4 => 'StarHub',
          5 => 'StarHub',
          6 => 'StarHub',
          7 => 'StarHub',
          8 => 'SingTel',
          9 => 'M1',
        ),
        9 => 'SingTel',
      ),
    ),
  ),
  66 =>
  array (
    6 =>
    array (
      1 => 'AIS',
    ),
    8 =>
    array (
      0 =>
      array (
        0 => 'AIS',
        1 => 'AIS',
        2 => 'AIS',
        3 => 'True Move',
        4 => 'DTAC',
        5 => 'DTAC',
        6 => 'AIS',
      ),
      1 =>
      array (
        0 => 'AIS',
        1 => 'AIS',
        2 => 'AIS',
        3 => 'DTAC',
        4 => 'DTAC',
        5 => 'DTAC',
        6 => 'DTAC',
        7 => 'AIS',
        8 => 'AIS',
        9 => 'AIS',
      ),
      2 => 'AIS',
      3 => 'True Move',
      4 => 'AIS',
      5 => 'DTACA',
      6 => 'True Move',
      7 => 'AIS',
      8 => 'True Move',
      9 => 'DTAC',
    ),
    9 =>
    array (
      0 => 'DAAC     T',
      1 => 'DTAC',
    ),
  ),
  670 =>
  array (
    7 =>
    array (
      7 => 'Timor Telecom',
      8 => 'Timor Telecom',
    ),
  ),
  673 =>
  array (
    2 => 'DSTCom',
    7 =>
    array (
      1 => 'DSTCom',
    ),
    8 =>
    array (
      1 => 'B-Mobile',
      2 => 'B-Mobile',
      6 => 'DSTCom',
      7 => 'DSTCom',
      8 => 'DSTCom',
      9 => 'DSTCom',
    ),
  ),
  675 =>
  array (
    2 =>
    array (
      0 =>
      array (
        1 =>
        array (
          5 =>
          array (
            0 => 'bmobile/Telikom',
          ),
        ),
      ),
    ),
    7 =>
    array (
      0 => 'Digicel',
      1 => 'Digicel',
      2 => 'Digicel',
      3 => 'Digicel',
      6 => 'bmobile',
      7 =>
      array (
        5 => 'Telikom',
      ),
      9 => 'Digicel',
    ),
  ),
  676 =>
  array (
    1 =>
    array (
      5 => 'U-Call',
      6 => 'U-Call',
      7 => 'U-Call',
      8 => 'U-Call',
      9 => 'U-Call',
    ),
    4 =>
    array (
      6 => 'U-Call',
      9 => 'U-Call',
    ),
    5 =>
    array (
      3 => 'U-Call',
      4 => 'U-Call',
      5 => 'U-Call',
      6 => 'U-Call',
      7 => 'U-Call',
      8 => 'U-Call',
      9 => 'U-Call',
    ),
    6 =>
    array (
      3 => 'U-Call',
      4 => 'U-Call',
      5 => 'U-Call',
      6 => 'U-Call',
      7 => 'U-Call',
      8 => 'U-Call',
      9 => 'U-Call',
    ),
    7 =>
    array (
      5 => 'U-Call',
      6 => 'U-Call',
      7 => 'U-Call',
      8 => 'U-Call',
    ),
  ),
  677 =>
  array (
    7 =>
    array (
      0 => 'Satsol',
      1 => 'Satsol',
      4 => 'Solomon Telekom',
      5 => 'Solomon Telekom',
      6 => 'Solomon Telekom',
      7 => 'Solomon Telekom',
      8 => 'Solomon Telekom',
      9 =>
      array (
        0 => 'Solomon Telekom',
        1 => 'Solomon Telekom',
        2 => 'Solomon Telekom',
        4 => 'Solomon Telekom',
      ),
    ),
    8 =>
    array (
      4 => 'BMobile',
      5 => 'BMobile',
      6 => 'BMobile',
      7 => 'BMobile',
      8 => 'BMobile',
    ),
    9 =>
    array (
      4 => 'Smile',
      5 => 'Smile',
      6 => 'Smile',
      7 => 'Smile',
      8 => 'Smile',
      9 => 'Smile',
    ),
  ),
  678 =>
  array (
    5 =>
    array (
      3 => 'Digicel',
      4 => 'Digicel',
      5 => 'Digicel',
      6 => 'Digicel',
      7 =>
      array (
        2 => 'Digicel',
        3 => 'Digicel',
        4 => 'Digicel',
        5 => 'Digicel',
        6 => 'Digicel',
        7 => 'Digicel',
      ),
      9 => 'Digicel',
    ),
    7 =>
    array (
      0 => 'SMILE',
      1 => 'SMILE',
      3 => 'SMILE',
      4 => 'SMILE',
      5 => 'SMILE',
      6 => 'SMILE',
    ),
  ),
  679 =>
  array (
    7 => 'Digicel',
    8 =>
    array (
      4 => 'Vodafone',
      9 => 'Vodafone',
    ),
    9 => 'Vodafone',
  ),
  685 =>
  array (
    7 =>
    array (
      2 => 'Digicel',
      5 => 'Bluesky',
      7 => 'Digicel',
    ),
  ),
  686 =>
  array (
    6 => 'TSKL',
    7 => 'TSKL',
    9 => 'TSKL',
  ),
  7 =>
  array (
    7 =>
    array (
      0 =>
      array (
        1 => 'Kcell',
        2 => 'Kcell',
        5 => 'Beeline',
        8 => 'Altel',
      ),
      4 =>
      array (
        7 => 'Tele2',
      ),
      7 =>
      array (
        1 => 'Beeline',
        5 => 'Kcell',
        6 => 'Beeline',
        7 => 'Beeline',
        8 => 'Kcell',
      ),
    ),
  ),
  84 =>
  array (
    1 =>
    array (
      2 =>
      array (
        3 => 'Vinaphone',
        4 => 'Vinaphone',
        5 => 'Vinaphone',
        7 => 'Vinaphone',
        9 => 'Vinaphone',
      ),
      6 =>
      array (
        2 => 'Viettel Mobile',
      ),
      9 =>
      array (
        9 => 'G-Mobile',
      ),
    ),
    9 =>
    array (
      0 => 'MobiFone',
      1 => 'Vinaphone',
      4 => 'Vinaphone',
    ),
  ),
  852 =>
  array (
    5 =>
    array (
      1 =>
      array (
        0 => 'China Mobile',
        1 => 'New World Mobility',
        2 => 'China Mobile',
        3 => 'China Mobile',
        4 => 'PCCW MobiTe',
        6 => 'China Mobile',
        7 => 'China Mobile',
        8 => 'PCCW Mobile',
        9 => '3',
      ),
      2 =>
      array (
        1 => '1O1O / One2Free',
        3 =>
        array (
          0 => 'PCCW Mobile',
          1 => 'PCCW Mobile',
          2 => 'PCCW Mobile',
          3 => 'PCCW Mobile',
        ),
        4 => '1O1O / One2Free',
        6 => 'China Mobile',
      ),
      3 =>
      array (
        0 => 'China Mobile',
        1 => 'China Mobile',
        2 => 'PCCW Mobile',
        3 => '3',
        4 => 'China Mobile',
        6 => 'PCCW Mobile',
        7 => 'China Mobile',
        8 => 'China Unicom',
        9 => 'China Mobile',
      ),
      4 =>
      array (
        0 => 'New World Mobility',
        1 => 'PCCW Mobile',
        2 => 'China Mobile',
        3 => '1O1O / One2Free',
        4 => 'China Mobile',
        6 => '3',
        7 => '1O1O / One2Free',
        8 => 'China Mobile',
        9 => 'China Mobile',
      ),
      5 =>
      array (
        0 => 'SmarTone',
        1 => 'China Mobile',
        2 => '1O1O / One2Free',
        3 => 'China Mobile',
        4 =>
        array (
          0 => 'New World Mobility',
          1 => 'New World Mobility',
          2 => 'New World Mobility',
          3 => 'New World Mobility',
          4 => 'New World Mobility',
          5 => 'New World Mobility',
          6 => 'New World Mobility',
          7 => 'New World Mobility',
          8 => 'New World Mobility',
        ),
        6 => '3',
        7 => 'China Mobile',
        8 => 'PCCW Mobile',
        9 => 'SmarTone',
      ),
      6 =>
      array (
        0 => 'China Mobile',
        1 => 'China Mobile',
        2 => 'China Mobile',
        3 => '3',
        4 => 'China Mobile',
        6 => '3',
        8 => '1O1O / One2Free',
        9 => '3',
      ),
      9 =>
      array (
        0 =>
        array (
          0 => 'PCCW Mobile',
          1 => 'PCCW Mobile',
          2 => 'PCCW Mobile',
          3 => 'PCCW Mobile',
          4 => 'PCCW Mobile',
          5 => 'PCCW Mobile',
        ),
        1 => '1O1O / One2Free',
        2 => '1O1O / One2Free',
        3 => 'China Mobile',
        4 => 'PCCW Mobile',
        6 => '3',
        7 => '3',
        8 => 'China Mobile',
        9 => '1O1O / One2Free',
      ),
    ),
    6 =>
    array (
      0 =>
      array (
        1 => 'SmarTone',
        2 => '1O1O / One2Free',
        3 => '1O1O / One2Free',
        4 => '3',
        5 => '1O1O / One2Free',
        6 => 'China Mobile',
        7 => '3',
        8 => '3',
        9 => 'China Mobile',
      ),
      1 =>
      array (
        0 => '3',
        1 => 'SmarTone',
        2 => 'PCCW Mobile',
        3 => '1O1O / One2Free',
        4 => '1O1O / One2Free',
        5 => 'China Mobile',
        6 => '1O1O / One2Free',
        7 => '1O1O / One2Free',
        8 => 'PCCW Mobile',
        9 => '3',
      ),
      2 =>
      array (
        0 => '3',
        1 => 'China Mobile',
        2 => 'China Mobile',
        3 => 'China Mobile',
        4 => 'CM Mobile',
        5 => 'PCCW Mobile',
        7 => '3',
        8 => '1O1O / One2Free',
        9 => '1O1O / One2Free',
      ),
      3 =>
      array (
        0 => 'PCCW Mobile',
        1 => '3',
        2 => 'SmarTone',
        3 => '3',
        4 => '3',
        5 => 'China Mobile',
        7 => '1O1O / One2Free',
        8 => 'PCCW Mobile',
        9 => '1O1O / One2Free',
      ),
      4 =>
      array (
        0 => '3',
        1 => '1O1O / One2Free',
        2 => '1O1O / One2Free',
        3 => 'China Mobile',
        4 => 'PCCW Mobile',
        5 =>
        array (
          0 => 'CITIC',
          1 =>
          array (
            0 => 'CITIC',
            1 => 'CITIC',
          ),
          2 => 'CITIC',
          3 =>
          array (
            5 => 'CITIC',
            6 => 'CITIC',
            7 => 'CITIC',
            8 => 'CITIC',
            9 => 'CITIC',
          ),
          4 => 'CITIC',
          5 => 'CITIC',
          6 => 'CITIC',
          7 => 'CITIC',
          8 => 'CITIC',
          9 => 'CITIC',
        ),
        6 => 'SmarTone',
        7 => '3',
        8 => 'China Mobile',
        9 => 'PCCW Mobile',
      ),
      5 =>
      array (
        0 => '3',
        1 => 'China-Hongkong Telecom',
        2 => 'China Unicom',
        3 => '1O1O / One2Free',
        4 => '1O1O / One2Free',
        5 => 'China Unicom',
        6 => 'China Unicom',
        7 => 'China Mobile',
        8 => 'China Mobile',
        9 => '1O1O / One2Free',
      ),
      6 =>
      array (
        0 => 'PCCW Mobile',
        1 => 'China Unicom',
        2 => 'PCCW Mobile',
        3 => 'China Unicom',
        4 => 'China Mobile',
        5 => '1O1O / One2Free',
        7 => 'China Mobile',
        8 => '3',
        9 => 'PCCW Mobile',
      ),
      7 =>
      array (
        0 => 'China Mobile',
        1 => '1O1O / One2Free',
        2 => 'China Unicom',
        3 => 'China Mobile',
        4 => 'China Mobile',
        5 => '1O1O / One2Free',
        6 => 'China Mobile',
        7 => '1O1O / One2Free',
        9 => '3',
      ),
      8 =>
      array (
        0 => 'PCCW Mobile',
        1 => 'China Unicom',
        2 => '1O1O / One2Free',
        3 => 'CM Mobile',
        4 => 'China Mobile',
        5 => 'China Mobile',
        7 => 'China Mobile',
        8 => 'China Unicom',
        9 => '1O1O / One2Free',
      ),
      9 =>
      array (
        0 => '3',
        1 => 'China Mobile',
        2 => 'PCCW Mobile',
        3 => 'China Mobile',
        4 => 'China Mobile',
        5 => 'China Mobile',
        6 => 'CM Mobile',
        7 => '1O1O / One2Free',
        8 => 'CM Mobile',
        9 => 'China Mobile',
      ),
    ),
    9 =>
    array (
      0 =>
      array (
        1 => 'SmarTone',
        2 => '1O1O / One2Free',
        3 => '1O1O / One2Free',
        4 => '3',
        5 => 'CM Mobile',
        6 => 'China Mobile',
        7 => 'PCCW Mobile',
        8 => '1O1O / One2Free',
        9 => '1O1O / One2Free',
      ),
      1 =>
      array (
        0 => '1O1O / One2Free',
        2 => '3',
        3 => 'SmarTone',
        4 => 'China Mobile',
        5 => '1O1O / One2Free',
        6 => 'SmarTone',
        7 => 'SmarTone',
        8 => '1O1O / One2Free',
        9 => '1O1O / One2Free',
      ),
      2 =>
      array (
        0 => 'China Mobile',
        1 => '1O1O / One2Free',
        2 => 'SmarTone',
        3 => 'PCCW Mobile',
        4 => 'SmarTone',
        5 => '1O1O / One2Free',
        6 => '1O1O / One2Free',
        7 => 'PCCW Mobile',
        8 => '3',
      ),
      3 =>
      array (
        0 => '1O1O / One2Free',
        1 => 'SmarTone',
        2 => '3',
        3 => '1O1O / One2Free',
        4 => 'China Mobile',
        5 => '3',
        6 => '3',
        7 => '3',
        8 => 'SmarTone',
      ),
      4 =>
      array (
        0 => '1O1O / One2Free',
        1 => '3',
        2 => '3',
        3 => 'SmarTone',
        4 => 'SmarTone',
        5 => 'SmarTone',
        6 => '1O1O / One2Free',
        7 => '3',
        8 => '3',
        9 => '3',
      ),
      5 =>
      array (
        0 => '3',
        1 => 'China Mobile',
        2 => 'PCCW Mobile',
        3 => '1O1O / One2Free',
        4 => 'SmarTone',
        5 => '1O1O / One2Free',
        6 => 'China Unicom',
        7 => '3',
        8 => 'China Mobile',
      ),
      6 =>
      array (
        0 => 'China Mobile',
        1 => '1O1O / One2Free',
        2 => '1O1O / One2Free',
        3 => '3',
        4 => 'PCCW Mobile',
        5 => '1O1O / One2Free',
        6 => 'SmarTone',
        7 => '3',
        8 => 'SmarTone',
        9 => 'China-Hongkong Telecom',
      ),
      7 =>
      array (
        0 => '3',
        1 => 'China Mobile',
        2 => 'SmarTone',
        3 => 'SmarTone',
        4 => '3',
        5 => '3',
        6 => '1O1O / One2Free',
        7 => 'PCCW Mobile',
        8 => '1O1O / One2Free',
        9 => 'China Mobile',
      ),
      8 =>
      array (
        0 => 'PCCW Mobile',
        1 => '3',
        2 => '3',
        3 => '3',
        4 => 'SmarTone',
        5 => 'SmarTone',
        6 => 'SmarTone',
        7 => '1O1O / One2Free',
        8 => '1O1O / One2Free',
      ),
    ),
  ),
  855 =>
  array (
    1 =>
    array (
      0 => 'Smart',
      2 => 'Cellcard',
      4 => 'Cellcard',
      7 => 'Cellcard',
    ),
    6 =>
    array (
      0 => 'Beeline',
      6 => 'Beeline',
      7 => 'Beeline',
      8 => 'Beeline',
      9 => 'Smart',
    ),
    7 =>
    array (
      0 => 'Smart',
      7 => 'Cellcard',
      8 => 'Cellcard',
    ),
    8 =>
    array (
      6 => 'Smart',
      9 => 'Cellcard',
    ),
    9 =>
    array (
      0 => 'Beeline',
      2 => 'Cellcard',
      3 => 'Smart',
      5 => 'Cellcard',
      6 => 'Smart',
      8 => 'Smart',
    ),
  ),
  856 =>
  array (
    2 =>
    array (
      0 =>
      array (
        2 => 'ETL',
        7 => 'Beeline',
      ),
    ),
  ),
  86 =>
  array (
    1 =>
    array (
      3 =>
      array (
        0 => 'China Unicom',
        1 => 'China Unicom',
        2 => 'China Unicom',
        3 => 'China Telecom',
        4 => 'China Mobile',
        5 => 'China Mobile',
        6 => 'China Mobile',
        7 => 'China Mobile',
        8 => 'China Mobile',
        9 => 'China Mobile',
      ),
      5 =>
      array (
        0 => 'China Mobile',
        1 => 'China Mobile',
        3 => 'China Telecom',
        6 => 'China Unicom',
        7 => 'China Mobile',
        8 => 'China Mobile',
        9 => 'China Mobile',
      ),
      7 =>
      array (
        6 => 'China Unicom',
        7 => 'China Telecom',
        8 => 'China Mobile',
      ),
      8 =>
      array (
        0 => 'China Telecom',
        5 => 'China Unicom',
        6 => 'China Unicom',
        7 => 'China Mobile',
        8 => 'China Mobile',
        9 => 'China Telecom',
      ),
    ),
  ),
  880 =>
  array (
    1 =>
    array (
      1 => 'Citycell',
      5 => 'TeleTalk',
      6 => 'Beeong3G',
      7 => 'Grameenphone',
      8 => 'Robi',
      9 => 'Banglalink',
    ),
  ),
  90 =>
  array (
    5 =>
    array (
      0 => 'Aycell',
      3 => 'Turkcell',
      4 =>
      array (
        1 => 'Turkcell',
        2 => 'Turkcell',
        3 => 'Turkcell',
        4 => 'Turkcell',
        5 => 'Turkcell',
        6 => 'Turkcell',
        7 => 'Turkcell',
        8 => 'Turkcell',
        9 => 'Turkcell',
      ),
      5 => 'Aycell',
    ),
  ),
  91 =>
  array (
    7 =>
    array (
      0 =>
      array (
        4 =>
        array (
          8 => 'Tata',
          9 => 'Idea',
        ),
        5 =>
        array (
          0 => 'Telewings',
          1 => 'AirTel',
          2 => 'Idea',
          3 => 'Aircel',
          4 => 'AirTel',
          5 => 'Idea',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'Telewings',
          9 => 'Dishnet',
        ),
        6 =>
        array (
          0 => 'AirTel',
          1 => 'Reliance',
          2 => 'Aircel',
          3 => 'AirTel',
          4 => 'Vodafone',
          5 => 'Idea',
          6 => 'Vodafone',
          7 => 'Reliance',
          8 => 'Telewings',
          9 => 'Vodafone',
        ),
        7 =>
        array (
          0 => 'AirTel',
          1 => 'Dishnet Wireless',
          2 => 'Vodafone',
          3 => 'AirTel',
          4 => 'Idea',
          5 => 'Telewings',
          6 => 'Vodafone',
          7 => 'AirTel',
          8 => 'Telewings',
          9 => 'Idea',
        ),
        8 =>
        array (
          0 => 'AirTel',
          1 => 'Vodafone',
          2 => 'AirTel',
          3 => 'Idea',
          4 => 'Idea',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'Idea',
          9 => 'Idea',
        ),
        9 =>
        array (
          0 => 'Idea',
          1 => 'AirTel',
          2 => 'Idea',
          3 => 'AirTel',
          4 => 'Vodafone',
        ),
      ),
      2 =>
      array (
        0 =>
        array (
          0 => 'TATA DOCOMO',
          4 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
          6 => 'TATA DOCOMO',
          7 => 'TATA DOCOMO',
          8 => 'TATA DOCOMO',
          9 => 'TATA DOCOMO',
        ),
        5 =>
        array (
          0 => 'AirTel',
          9 => 'AirTel',
        ),
        7 =>
        array (
          5 => 'TATA DOCOMO',
          6 => 'TATA DOCOMO',
          7 => 'Aircel',
          8 => 'Aircel',
        ),
        9 =>
        array (
          3 => 'Aircel',
          8 => 'Aircel',
          9 => 'Aircel',
        ),
      ),
      3 =>
      array (
        0 =>
        array (
          1 => 'S TEL',
          2 => 'Idea',
          3 => 'Reliance',
          4 => 'Reliance',
          5 => 'Reliance',
          6 => 'Reliance',
          7 => 'Reliance',
          8 => 'Reliance',
          9 => 'Idea',
        ),
        5 =>
        array (
          0 => 'Idea',
          1 => 'Idea',
          2 => 'Idea',
          3 => 'Idea',
          4 => 'Idea',
          5 => 'VIDEOCON',
          6 => 'VIDEOCON',
          7 => 'VIDEOCON',
          8 => 'VIDEOCON',
          9 => 'Idea',
        ),
        7 =>
        array (
          3 => 'Aircel',
          6 => 'CellOne',
          7 => 'Idea',
          9 => 'Vodafone IN',
        ),
        8 =>
        array (
          0 => 'CellOne',
          1 => 'Vodafone IN',
          2 => 'CellOne',
          3 => 'Uninor',
          4 => 'Uninor',
          5 => 'Uninor',
          6 => 'Uninor',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        9 =>
        array (
          6 => 'Uninor',
          8 => 'UNITECH',
          9 => 'Aircel',
        ),
      ),
      4 =>
      array (
        0 =>
        array (
          1 => 'Aircel',
          2 => 'Aircel',
          3 => 'Aircel',
          4 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
          6 => 'Vodafone IN',
          7 => 'VODAFONE',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        1 =>
        array (
          1 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
          6 => 'TATA DOCOMO',
          7 => 'TATA DOCOMO',
          8 => 'TATA DOCOMO',
          9 => 'RELIANCE',
        ),
        2 =>
        array (
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        3 =>
        array (
          9 => 'RELIANCE',
        ),
        8 =>
        array (
          3 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        9 =>
        array (
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
      ),
      5 =>
      array (
        0 =>
        array (
          0 => 'Idea',
          1 => 'TATA DOCOMO',
          2 => 'Aircel',
          3 => 'Aircel',
          4 => 'Aircel',
          5 => 'Reliance',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        2 =>
        array (
          0 => 'RELIANCE',
        ),
        4 =>
        array (
          9 => 'Vodafone IN',
        ),
        6 =>
        array (
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'AirTel',
          9 => 'Reliance',
        ),
        7 =>
        array (
          9 => 'CellOne',
        ),
        8 =>
        array (
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        9 =>
        array (
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
      ),
      6 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'Reliance',
          2 => 'AirTel',
          7 => 'AirTel',
        ),
        2 =>
        array (
          0 => 'Reliance',
        ),
        3 =>
        array (
          1 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        5 =>
        array (
          4 => 'Idea',
        ),
        6 =>
        array (
          5 => 'Vodafone IN',
          6 => 'Reliance',
          7 => 'Reliance',
          8 => 'Reliance',
          9 => 'Reliance',
        ),
        7 =>
        array (
          6 => 'Reliance',
          7 => 'Reliance',
          9 => 'Reliance',
        ),
        8 =>
        array (
          6 => 'Aircel',
          7 => 'Aircel',
        ),
        9 =>
        array (
          6 => 'TATA DOCOMO',
          7 => 'Idea',
          8 => 'Idea',
          9 => 'Idea',
        ),
      ),
      7 =>
      array (
        0 =>
        array (
          2 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        3 =>
        array (
          5 => 'Reliance',
          6 => 'TATA DOCOMO',
          7 => 'TATA DOCOMO',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        4 =>
        array (
          2 => 'AirTel',
        ),
        6 =>
        array (
          0 => 'AirTel',
        ),
        9 =>
        array (
          5 => 'TATA DOCOMO',
          6 => 'TATA DOCOMO',
          7 => 'VODAFONE',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
      ),
      8 =>
      array (
        0 =>
        array (
          0 => 'Vodafone IN',
          7 => 'S TEL',
          8 => 'S TEL',
          9 => 'S TEL',
        ),
        1 =>
        array (
          4 => 'Reliance',
        ),
        2 =>
        array (
          7 => 'Reliance',
          8 => 'Reliance',
          9 => 'Vodafone IN',
        ),
        3 =>
        array (
          0 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'CellOne',
        ),
        4 =>
        array (
          2 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
        ),
        6 =>
        array (
          0 => 'Idea',
          9 => 'AirTel',
        ),
        7 =>
        array (
          0 => 'UNITECH',
          1 => 'UNITECH',
          2 => 'VODAFONE',
          3 => 'Vodafone IN',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Reliance',
          7 => 'Reliance',
          8 => 'Reliance',
          9 => 'Reliance',
        ),
        9 =>
        array (
          0 => 'Idea',
          1 => 'Idea',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'Uninor',
        ),
      ),
    ),
    8 =>
    array (
      0 =>
      array (
        0 =>
        array (
          0 => 'Reliance',
          1 => 'VODAFONE',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        1 =>
        array (
          0 => 'Reliance',
          1 => 'AirTel',
          2 => 'Aircel',
          3 => 'Aircel',
          4 => 'Aircel',
          5 => 'TATA DOCOMO',
          6 => 'AirTel',
          7 => 'Vodafone IN',
          8 => 'AirTel',
          9 => 'TATA DOCOMO',
        ),
        5 =>
        array (
          0 => 'TATA DOCOMO',
          1 => 'Vodafone IN',
          2 => 'Vodafone IN',
          3 => 'Vodafone IN',
          4 => 'Vodafone IN',
          5 => 'Reliance',
          6 => 'AirTel',
          7 => 'Idea',
          8 => 'Idea',
          9 => 'Idea',
        ),
        8 =>
        array (
          0 => 'Reliance',
          1 => 'Reliance',
          2 => 'Loop Mobile',
          3 => 'Aircel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'Vodafone IN',
          7 => 'TATA DOCOMO',
          8 => 'Reliance',
          9 => 'TATA DOCOMO',
        ),
        9 =>
        array (
          0 => 'TATA DOCOMO',
          1 => 'TATA DOCOMO',
          2 => 'TATA DOCOMO',
          3 => 'TATA DOCOMO',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Idea',
          7 => 'TATA DOCOMO',
          8 => 'Vodafone IN',
          9 => 'Reliance',
        ),
      ),
      1 =>
      array (
        0 =>
        array (
          0 => 'Reliance',
          1 => 'Reliance',
          2 => 'Reliance',
          3 => 'Reliance',
          4 => 'SISTEMA',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'Idea',
          9 => 'TATA DOCOMO',
        ),
        1 =>
        array (
          5 => 'UNITECH',
          6 => 'AirTel',
        ),
        2 =>
        array (
          0 => 'Idea',
          1 => 'TATA DOCOMO',
          2 => 'TATA DOCOMO',
          3 => 'TATA DOCOMO',
          4 => 'Idea',
          5 => 'TATA DOCOMO',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        3 =>
        array (
          0 => 'AirTel',
        ),
        4 =>
        array (
          0 => 'Idea',
          1 => 'Vodafone IN',
          2 => 'Vodafone IN',
          3 => 'TATA DOCOMO',
          4 => 'Reliance',
          5 => 'VODAFONE',
          6 => 'AirTel',
          7 => 'TATA DOCOMO',
          8 => 'TATA DOCOMO',
          9 => 'TATA DOCOMO',
        ),
        7 =>
        array (
          1 => 'AirTel',
          9 => 'AirTel',
        ),
        9 =>
        array (
          7 => 'AirTel',
        ),
      ),
      2 =>
      array (
        2 =>
        array (
          0 => 'AirTel',
        ),
        3 =>
        array (
          3 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
          7 => 'TATA DOCOMO',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        5 =>
        array (
          2 => 'Reliance',
        ),
        6 =>
        array (
          0 => 'Reliance',
          4 => 'Videocon Datacom',
          8 => 'VIDEOCON',
          9 => 'Videocon Datacom',
        ),
        7 =>
        array (
          0 => 'UNITECH',
          1 => 'UNITECH',
          3 => 'Uninor',
          5 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        8 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          5 => 'Aircel',
          6 => 'Aircel',
          7 => 'Reliance',
        ),
        9 =>
        array (
          0 => 'AirTel',
          1 => 'UNITECH',
          2 => 'AirTel',
          3 => 'TATA DOCOMO',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'Uninor',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
        ),
      ),
      3 =>
      array (
        0 =>
        array (
          0 => 'CellOne',
          2 => 'Reliance',
          3 => 'Reliance',
          5 => 'Reliance',
          6 => 'Reliance',
          7 => 'Reliance',
          8 => 'Idea',
        ),
        4 =>
        array (
          1 => 'Uninor',
          4 => 'Aircel',
          7 => 'Idea',
          8 => 'VODAFONE',
          9 => 'AirTel',
        ),
        7 =>
        array (
          4 => 'AirTel',
        ),
        9 =>
        array (
          0 => 'Vodafone IN',
        ),
      ),
      4 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'Uninor',
          9 => 'UNITECH',
        ),
        1 =>
        array (
          0 => 'Aircel',
        ),
        2 =>
        array (
          0 => 'AirTel',
          1 => 'Uninor',
          3 => 'UNITECH',
          7 => 'AirTel',
          8 => 'VIDEOCON',
          9 => 'RELIANCE',
        ),
        3 =>
        array (
          0 => 'Reliance',
          1 => 'Reliance',
          2 => 'SISTEMA',
          3 => 'SISTEMA',
          4 => 'SISTEMA',
          5 => 'Idea',
          6 => 'Uninor',
          7 => 'Idea',
          8 => 'TATA DOCOMO',
          9 => 'TATA DOCOMO',
        ),
        4 =>
        array (
          5 => 'Uninor',
          6 => 'TATA DOCOMO',
          7 => 'Vodafone IN',
          8 => 'RELIANCE',
          9 => 'Idea',
        ),
        5 =>
        array (
          3 => 'SISTEMA',
          9 => 'SISTEMA',
        ),
        6 =>
        array (
          0 => 'TATA DOCOMO',
          9 => 'Vodafone IN',
        ),
        8 =>
        array (
          0 => 'CellOne',
          6 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
      ),
      5 =>
      array (
        0 =>
        array (
          0 => 'CellOne',
          7 => 'Aircel',
          8 => 'Aircel',
          9 => 'Reliance',
        ),
        1 =>
        array (
          1 => 'AirTel',
        ),
        2 =>
        array (
          1 => 'AirTel',
          6 => 'Aircel',
          7 => 'AirTel',
          8 => 'VIDEOCON',
          9 => 'VIDEOCON',
        ),
        3 =>
        array (
          0 => 'Videocon Datacom',
        ),
        4 =>
        array (
          4 => 'CellOne',
          7 => 'CellOne',
        ),
        5 =>
        array (
          3 => 'Aircel',
        ),
        7 =>
        array (
          4 => 'Aircel',
          5 => 'Aircel',
        ),
        8 =>
        array (
          0 => 'CellOne',
        ),
        9 =>
        array (
          0 => 'Reliance',
          1 => 'Reliance',
          5 => 'RELIANCE',
          7 => 'RELIANCE',
        ),
      ),
      6 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'Vodafone IN',
          2 => 'TATA DOCOMO',
          3 => 'TATA DOCOMO',
          4 => 'TATA DOCOMO',
          5 => 'Idea',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'Idea',
          9 => 'Idea',
        ),
        5 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Idea',
          2 => 'Idea',
          3 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
          7 => 'Reliance',
          8 => 'AirTel',
        ),
        7 =>
        array (
          0 => 'AirTel',
          5 => 'Aircel',
          9 => 'Aircel',
        ),
        8 =>
        array (
          6 => 'Aircel',
          7 => 'Reliance',
          8 => 'Reliance',
        ),
        9 =>
        array (
          0 => 'Reliance',
          5 => 'Reliance',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'TATA DOCOMO',
        ),
      ),
      7 =>
      array (
        1 =>
        array (
          2 => 'TATA DOCOMO',
          4 => 'TATA DOCOMO',
        ),
        2 =>
        array (
          2 => 'Idea',
          6 => 'Idea',
        ),
        5 =>
        array (
          0 => 'Idea',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'Vodafone IN',
          9 => 'Aircel',
        ),
        6 =>
        array (
          0 => 'Aircel',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'RELIANCE',
          7 => 'Reliance',
          8 => 'VODAFONE',
          9 => 'AirTel',
        ),
        9 =>
        array (
          0 => 'AirTel',
          1 => 'TATA DOCOMO',
          2 => 'TATA DOCOMO',
          3 => 'TATA DOCOMO',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Aircel',
          7 => 'TATA DOCOMO',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
      ),
      8 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'Aircel',
          2 => 'Aircel',
          3 => 'Aircel',
          4 => 'Aircel',
          5 => 'Idea',
          6 => 'Vodafone IN',
          7 => 'TATA DOCOMO',
          8 => 'Idea',
          9 => 'AirTel',
        ),
        1 =>
        array (
          0 => 'RELIANCE',
          5 => 'RELIANCE',
          7 => 'Reliance',
        ),
        2 =>
        array (
          0 => 'Reliance',
          2 => 'Reliance',
          4 => 'Reliance',
          5 => 'VIDEOCON',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'VIDEOCON',
        ),
        5 =>
        array (
          3 => 'AirTel',
          8 => 'UNITECH',
          9 => 'Vodafone IN',
        ),
        6 =>
        array (
          0 => 'Vodafone IN',
          1 => 'AirTel',
          6 => 'TATA DOCOMO',
          7 => 'TATA DOCOMO',
        ),
        7 =>
        array (
          0 => 'AirTel',
          1 => 'TATA DOCOMO',
          2 => 'Idea',
          3 => 'Idea',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        8 =>
        array (
          0 => 'Reliance',
          1 => 'Reliance',
          2 => 'Reliance',
          3 => 'Aircel',
          4 => 'Vodafone IN',
          5 => 'TATA DOCOMO',
          6 => 'Vodafone IN',
          7 => 'CellOne',
          8 => 'Idea',
          9 => 'Idea',
        ),
        9 =>
        array (
          0 => 'AirTel',
          1 => 'TATA DOCOMO',
          2 => 'Aircel',
          3 => 'Reliance',
          4 => 'AirTel',
          5 => 'CellOne',
          6 => 'Aircel',
          7 => 'AirTel',
          8 => 'Aircel',
          9 => 'Reliance',
        ),
      ),
      9 =>
      array (
        0 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'TATA DOCOMO',
          5 => 'Reliance',
          6 => 'Aircel',
          7 => 'Aircel',
          8 => 'Aircel',
          9 => 'Aircel',
        ),
        2 =>
        array (
          3 => 'Uninor',
          5 => 'SISTEMA',
          6 => 'SISTEMA',
          7 => 'Reliance',
          8 => 'Reliance',
          9 => 'Reliance',
        ),
        3 =>
        array (
          0 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        4 =>
        array (
          0 => 'Vodafone IN',
          3 => 'Vodafone IN',
          6 =>
          array (
            8 => 'Aircel',
            9 => 'Aircel',
          ),
          7 =>
          array (
            0 => 'Aircel',
            8 => 'Aircel',
            9 => 'Aircel',
          ),
          8 => 'Vodafone IN',
        ),
        5 =>
        array (
          0 => 'TATA DOCOMO',
          1 => 'TATA DOCOMO',
          2 =>
          array (
            0 => 'Aircel',
            8 => 'Aircel',
            9 => 'Aircel',
          ),
          3 => 'AirTel',
          4 => 'Vodafone IN',
          5 => 'Reliance',
          6 => 'Reliance',
          7 => 'Reliance',
          8 => 'Idea',
          9 => 'Idea',
        ),
        6 =>
        array (
          0 => 'TATA DOCOMO',
          1 => 'TATA DOCOMO',
          2 => 'TATA DOCOMO',
          3 =>
          array (
            0 => 'Aircel',
            8 => 'Aircel',
            9 => 'Idea',
          ),
          4 =>
          array (
            0 => 'Idea',
            8 => 'Idea',
            9 => 'Idea',
          ),
          5 =>
          array (
            0 => 'Idea',
            8 => 'Idea',
            9 => 'Idea',
          ),
          6 =>
          array (
            0 => 'Idea',
            8 => 'Idea',
            9 => 'Idea',
          ),
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        7 =>
        array (
          0 => 'Idea',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'Aircel',
          4 => 'AirTel',
          5 => 'Idea',
          6 => 'TATA DOCOMO',
          7 => 'TATA DOCOMO',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        8 =>
        array (
          0 => 'Vodafone IN',
          1 => 'TATA DOCOMO',
          2 => 'TATA DOCOMO',
          3 => 'TATA DOCOMO',
          4 => 'TATA DOCOMO',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
      ),
    ),
    9 =>
    array (
      0 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'Idea',
        ),
        1 =>
        array (
          0 => 'Idea',
          1 => 'Idea',
          2 => 'Idea',
          3 => 'DOLPHIN',
          4 => 'Reliance',
          5 => 'Reliance',
          6 => 'Reliance',
          7 => 'Reliance',
          8 => 'Reliance',
          9 => 'Reliance',
        ),
        2 =>
        array (
          0 => 'Reliance',
          1 => 'Reliance',
          2 => 'Reliance',
          3 => 'Reliance',
          4 => 'Reliance',
          5 => 'Reliance',
          6 => 'Reliance',
          7 => 'Reliance',
          8 => 'TATA DOCOMO',
          9 => 'TATA DOCOMO',
        ),
        3 =>
        array (
          0 => 'TATA DOCOMO',
          1 => 'TATA DOCOMO',
          2 => 'TATA DOCOMO',
          3 => 'TATA DOCOMO',
          4 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
          6 => 'TATA DOCOMO',
          7 => 'TATA DOCOMO',
          8 => 'TATA DOCOMO',
          9 => 'TATA DOCOMO',
        ),
        4 =>
        array (
          0 => 'TATA DOCOMO',
          1 => 'TATA DOCOMO',
          2 => 'TATA DOCOMO',
          3 => 'TATA DOCOMO',
          4 => 'TATA DOCOMO',
          5 => 'TATA DOCOMO',
          6 => 'TATA DOCOMO',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        5 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Vodafone IN',
          2 => 'Vodafone IN',
          3 => 'UNITECH',
          4 => 'UNITECH',
          5 => 'UNITECH',
          6 => 'UNITECH',
          7 => 'UNITECH',
          8 => 'Uninor',
          9 => 'Uninor',
        ),
        6 =>
        array (
          0 => 'Uninor',
          1 => 'Uninor',
          2 => 'Uninor',
          3 => 'VIDEOCON',
          4 => 'Videocon Datacom',
          5 => 'VIDEOCON',
          6 => 'VIDEOCON',
          7 => 'Videocon Datacom',
          8 => 'VIDEOCON',
          9 => 'VIDEOCON',
        ),
        7 =>
        array (
          0 => 'VIDEOCON',
          1 => 'VIDEOCON',
          2 => 'VIDEOCON',
          3 => 'VIDEOCON',
          4 => 'Videocon Datacom',
          5 => 'VIDEOCON',
          6 => 'VIDEOCON',
          7 => 'VIDEOCON',
          8 => 'VIDEOCON',
          9 => 'VIDEOCON',
        ),
        8 =>
        array (
          0 => 'VIDEOCON',
          1 => 'VIDEOCON',
          2 => 'VIDEOCON',
          3 => 'VIDEOCON',
          4 => 'Uninor',
          5 => 'Idea',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'Idea',
          9 => 'Idea',
        ),
        9 =>
        array (
          0 => 'Idea',
          1 => 'Idea',
          2 => 'Idea',
          3 => 'Idea',
          4 => 'Aircel',
          5 => 'Aircel',
          6 => 'AirTel',
          7 => 'Aircel',
          8 => 'Reliance',
          9 => 'Vodafone IN',
        ),
      ),
      1 =>
      array (
        0 =>
        array (
          0 => 'Loop Mobile',
          1 => 'Loop Mobile',
          2 => 'Loop Mobile',
          3 => 'Loop Mobile',
          4 => 'Loop Mobile',
          5 => 'Loop Mobile',
          6 => 'Loop Mobile',
          7 => 'Loop Mobile',
          8 => 'Loop Mobile',
          9 => 'Loop Mobile',
        ),
        1 =>
        array (
          0 => 'Loop Mobile',
          1 => 'Loop Mobile',
          2 => 'Loop Mobile',
          3 => 'Loop Mobile',
          4 => 'Loop Mobile',
          5 => 'Loop Mobile',
          6 => 'Loop Mobile',
          7 => 'Loop Mobile',
          8 => 'Loop Mobile',
          9 => 'Loop Mobile',
        ),
        2 =>
        array (
          0 => 'Loop Mobile',
          1 => 'Uninor',
          2 => 'UNITECH',
          3 => 'UNITECH',
          4 => 'UNITECH',
          5 => 'UNITECH',
          6 => 'Uninor',
          7 => 'S Tel',
          8 => 'S TEL',
          9 => 'S TEL',
        ),
        3 =>
        array (
          0 => 'S TEL',
          1 => 'S TEL',
          2 => 'S TEL',
          3 => 'SISTEMA',
          4 => 'SISTEMA',
          5 => 'SISTEMA',
          6 => 'SISTEMA',
          7 => 'SISTEMA',
          8 => 'SISTEMA',
          9 => 'SISTEMA',
        ),
        4 =>
        array (
          0 => 'SISTEMA',
          1 => 'SISTEMA',
          2 => 'SISTEMA',
          3 => 'SISTEMA',
          4 => 'SISTEMA',
          5 => 'SISTEMA',
          6 => 'SISTEMA',
          7 => 'SISTEMA',
          8 => 'SISTEMA',
          9 => 'SISTEMA',
        ),
        5 =>
        array (
          0 => 'SISTEMA',
          1 => 'SISTEMA',
          2 => 'SISTEMA',
          3 => 'SISTEMA',
          4 => 'Idea',
          5 => 'Idea',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        6 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Vodafone IN',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'Idea',
          5 => 'Idea',
          6 => 'AirTel',
          7 => 'Vodafone IN',
        ),
        7 =>
        array (
          1 => 'UNITECH',
          2 => 'UNITECH',
          3 => 'Uninor',
          4 => 'UNITECH',
          5 => 'Uninor',
          6 => 'Vodafone IN',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        8 =>
        array (
          0 => 'BSNL',
          1 => 'BSNL',
          2 => 'BSNL',
          3 => 'BSNL',
          4 => 'BSNL',
          5 => 'BSNL',
          6 => 'BSNL',
          7 => 'BSNL',
          8 => 'BSNL',
          9 => 'BSNL',
        ),
        9 =>
        array (
          0 => 'BSNL',
          1 => 'BSNL',
          2 => 'BSNL',
          3 => 'BSNL',
          4 => 'BSNL',
          5 => 'BSNL',
          6 => 'BSNL',
          7 => 'BSNL',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
      ),
      2 =>
      array (
        0 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        1 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        2 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        3 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        4 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        5 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        6 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 =>
          array (
            0 => 'TATA DOCOMO',
            1 => 'TATA DOCOMO',
            2 => 'TATA DOCOMO',
            3 => 'TATA DOCOMO',
            4 => 'TATA DOCOMO',
            5 => 'TATA DOCOMO',
            6 => 'TATA DOCOMO',
            7 => 'TATA DOCOMO',
            8 => 'TATA DOCOMO',
            9 => 'TATA DOCOMO',
          ),
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        7 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        8 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
        9 =>
        array (
          0 => 'TATA',
          1 => 'TATA',
          2 => 'TATA',
          3 => 'TATA',
          4 => 'TATA',
          5 => 'TATA',
          6 => 'TATA',
          7 => 'TATA',
          8 => 'TATA',
          9 => 'TATA',
        ),
      ),
      3 =>
      array (
        0 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        1 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        2 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        3 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        4 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        5 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        6 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        7 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        8 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
        9 =>
        array (
          0 => 'RELIANCE',
          1 => 'RELIANCE',
          2 => 'RELIANCE',
          3 => 'RELIANCE',
          4 => 'RELIANCE',
          5 => 'RELIANCE',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'RELIANCE',
          9 => 'RELIANCE',
        ),
      ),
      4 =>
      array (
        0 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        1 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        2 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        3 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        4 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        5 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        6 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 =>
          array (
            0 => 'CellOne',
            1 => 'CellOne',
            2 => 'CellOne',
            3 => 'CellOne',
            4 => 'CellOne',
            5 => 'CellOne',
            6 => 'CellOne',
            7 => 'CellOne',
            8 => 'CellOne',
            9 => 'CellOne',
          ),
          9 => 'CellOne',
        ),
        7 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 =>
          array (
            0 => 'CellOne',
            1 => 'CellOne',
            2 => 'CellOne',
            3 => 'CellOne',
            4 => 'CellOne',
            5 => 'CellOne',
            6 => 'CellOne',
            7 => 'CellOne',
            8 => 'CellOne',
            9 => 'CellOne',
          ),
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        8 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
        9 =>
        array (
          0 => 'CellOne',
          1 => 'CellOne',
          2 => 'CellOne',
          3 => 'CellOne',
          4 => 'CellOne',
          5 => 'CellOne',
          6 => 'CellOne',
          7 => 'CellOne',
          8 => 'CellOne',
          9 => 'CellOne',
        ),
      ),
      5 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'Aircel',
          5 => 'Idea',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'Reliance',
          9 => 'Reliance',
        ),
        1 =>
        array (
          0 => 'Reliance',
          1 => 'ETISALAT',
          2 => 'Etisalat DB(cheers)',
          3 => 'ETISALAT',
          4 => 'ETISALAT',
          5 => 'Etisalat DB(cheers)',
          6 => 'Etisalat DB(cheers)',
          7 => 'ETISALAT',
          8 => 'ETISALAT',
          9 => 'ETISALAT',
        ),
        2 =>
        array (
          0 => 'ETISALAT',
          1 => 'ETISALAT',
          2 => 'ETISALAT',
          3 => 'ETISALAT',
          4 => 'Aircel',
          5 => 'Idea',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'Reliance',
          9 => 'Reliance',
        ),
        3 =>
        array (
          0 =>
          array (
            0 => 'CellOne',
            1 => 'CellOne',
            2 => 'CellOne',
            3 => 'CellOne',
            4 => 'CellOne',
            5 => 'CellOne',
            6 => 'CellOne',
            7 => 'CellOne',
            8 => 'CellOne',
            9 => 'CellOne',
          ),
          1 =>
          array (
            0 => 'CellOne',
            1 => 'CellOne',
            2 => 'CellOne',
            3 => 'CellOne',
            4 => 'CellOne',
            5 => 'CellOne',
            6 => 'CellOne',
            7 => 'CellOne',
            8 => 'CellOne',
            9 => 'CellOne',
          ),
          2 => 'CellOne',
          3 => 'Reliance',
          4 => 'Vodafone IN',
          5 => 'AirTel',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        4 =>
        array (
          0 => 'Idea',
          1 => 'Reliance',
          2 => 'Idea',
          3 => 'Reliance',
          4 => 'Idea',
          5 => 'Vodafone IN',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'Reliance',
          9 => 'Vodafone IN',
        ),
        5 =>
        array (
          0 => 'AirTel',
          1 => 'Aircel',
          2 => 'Idea',
          3 => 'Idea',
          4 => 'Vodafone IN',
          5 => 'Reliance',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        6 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'Idea',
          3 => 'Aircel',
          4 => 'VODAFONE',
          5 => 'Vodafone IN',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'Idea',
          9 => 'Reliance',
        ),
        7 =>
        array (
          0 => 'Vodafone IN',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'Idea',
          5 => 'Idea',
          6 => 'Idea',
          7 => 'Aircel',
          8 => 'Aircel',
          9 => 'Reliance',
        ),
        8 =>
        array (
          0 => 'Reliance',
          1 => 'Vodafone IN',
          2 => 'Vodafone IN',
          3 => 'Vodafone IN',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'ETISALAT',
          9 => 'AirTel',
        ),
        9 =>
        array (
          0 => 'Reliance',
          1 => 'AirTel',
          2 => 'Idea',
          3 => 'VODAFONE',
          4 => 'Idea',
          5 => 'Reliance',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'Idea',
          9 => 'Etisalat DB(cheers)',
        ),
      ),
      6 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'Idea',
          4 => 'Idea',
          5 => 'Idea',
          6 => 'RELIANCE',
          7 => 'RELIANCE',
          8 => 'Reliance',
          9 => 'VODAFONE',
        ),
        1 =>
        array (
          0 => 'Vodafone IN',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'Aircel',
          4 => 'Aircel',
          5 => 'Aircel',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'AirTel',
          9 => 'Vodafone IN',
        ),
        2 =>
        array (
          0 => 'Vodafone IN',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'Idea',
          4 => 'Idea',
          5 => 'Reliance',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'AirTel',
        ),
        3 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'Vodafone IN',
          8 => 'Vodafone IN',
          9 => 'Idea',
        ),
        4 =>
        array (
          0 => 'Idea',
          1 => 'Reliance',
          2 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Vodafone IN',
          7 => 'VODAFONE',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        5 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'VIDEOCON',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'Aircel',
          9 => 'Aircel',
        ),
        6 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'Loop Mobile',
          5 => 'AirTel',
          6 => 'Idea',
          7 => 'SISTEMA',
          8 => 'AirTel',
          9 => 'Idea',
        ),
        7 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Vodafone IN',
          2 => 'Vodafone IN',
          3 => 'Vodafone IN',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        8 =>
        array (
          0 => 'AirTel',
          1 => 'Reliance',
          2 => 'BSNL',
          3 => 'BSNL',
          4 => 'BSNL',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'Vodafone IN',
          8 => 'Aircel',
          9 => 'Idea',
        ),
        9 =>
        array (
          0 => 'Idea',
          1 => 'Reliance',
          2 => 'Reliance',
          3 => 'Reliance',
          4 => 'Idea',
          5 => 'AirTel',
          6 => 'Reliance',
          7 => 'Aircel',
          8 => 'Aircel',
          9 => 'Reliance',
        ),
      ),
      7 =>
      array (
        0 =>
        array (
          0 => 'Aircel',
          1 => 'AirTel',
          2 => 'Idea',
          3 => 'Vodafone IN',
          4 => 'AirTel',
          5 => 'Idea',
          6 => 'Vodafone IN',
          7 => 'Reliance',
          8 => 'Idea',
          9 => 'Vodafone IN',
        ),
        1 =>
        array (
          0 => 'Aircel',
          1 => 'Vodafone IN',
          2 => 'Vodafone IN',
          3 => 'Vodafone IN',
          4 => 'Idea',
          5 => 'Aircel',
          6 => 'Aircel',
          7 => 'AirTel',
          8 => 'Idea',
          9 => 'Vodafone IN',
        ),
        2 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Vodafone IN',
          2 => 'Aircel',
          3 => 'Idea',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Idea',
          9 => 'AirTel',
        ),
        3 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'VODAFONE',
          3 => 'VODAFONE',
          4 => 'VODAFONE',
          5 => 'VODAFONE',
          6 => 'Vodafone IN',
          7 => 'Idea',
          8 => 'Aircel',
          9 => 'Vodafone IN',
        ),
        4 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'Vodafone IN',
          3 => 'Idea',
          4 => 'Idea',
          5 => 'Vodafone IN',
          6 => 'AirTel',
          7 => 'Idea',
          8 => 'AirTel',
          9 => 'Reliance',
        ),
        5 =>
        array (
          0 => 'Aircel',
          1 => 'Vodafone IN',
          2 => 'AirTel',
          3 => 'Idea',
          4 => 'Idea',
          5 => 'AirTel',
          6 => 'Idea',
          7 => 'DOLPHIN',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        6 =>
        array (
          0 => 'AirTel',
          1 => 'Vodafone IN',
          2 => 'Aircel',
          3 => 'Idea',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'AirTel',
          7 => 'Idea',
          8 => 'Aircel',
          9 => 'Vodafone IN',
        ),
        7 =>
        array (
          0 => 'Reliance',
          1 => 'AirTel',
          2 => 'Vodafone IN',
          3 => 'Loop Mobile',
          4 => 'Vodafone IN',
          5 => 'VODAFONE',
          6 => 'Vodafone IN',
          7 => 'AirTel',
          8 => 'Reliance',
          9 => 'AirTel',
        ),
        8 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Idea',
          2 => 'Aircel',
          3 => 'Vodafone IN',
          4 => 'AirTel',
          5 => 'Idea',
          6 => 'Vodafone IN',
          7 => 'Vodafone IN',
          8 => 'Aircel',
          9 => 'AirTel',
        ),
        9 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'Vodafone IN',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'Idea',
          6 => 'Vodafone IN',
          7 => 'AirTel',
          8 => 'Reliance',
          9 => 'AirTel',
        ),
      ),
      8 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'Aircel',
          3 => 'Aircel',
          4 => 'Aircel',
          5 => 'AirTel',
          6 => 'Aircel',
          7 => 'Aircel',
          8 => 'Aircel',
          9 => 'Aircel',
        ),
        1 =>
        array (
          0 => 'AirTel',
          1 => 'Vodafone IN',
          2 => 'Idea',
          3 => 'Vodafone IN',
          4 => 'Idea',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'Reliance',
          8 => 'AirTel',
          9 => 'Vodafone IN',
        ),
        2 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Loop Mobile',
          2 => 'Idea',
          3 => 'Vodafone IN',
          4 => 'Idea',
          5 => 'Vodafone IN',
          6 => 'Idea',
          7 => 'Reliance',
          8 => 'Vodafone IN',
          9 => 'AirTel',
        ),
        3 =>
        array (
          0 => 'Vodafone IN',
          1 => 'AirTel',
          2 => 'Reliance',
          3 => 'Vodafone IN',
          5 => 'Reliance',
          6 => 'Vodafone IN',
          7 => 'Idea',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        4 =>
        array (
          0 => 'AirTel',
          1 => 'Aircel',
          2 => 'Aircel',
          3 => 'Vodafone IN',
          4 => 'Idea',
          5 => 'AirTel',
          6 => 'Vodafone IN',
          7 => 'Idea',
          8 => 'Idea',
          9 => 'AirTel',
        ),
        5 =>
        array (
          0 => 'Idea',
          1 => 'Aircel',
          2 => 'Aircel',
          3 => 'Aircel',
          4 => 'Aircel',
          5 => 'Idea',
          6 => 'Aircel',
          7 => 'Aircel',
          8 => 'Aircel',
          9 => 'Aircel',
        ),
        6 =>
        array (
          0 => 'AirTel',
          1 => 'Reliance',
          2 => 'AirTel',
          3 => 'Reliance',
          4 => 'Reliance',
          5 => 'Aircel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'DOLPHIN',
          9 => 'DOLPHIN',
        ),
        7 =>
        array (
          0 => 'Loop Mobile',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'Vodafone IN',
          4 => 'Vodafone IN',
          5 => 'SISTEMA',
          6 => 'AirTel',
          7 => 'VIDEOCON',
          8 => 'AirTel',
          9 => 'Vodafone IN',
        ),
        8 =>
        array (
          0 => 'AirTel',
          1 => 'Idea',
          2 => 'Idea',
          3 => 'Reliance',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Vodafone IN',
          7 => 'Idea',
          8 => 'Vodafone IN',
          9 => 'Idea',
        ),
        9 =>
        array (
          0 => 'AirTel',
          1 => 'Idea',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'Vodafone IN',
        ),
      ),
      9 =>
      array (
        0 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'Idea',
          5 => 'Reliance',
          6 => 'AirTel',
          7 => 'Reliance',
          8 => 'AirTel',
          9 => 'Vodafone IN',
        ),
        1 =>
        array (
          0 => 'AirTel',
          1 => 'Idea',
          2 => 'Idea',
          3 => 'Vodafone IN',
          4 => 'Idea',
          5 => 'AirTel',
          6 => 'Vodafone IN',
          7 => 'Idea',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        2 =>
        array (
          0 => 'Vodafone IN',
          1 => 'Idea',
          2 => 'Idea',
          3 => 'Vodafone IN',
          4 => 'Idea',
          5 => 'Vodafone IN',
          6 => 'Idea',
          7 => 'Idea',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        3 =>
        array (
          0 => 'Vodafone IN',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        4 =>
        array (
          0 => 'AirTel',
          1 => 'Aircel',
          2 => 'Aircel',
          3 => 'Vodafone IN',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'Vodafone IN',
          7 => 'Idea',
          8 => 'Idea',
          9 => 'AirTel',
        ),
        5 =>
        array (
          0 => 'AirTel',
          1 => 'Idea',
          2 => 'AirTel',
          3 => 'Vodafone IN',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'AirTel',
        ),
        6 =>
        array (
          0 => 'AirTel',
          1 => 'Idea',
          2 => 'Vodafone IN',
          3 => 'AirTel',
          4 => 'Idea',
          5 => 'Aircel',
          6 => 'Vodafone IN',
          7 => 'AirTel',
          8 => 'DOLPHIN',
          9 => 'DOLPHIN',
        ),
        7 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'AirTel',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'Aircel',
          7 => 'Idea',
          8 => 'Vodafone IN',
          9 => 'Vodafone IN',
        ),
        8 =>
        array (
          0 => 'AirTel',
          1 => 'AirTel',
          2 => 'Vodafone IN',
          3 => 'Vodafone IN',
          4 => 'Vodafone IN',
          5 => 'Vodafone IN',
          6 => 'Vodafone IN',
          7 => 'AirTel',
          8 => 'Vodafone IN',
          9 => 'AirTel',
        ),
        9 =>
        array (
          0 => 'Idea',
          1 => 'Vodafone IN',
          2 => 'Idea',
          3 => 'AirTel',
          4 => 'AirTel',
          5 => 'AirTel',
          6 => 'AirTel',
          7 => 'AirTel',
          8 => 'AirTel',
          9 => 'Vodafone IN',
        ),
      ),
    ),
  ),
  92 =>
  array (
    3 =>
    array (
      0 =>
      array (
        0 => 'Mobilink',
        1 => 'Mobilink',
        2 => 'Mobilink',
        3 => 'Mobilink',
        4 => 'Mobilink',
        5 => 'Mobilink',
        6 => 'Mobilink',
        7 => 'Mobilink',
        8 => 'Mobilink',
        9 => 'Mobilink',
      ),
      1 =>
      array (
        0 => 'Zong',
        1 => 'Zong',
        2 => 'Zong',
        3 => 'Zong',
        4 => 'Zong',
        5 => 'Zong',
      ),
      2 => 'Warid',
      3 =>
      array (
        0 => 'Ufone',
        1 => 'Ufone',
        2 => 'Ufone',
        3 => 'Ufone',
        4 => 'Ufone',
        5 => 'Ufone',
        6 => 'Ufone',
        7 => 'Ufone',
      ),
      4 =>
      array (
        0 => 'Telenor',
        1 => 'Telenor',
        2 => 'Telenor',
        3 => 'Telenor',
        4 => 'Telenor',
        5 => 'Telenor',
        6 => 'Telenor',
        7 => 'Telenor',
      ),
    ),
  ),
  93 =>
  array (
    7 =>
    array (
      0 => 'AWCC',
      2 =>
      array (
        9 => 'Roshan',
      ),
      6 => 'MTN',
      7 =>
      array (
        2 => 'MTN',
        3 => 'MTN',
        4 => 'MTN',
        5 => 'MTN',
        6 => 'MTN',
        7 => 'MTN',
        8 => 'MTN',
        9 => 'MTN',
      ),
      8 => 'Etisalat',
      9 => 'Roshan',
    ),
  ),
  94 =>
  array (
    1 =>
    array (
      1 =>
      array (
        7 => 'Dialog',
      ),
    ),
    7 =>
    array (
      1 => 'Mobitel',
      2 => 'Etisalat',
      5 => 'Airtel',
      7 => 'Dialog',
    ),
  ),
  95 =>
  array (
    9 =>
    array (
      7 =>
      array (
        9 => 'Telenor',
      ),
      9 =>
      array (
        7 => 'Ooredoo',
      ),
    ),
  ),
  960 =>
  array (
    7 => 'Dhiraagu',
    9 => 'Wataniya',
  ),
  961 =>
  array (
    7 =>
    array (
      8 =>
      array (
        8 => 'MTC Touch',
        9 =>
        array (
          0 => 'MTC Touch',
          1 => 'MTC Touch',
          2 => 'MTC Touch',
          3 => 'MTC Touch',
          4 => 'MTC Touch',
        ),
      ),
      9 =>
      array (
        1 => 'Alfa',
        3 => 'Alfa',
      ),
    ),
  ),
  962 =>
  array (
    7 =>
    array (
      4 => 'XPress JO',
      7 => 'Orange',
      8 => 'Umniah',
      9 => 'Zain JO',
    ),
  ),
  964 =>
  array (
    7 =>
    array (
      5 => 'Korek',
      6 => 'Omnnea',
      7 => 'Asia Cell',
      8 => 'Zain',
      9 => 'Zain',
    ),
  ),
  965 =>
  array (
    5 => 'VIVA',
    6 => 'Ooredoo',
    9 => 'Zain',
  ),
  966 =>
  array (
    5 =>
    array (
      0 => 'Al Jawal (STC)',
      3 => 'Al Jawal (STC)',
      4 => 'Mobily',
      5 => 'Al Jawal (STC)',
      6 => 'Mobily',
      7 =>
      array (
        0 => 'Virgin',
        1 => 'Virgin',
        2 => 'Virgin',
        6 => 'Lebara',
        7 => 'Lebara',
        8 => 'Lebara',
      ),
      8 => 'Zain',
      9 => 'Zain',
    ),
  ),
  967 =>
  array (
    7 =>
    array (
      0 => 'Y',
      1 => 'SabaFon',
      3 => 'MTN',
      7 => 'Yemen Mobile',
    ),
  ),
  968 =>
  array (
    9 =>
    array (
      4 => 'Nawras',
      5 => 'Nawras',
      6 => 'Nawras',
      7 => 'Nawras',
    ),
  ),
  970 =>
  array (
    5 =>
    array (
      6 => 'Wataniya',
      9 => 'Palestine Cellular Communications',
    ),
  ),
  971 =>
  array (
    5 =>
    array (
      0 => 'Etisalat',
      2 => 'du',
      5 => 'du',
      6 => 'Etisalat',
    ),
  ),
  972 =>
  array (
    5 =>
    array (
      0 => 'Pelephone',
      2 => 'Cellcom',
      3 => 'Mirs - Hot Mobile',
      4 => 'Orange',
      5 =>
      array (
        0 =>
        array (
          1 => 'Beezz',
        ),
        2 =>
        array (
          2 => 'Home Cellular',
          3 => 'Home Cellular',
        ),
        6 =>
        array (
          6 => 'Rami Levy',
          7 => 'Rami Levy',
        ),
        8 =>
        array (
          8 => 'Alon',
          9 => 'Alon',
        ),
        9 =>
        array (
          7 => 'Azi Communications',
          8 => 'Azi Communications',
          9 => 'Azi Communications',
        ),
      ),
      6 => 'Wataniya',
      7 => 'Mirs - Hot Mobile',
      8 => 'Golan Telecom',
      9 => 'Jawwal',
    ),
  ),
  973 =>
  array (
    3 =>
    array (
      1 => 'Royal Court',
      2 => 'Batelco',
      3 => 'VIVA',
      4 => 'VIVA',
      5 => 'VIVA',
      6 => 'zain BH',
      7 => 'zain BH',
      8 => 'Batelco',
      9 => 'Batelco',
    ),
    6 =>
    array (
      3 => 'VIVA',
      6 =>
      array (
        3 => 'zain BH',
        6 => 'zain BH',
        9 => 'zain BH',
      ),
    ),
  ),
  974 =>
  array (
    3 =>
    array (
      3 => 'ooredoo',
    ),
    5 =>
    array (
      5 => 'ooredoo',
    ),
    6 =>
    array (
      6 => 'ooredoo',
    ),
    7 =>
    array (
      7 => 'Vodafone',
    ),
  ),
  975 =>
  array (
    1 =>
    array (
      7 => 'B-Mobile of Bhutan Telecom',
    ),
  ),
  977 =>
  array (
    9 =>
    array (
      8 => 'Namaste / NT Mobile',
    ),
  ),
  98 =>
  array (
    9 =>
    array (
      0 => 'Irancell',
      1 => 'IR-MCI',
      2 => 'Rightel',
      3 =>
      array (
        0 => 'Irancell',
        1 => 'MTCE',
        2 => 'Taliya',
        3 => 'Irancell',
        4 => 'TKC',
        5 => 'Irancell',
        6 => 'Irancell',
        7 => 'Irancell',
        8 => 'Irancell',
        9 => 'Irancell',
      ),
    ),
  ),
  992 =>
  array (
    5 =>
    array (
      0 =>
      array (
        1 => 'Tcell',
        2 => 'Tcell',
      ),
    ),
    9 =>
    array (
      0 => 'Megafon',
      1 =>
      array (
        7 => 'Tacom',
        8 => 'Babilon-M',
        9 => 'Tacom',
      ),
      2 =>
      array (
        7 => 'Tcell',
      ),
      3 => 'Tcell',
      8 => 'Babilon-M',
    ),
  ),
  993 =>
  array (
    6 =>
    array (
      5 => 'TM-Cell',
      6 => 'MTS (BARASH Communication)',
      7 => 'MTS (BARASH Communication)',
    ),
  ),
  994 =>
  array (
    4 =>
    array (
      0 => 'FONEX',
    ),
    5 =>
    array (
      0 => 'Azercell',
      1 => 'Azercell',
      5 => 'Bakcell',
    ),
    7 =>
    array (
      0 => 'Nar Mobile',
      7 => 'Nar Mobile',
    ),
  ),
  995 =>
  array (
    5 =>
    array (
      0 => 'MagtiCom',
      1 => 'MagtiCom',
      4 => 'MagtiCom',
      5 => 'Geocell',
      7 => 'Geocell',
      8 => 'Geocell',
    ),
    6 =>
    array (
      2 => 'Geocell',
    ),
    7 =>
    array (
      0 => 'Silknet',
      1 => 'Beeline',
      7 => 'Geocell',
      9 => 'Beeline',
    ),
    9 =>
    array (
      0 => 'MagtiCom',
      1 => 'MagtiCom',
      2 => 'Beeline',
      3 => 'Geocell',
      5 => 'MagtiCom',
      6 => 'MagtiCom',
      7 => 'Beeline',
      8 => 'MagtiCom',
      9 => 'MagtiCom',
    ),
  ),
  996 =>
  array (
    2 =>
    array (
      0 => 'Aktel',
    ),
    5 =>
    array (
      1 => 'Katel',
      4 => 'Aktel',
      5 => 'ALFA Telecom',
      6 => 'Winline',
      7 => 'Sotel',
    ),
    7 =>
    array (
      0 => 'Nur Telecom',
      7 => 'Sky mobile',
    ),
  ),
  998 =>
  array (
    6 =>
    array (
      1 => 'MTS',
      2 => 'MTS',
      5 => 'MTS',
      6 => 'MTS',
      7 => 'MTS',
      9 => 'MTS',
    ),
    7 =>
    array (
      0 => 'MTS',
      2 => 'MTS',
      3 => 'MTS',
      4 => 'MTS',
      5 => 'MTS',
      6 => 'MTS',
      9 => 'MTS',
    ),
    9 =>
    array (
      0 => 'Beeline',
      1 => 'Beeline',
      2 => 'MTS',
      3 => 'Ucell',
      4 => 'Ucell',
      7 => 'MTS',
    ),
  ),
);
}
