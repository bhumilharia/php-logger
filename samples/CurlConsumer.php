<?php

// autoload will import the necessary classes
require_once("../vendor/autoload.php");

// loading individually: DnifLogger and Consumers_BlockingHttpConsumer classes
// require_once("../vendor/dnif/php-logger/lib/Consumers.php");
// require_once("../vendor/dnif/php-logger/lib/DnifLogger.php");

$dlog = new DnifLogger(
    new Consumers_BlockingHttpConsumer("http://TARGET_IP:PORT/json/receive"));

// data is a *sequential array* of key value pairs
$data = array(
    array("key1" => "value1")
);

// Warning: This will block until the request is complete
$dlog->log($data);
