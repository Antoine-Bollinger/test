<?php 
$vendorAutoloadPath = (file_exists(__DIR__ . "/../vendor/autoload.php")) 
? __DIR__ . "/../vendor/autoload.php" 
: __DIR__ . "/../../../../vendor/autoload.php";

require $vendorAutoloadPath;

Abollinger\Aaa\App::Input(["q" => "test"]);