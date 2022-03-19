<?php

class Person {
	// Properties //
	private $name;
	private $eyeColor;
	private $age;

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}

	// Methods //
	public function getPerson() {
    $person = $this->name . " is " . $this->age . " years old!";
    return $person;
	}

}