<?php
define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
define('AUTOROOT', str_replace("src/", "", ROOT));

require_once( AUTOROOT . 'vendor/autoload.php');
// require_once( ROOT . 'vendor/autoload.php');
require_once(ROOT . 'Config/core.php');
echo "hihi test ở index";
exit;

// use AHT\Route;
// use AHT\Request;
// use AHT\Dispatcher;
require(ROOT . 'router.php');
require(ROOT . 'request.php');
require(ROOT . 'dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>