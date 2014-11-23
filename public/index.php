<?php

namespace Main;

require_once '../vendor/autoload.php';

$server = new \Zend\Json\Server\Server;

// Prepare the handler to serve JSON-RCP requests.
$parser = new \MSISDN\Parser;
$handler = new \Rpc\Handler($parser);

$server->setClass($handler);

$server->handle();
