<?php 
namespace Abollinger\Aaa;

use \Abollinger\Helpers;

class App 
{
    public static function Input(
        array $params = []
    ) {
        $params = Helpers::defaultParams([
            "q" => "How are you today? ",
        ], $params);

        echo $params["q"];
        $response = trim(fgets(STDIN));
        return $response ?? "";
    }
}