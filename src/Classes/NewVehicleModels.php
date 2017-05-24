<?php

namespace src\Classes;

use lib\Module\VehicleShip;
use src\Classes\ClassContants;

class NewVehicleModels
{

    /**
     * @var type array
     */
    private $raptors;

    /**
     * standard constructor
     */
    public function __construct()
    {
        $this->raptors = [ 'raptor' => 68000.59 ];

        echo "The NewVehicleModels class is running! <br/>\n";
    }

    /**
     * custom method
     */
    public function shipNewVehicleModelRaptor()
    {
        echo "<br/>\nWe have a new order for a Ford Raptor...<br/>\n";

        echo "Setting up the costs and shipping.<br/>\n";

        $send = new VehicleShip( $this->raptors );

        $data = $send->getNewModels();

        echo "We have a new raptor being shipped at a total value of {$data[ ClassContants::RAPTOR ]}...<br/>\n";

        $send->setValue( $data[ ClassContants::RAPTOR ], ClassContants::RAPTOR );

        $send->shipIt( ClassContants::RAPTOR );
    }

}
