<?php

class Person {
	// Properties //
	private $name;
	private $eyeColor;
	private $age;

	public static $drinkingAge = 21;

	public function __construct($name, $eyeColour, $age) {
		$this->name = $name;
		$this->eyeColour = $eyeColour;
		$this->age = $age;
	}

	// Methods //
	public function setName($name) {
		$this->name = $name;
	}

	public function getDA() {
		return self::$drinkingAge;
	}

	public static function setDrinkingAge($newDA) {
		self::$drinkingAge = $newDA;
	}

}