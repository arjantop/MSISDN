<?php

class ExtractorTest extends PHPUnit_Framework_TestCase
{
    private $extractor;

    public function setUp()
    {
        $this->extractor = new \MSISDN\Carrier\Extractor;
    }

    public function testValidCarriers()
    {
        $this->assertEquals($this->extractor->getCarrier('386', '40'), 'Si.mobil');
        $this->assertEquals($this->extractor->getCarrier('386', '31'), 'Mobitel');
        $this->assertEquals($this->extractor->getCarrier('1', '246254'), 'LIME');
        $this->assertEquals($this->extractor->getCarrier('1', '80920'), 'Tricom');
    }

    public function testInvalidCarrierPrefix()
    {
        $this->assertNull($this->extractor->getCarrier('386', '42'));
        $this->assertNull($this->extractor->getCarrier('386', '4'));
        $this->assertNull($this->extractor->getCarrier('1', '80921'));
        // Invalid country code.
        $this->assertNull($this->extractor->getCarrier('11', '80920'));
    }
}
