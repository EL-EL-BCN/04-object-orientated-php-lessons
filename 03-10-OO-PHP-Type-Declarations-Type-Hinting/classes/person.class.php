<?php

class Person {
	// PROPERTIES
	private $name;
	private $eyeColor;
	private $age;
	
	/* METHODS

  By using type declaration, we can throw an error if wrong type is given!
  Works with:
    -  class/interface names
    -  self (used to reference to same class)
    -  array
    -  callable
    -  bool
    -  float
    -  int
    -  string
    -  iterable
    -  object
*/

	public function setName(string $newName) {
    	$this->name = $newName;
  }

  	public function getName() {
    	return $this->name;
  }
}