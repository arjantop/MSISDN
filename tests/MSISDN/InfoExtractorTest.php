<?php

class InfoExtractorTest extends PHPUnit_Framework_TestCase
{
    private $extractor;

    public function setUp()
    {
        $this->extractor = new \MSISDN\Country\InfoExtractor;
    }

    public function testValidDialingCodes()
    {
        $this->assertCountryInfo($this->extractor->extractCountryInfo("386"), "386", "SI");
        $this->assertCountryInfo($this->extractor->extractCountryInfo("1"), "1", "US");
        $this->assertCountryInfo($this->extractor->extractCountryInfo("7"), "7", "RU");
        $this->assertCountryInfo($this->extractor->extractCountryInfo("43"), "43", "AT");
        $this->assertCountryInfo($this->extractor->extractCountryInfo("61"), "61", "AU");
        $this->assertCountryInfo($this->extractor->extractCountryInfo("226"), "226", "BF");
    }

    public function testExtractsOnlyDialingCodeFromLongString()
    {
        $number = "2321234567890";
        $this->assertCountryInfo($this->extractor->extractCountryInfo($number), "232", "SL");
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExtractThrowsExceptionOnUnrecognizedCountryCode()
    {
        $this->extractor->extractCountryInfo("292");
    }

    private function assertCountryInfo($info, $dialingCode, $countryId)
    {
        $this->assertEquals($info->getDialingCode(), $dialingCode);
        $this->assertEquals($info->getIdentifier(), $countryId);
    }
}
