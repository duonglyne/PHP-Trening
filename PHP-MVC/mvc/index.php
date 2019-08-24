<?php
define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define('SRCROOT', str_replace("mvc", "mvc/src/", ROOT)); // mvc/src/

require_once( ROOT . '/vendor/autoload.php'); // mvc/vendor/autoload.php

use AHT\Dispatcher;

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>