<?php

namespace src\Classes;

use lib\Module\VehicleShip;
use src\Classes\ClassContants;
use stdClass;

class NewVehicleModels
{
    /**
     * @var type array
     */
    private $newVehicleCost;

    /**
     * standard constructor
     */
    public function __construct()
    {
        $this->newVehicleCost = [ 'raptor' => 68000.59 ];

        echo "The NewVehicleModels class is running! <br/>\n";
    }

    /**
     * custom ship new vehicle method
     */
    public function shipNewVehicleModelRaptor()
    {
        echo "<br/>\nWe have a new order for a Ford Raptor...<br/>\n";
        echo "Setting up the costs and shipping.<br/>\n";

        $send = new VehicleShip( $this->newVehicleCost );
        $data = $send->getKeyValues();

        echo "We have a new raptor being shipped at a total value of $". $data[ ClassContants::RAPTOR ] ."...<br/>\n";

        $send->setValue( $data[ ClassContants::RAPTOR ], ClassContants::RAPTOR );
        $send->shipIt( ClassContants::RAPTOR );
    }

    /**
     * This implements PHP 7.0 new feature of returning value type
     * @param float $cost
     * @param string $vehicle
     * @return \stdClass
     */
    public function createNewVehicleWithCost( $cost, $vehicle ): stdClass
    {
        $obj = new \stdClass();
        $obj->{$vehicle} = $cost;

        return $obj;
    }

}
