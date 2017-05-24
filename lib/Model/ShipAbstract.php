<?php

namespace lib\Model;


abstract class ShipAbstract
{
	public abstract function getValues();

	public abstract function showCurrentValues();

	public function running()
	{
		echo "This abstract is running!<br/>\n";
	}


}
