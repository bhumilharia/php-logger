<?php

// autoload will import the necessary classes
require_once("../vendor/autoload.php");

// loading individually: DnifLogger and Consumers_BlockingHttpConsumer classes
// require_once("../vendor/dnif/php-logger/lib/Consumers.php");
// require_once("../vendor/dnif/php-logger/lib/DnifLogger.php");

$dlog = new DnifLogger(
    new Consumers_SocketConsumer("UDP_IP", UDP_PORT));

// data is a string
$data = "Hello World";

$dlog->log($data);
