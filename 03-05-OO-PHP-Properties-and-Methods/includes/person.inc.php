<?php

class Person {
	private $first = "Daniel"; //$first is a private property of the person class//
	private $last = "Nielson";
	private $age = "28";

	public function owner() { //This is a pblic method//
		$a = $this->first;
		return $a;
	}
}

class Pet {
	public function owner() {
	$a = "Hi there!";
		return $a;
	}
}
//Property is set to PRIVATE so it cannot be seen or visible FROM OUSIDE THE CLASS. //

//We have a METHOD, $a = $this->first; - we say in this method that variable $a is equal to "$this" and point to it with an arrow -> we are pointing to a property not a variable so we do not need the dollar symbol. Note that $this is used to refer to something inside the same class.// 

//We can access, from the index page, the PRIVATE properties in a class using a PUBLIC METHOD//



class Individual {
	protected $FirstName = "Elliott"; //$1st is a PROTECTED property of the person class//
	private $Surname = "Farmer";
}

class Mascot extends Individual{ //Inherit properties from "individual" class//
	public function guardian() { //This is a public method//
		$b = $this->FirstName; //There is no property called "FirstName" in this class so we need to inherit it from the "Individual" class//
		return $b;
	}
}

//The class Mascot has aditional parameter to say extend the "Individual" class. This means that it can inherit all the private properties from the "individual class into the mascot public class.//

//To inherit properties from another class the property needs to have it´s visibility set to PROTECTED//

//Note that we are still using "$this" to reference to a property within that class however the property is now being inherited.//


class Candidate {
	//Properties//
	public $CandidateFirstName;
	public $CandidateLastName;
	Public $CandidateEyeColour;

	//Methods//
	public function SetCandidateFirstName ($CandidateFirstName) {
	$this->CandidateFirstName = $CandidateFirstName;
	}
}

