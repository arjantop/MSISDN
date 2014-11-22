<?php

namespace Rpc;

/**
 * Simple wrapper to expose \MSISDN\Parser via JSON-RPC.
 *
 * The only job of this wrapper is converting the returned object with the
 * extracted information to an array that can then be converted to json
 * object in the response.
 */
class Handler
{
    private $parser;

    public function __construct($parser)
    {
        $this->parser = $parser;
    }

    /**
     * Return MSISDN number information.
     *
     * @param string $msisdn
     * @return array
     */
    public function numberInfo($msisdn)
    {
        return $this->parser->parseNumber($msisdn)->toArray();
    }
}
