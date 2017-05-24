<?php

namespace lib\Model;

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

    protected $values;

    public function __construct()
    {
        $this->running();
        $this->setValue( 65500.00, 'raptor');
    }

    public function getValues()
    {
        return $this->values;
    }

    // You must have the "signature" or "interface name" preceding the $value variable
    public function setValue(Float $value, $vehicle)
    {
        $this->values[ $vehicle ] = trim( $value );
    }

    public function getValue($key)
    {
        if ( array_key_exists( $key, $this->values )) {
            return $this->values[$key];
        }
    }

    public function showCurrentValues()
    {
        foreach($this->getValues() as $key => $value) {
            echo "The key value of a {$key} is now $" . $this->getValue($key) . "<br/>\n";
        }
        echo "<br/>\n";
    }

}
