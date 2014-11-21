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
    }

    public function testParseNanpNumber()
    {
        $info = $this->parser->parseNumber('+16841234567');
        $this->assertEquals('1', $info->getCountryDialingCode());
        $this->assertEquals('6841234567', $info->getSubscriberNumber());
        $this->assertEquals('US', $info->getCountryIdentifier());
    }

    public function testParseSouthAfricaNumber()
    {
        $info = $this->parser->parseNumber('+271234567');
        $this->assertEquals('27', $info->getCountryDialingCode());
        $this->assertEquals('1234567', $info->getSubscriberNumber());
        $this->assertEquals('ZA', $info->getCountryIdentifier());
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
