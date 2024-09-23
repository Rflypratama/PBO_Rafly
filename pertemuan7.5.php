<?php

class Test
{
    public function __construct()
    {
        // Your logic for constructor
    }

    public function call($method_name, $parameter)
    {
        if ($method_name == "Function") {
            $count = count($parameter);
            
            switch ($count) {
                case 1:
                    echo "You are passing 1 argument";
                    break;

                case 2: // In case of 2 parameters
                    echo "You are passing 2 parameters";
                    break;

                default:
                    throw new Exception("Bad argument");
            }
        } else {
            throw new Exception("Function $method_name does not exist");
        }
    }
}

$a = new Test();
$a->call("Function", ["ankur"]); // Memanggil dengan array
$a->call("Function", ["techflirt", "ankur"]); // Memanggil dengan array
?>
