<?php


require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Dmellorohan\Connector\SoapConnector\Connector;

echo Connector::connect();