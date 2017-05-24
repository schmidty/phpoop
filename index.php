<?php

/**
 * To easily run this use PHP built-in server and use that URL
 *
 * "php -S localhost:8000"
 */
require_once 'autoload.php';

try {
    $reb = new lib\Model\VehicleShip();
    $reb->showCurrentValues();

    $reb->setValue(15.00, 'pinto', 15);
    $reb->showCurrentValues();

    $reb->setValue(315.95, 'lariat');
    $reb->showCurrentValues();

    $reb->setValue(150.22, 'jeep');
    $reb->showCurrentValues();
} catch (Exception $ex) {
    echo "Error: ". $ex->getMessage();
}