<?php

class numberInfoTest extends PHPUnit_Framework_TestCase
{
    public function testToArrayAllData()
    {
        $info = new \MSISDN\NumberInfo("a", "b", "c", "d");
        $result = $info->toArray();
        $this->assertEquals(4, count($result));
        $this->assertEquals("a", $result['dialingCode']);
        $this->assertEquals("b", $result['subscriberNumber']);
        $this->assertEquals("c", $result['countryIdentifier']);
        $this->assertEquals("d", $result['carrierName']);
    }

    public function testToArrayNoCarrierName()
    {
        $info = new \MSISDN\NumberInfo("a", "b", "c", null);
        $result = $info->toArray();
        $this->assertEquals(3, count($result));
        $this->assertFalse(array_key_exists('carrierName', $info));
    }
}
