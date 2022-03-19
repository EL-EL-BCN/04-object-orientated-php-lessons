<?php

spl_autoload_register('MyAutoLoader');

function MyAutoLoader ($className) {
	$path = 'classes/';
	$extension = '.class.php';
	$filename = $path . $className . $extension;

	if (!file_exists($filename)) {
		return false;
	}

	include_once $path . $className . $extension;
}