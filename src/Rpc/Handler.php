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
    /**
     * The parser for extracting the information from MSISDN numbers.
     *
     * @var \MSISDN\Parser
     */
    private $parser;

    /**
     * Constructs a new Handler for the RPC service.
     *
     * @param \MSISDN\Parser
     */
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
