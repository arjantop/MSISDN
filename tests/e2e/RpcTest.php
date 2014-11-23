<?php

class RpcTest extends PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp()
    {
        $this->client = new \JsonRpc\Client("http://localhost:8080");
    }

    public function testGetNumberInfo()
    {
        $success = $this->client->call('numberInfo', ['+38641123456']);
        $this->assertTrue($success);
        $this->assertEquals('386', $this->client->result->dialingCode);
        $this->assertEquals('41123456', $this->client->result->subscriberNumber);
        $this->assertEquals('SI', $this->client->result->countryIdentifier);
        $this->assertEquals('Mobitel', $this->client->result->carrierName);
    }

    public function testGetNumberInfoWithInvalidInput()
    {
        $success = $this->client->call('numberInfo', ['38641123456']);
        $this->assertFalse($success);
        // TODO: should check that message is set but bug in library.
    }
}
