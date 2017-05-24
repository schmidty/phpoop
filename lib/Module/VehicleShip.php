<?php

namespace lib\Module;

use src\Classes\ShipInterface;

/**
 * Both Abstract and Interface "enforce" specific conditions for child-classes extending
 * from these peculiar PHP OOP class types.
 *
 * The abstract requires the developer to use specific methods within the extending classes
 * The interface requires a specific signature or parameter type to be used with the method
 */
class VehicleShip extends ShipAbstract implements ShipInterface
{

    /**
     * @var type array
     */
    protected $values;


    /**
     * @param object $costDetails
     */
    public function __construct( $costDetails = null )
    {
        // Dependency Injection
        $this->values = $costDetails;

        $this->running();
    }

    /**
     * @return type array
     */
    public function getKeyValues()
    {
        return (array) $this->values;
    }

    /**
     * You must have the "signature" or "interface name" preceding the $value variable
     * @param \lib\Module\Float $value
     * @param type $vehicle
     */
    public function setValue( Float $value, $vehicle )
    {
        $this->values[ $vehicle ] = trim( $value );
    }

    /**
     * @param string $key
     * @return type array
     */
    public function getValue( $key )
    {
        if( array_key_exists( $key, $this->values ) ) {
            return $this->values[ $key ];
        }
    }

    /**
     * display to the view
     */
    public function showCurrentValues()
    {
        if (empty($this->getKeyValues())) {
            return false;
        }

        foreach( $this->getKeyValues() as $key => $value ) {
            echo "The key value of a {$key} is now $" . $value . "<br/>\n";
        }
        echo "<br/>\n";
    }

    /**
     * @param string $vehicle
     */
    public function shipIt( $vehicle )
    {
        $keyValues = $this->getKeyValues();

        if( $keyValues && array_key_exists( $vehicle, $keyValues ) ) {
            $total = (int) $keyValues[ $vehicle ] + 2000; // Add shipping costs
            echo "<br/>\nSending out " . $vehicle . " and applying a $2000.00 shipping fee...<br/>\n";
            echo "The total plus fee will be $". number_format($total, 2) ."<br/>\n";
        } else {
            echo "Vehicle not found.<br/>\n";
        }
    }
}
