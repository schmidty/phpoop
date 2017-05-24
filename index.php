<?php

/**
 * To easily run this use PHP built-in server and use that URL
 *
 * "php -S localhost:8000"
 */
require_once 'autoload.php';

try {
    $reb = new lib\Model\VehicleShip(null);
    $reb->showCurrentValues();

    $reb->setValue(15.00, 'pinto', 15);
    $reb->showCurrentValues();

    $reb->setValue(315.95, 'lariat');
    $reb->showCurrentValues();

    $reb->setValue(150.22, 'jeep');
    $reb->showCurrentValues();

    // expensive old car!
    $reb->shipIt('pinto');

    // We have a new vehicle order!
    $newCar = new src\Classes\NewVehicleModels();
    $newCar->shipNewVehicleModelRaptor();

} catch (Exception $ex) {
    echo "Error: ". $ex->getMessage();
}