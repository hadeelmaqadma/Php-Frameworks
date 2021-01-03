<?php

//The Data .
$frameworks = array("Laravel","CodeIgniter","Phalcon","Zend Framework","Yii","Cake PHP","Kohana","Symfony","FuelPHP", "PHPixie" ,"Slim") ;

$name = $_GET["name"];

if (strlen($name) > 0) { 
    $match = "";
    for ($i = 0; $i < count($frameworks); $i++) {
        if (strtolower($name) == strtolower(substr($frameworks[$i], 0, strlen($name)))) {
            if ($match == "") { //first match 
                $match = $frameworks[$i] ;
            } else { //more than one match , 
                $match = $match . ", " . $frameworks[$i];
            }

        }

    }

}

echo ($match == "") ? 'No Matching found' : $match;
?>

