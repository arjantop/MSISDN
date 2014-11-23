<?php

class HandlerTest extends PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        \Mockery::close();
    }

    public function testNumberInfoArrayReturned()
    {
        $info = new \MSISDN\NumberInfo("a", "b", "c", "d");
        $parser = \Mockery::mock('parser');
        $parser->shouldReceive('parseNumber')->with("+386401234")->once()->andReturn($info);
        $handler = new \Rpc\Handler($parser);
        $this->assertEquals($info->toArray(), $handler->numberInfo("+386401234"));
    }
}
