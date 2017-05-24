<?php

spl_autoload_register(function ($class) {
		//error_log('class: '.$class);
	    $path = str_replace('\\', '/', $class);
		$path = __DIR__ . '/'. $path . '.php';
		//error_log('path: '.$path);
		require $path;
});
