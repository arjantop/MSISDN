<?php

class ParserTest extends PHPUnit_Framework_TestCase
{
    private $parser;

    public function setUp()
    {
        $this->parser = new \MSISDN\Parser();
    }

    public function testParsesSlovenianNumber()
    {
        $info = $this->parser->parseNumber('+38640123456');
        $this->assertEquals('386', $info->getCountryDialingCode());
        $this->assertEquals('40123456', $info->getSubscriberNumber());
        $this->assertEquals('SI', $info->getCountryIdentifier());
        $this->assertEquals('Si.mobil', $info->getCarrier());
    }

    public function testParseNanpNumber()
    {
        $info = $this->parser->parseNumber('+16842521234');
        $this->assertEquals('1', $info->getCountryDialingCode());
        $this->assertEquals('6842521234', $info->getSubscriberNumber());
        $this->assertEquals('US', $info->getCountryIdentifier());
        $this->assertEquals('Blue Sky', $info->getCarrier());
    }

    public function testParseSouthAfricaNumber()
    {
        $info = $this->parser->parseNumber('+27761234567');
        $this->assertEquals('27', $info->getCountryDialingCode());
        $this->assertEquals('761234567', $info->getSubscriberNumber());
        $this->assertEquals('ZA', $info->getCountryIdentifier());
        $this->assertEquals('Vodacom', $info->getCarrier());
    }

    public function testParseWithUnknownCarrier()
    {
        $info = $this->parser->parseNumber('+271234567');
        $this->assertNull($info->getCarrier());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNumberWithoutPlusPrefix()
    {
        $info = $this->parser->parseNumber('123456');
    }

    /**
     * @expectedException LengthException
     */
    public function testEmptyNumberInput()
    {
        $info = $this->parser->parseNumber('');
    }

    /**
     * @expectedException LengthException
     */
    public function testNullNumberInput()
    {
        $info = $this->parser->parseNumber(null);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testNonStringInput()
    {
        $info = $this->parser->parseNumber(123);
    }
}
