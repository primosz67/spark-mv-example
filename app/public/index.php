<?php


use Spark\Engine;

error_reporting(E_ALL);

define("__ROOT__", __DIR__ . "/../../");
define("__VENDOR__", "../../vendor");

require __VENDOR__ . "/autoload.php";


$profileName ="someNameProfile";
$appName = "exampleProjectName";

$engine = new Engine($appName, $profileName, __ROOT__ . "app");
$engine->run();