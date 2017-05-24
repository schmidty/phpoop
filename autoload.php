<?php
// my simple autoloader
spl_autoload_register(function ($class) {
	$path = str_replace('\\', '/', $class);
	$path = __DIR__ . '/'. $path . '.php';
	require $path;
});
