<?php

use lib\Module\VehicleShip;
use src\Classes\NewVehicleModels;

/**
 * To easily run this use PHP built-in server and use that URL
 *
 * "php -S localhost:8000"
 */
require_once 'autoload.php';

try {
    $reb = new VehicleShip(null);
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
    $newCar = new NewVehicleModels();
    $newCar->shipNewVehicleModelRaptor();

    // New car to ship
    $sv = new stdClass();
    $sv->{'Explorer'} = 46000.00;

    $ship = new VehicleShip($sv);
    $ship->shipIt('Explorer');

} catch (Exception $ex) {
    echo "Error: ". $ex->getMessage();
}