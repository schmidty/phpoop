<?php

namespace lib\Module;

abstract class ShipAbstract
{

    public abstract function getKeyValues();

    public abstract function showCurrentValues();

    public abstract function shipIt( $vehicle );

    public function running()
    {
        echo "This abstract is running!<br/>\n";
    }

}
