<?php
require_once 'autoload.php';

// Check to see if the classes are loaded from my "Classes" directory?

new lib\Module\VehicleShip(null);

new src\Classes\NewVehicleModels();


$classesArray = get_declared_classes();

foreach($classesArray as $key => $vals) {
    if (preg_match('/Classes|Module/', $vals)) {
        error_log("class loaded: ". $classesArray[$key]);
    }
}