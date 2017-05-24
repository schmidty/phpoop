<?php
namespace src\Classes;


interface ShipInterface
{
    /**
     * @param \src\Classes\Float $value
     * @param string $vehicle
     */
    public function setValue(Float $value, $vehicle);

}
