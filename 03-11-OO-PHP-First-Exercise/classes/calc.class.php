<?php

class calc {
	// PROPERTIES
	Public $operator;
	public $num1;
	public $num2;

	//METHODS
	public function __construct(string $operator, int $num1, int $num2) {
		$this->operator = $operator;
		$this->num1 = $num1;
		$this->num2 = $num1;
	}
	public function calculate() {
		switch ($this->operator) {
			case 'add':
				$result = $this->num1 + $this->num2;
				return $result;
				break;
			case 'sub':
				$result = $this->num1 - $this->num2;
				return $result;
				break;
			case 'div':
				$result = $this->num1 / $this->num2;
				return $result;
				break;
			case 'mul':
				$result = $this->num1 * $this->num2;
				return $result;
				break;
			default:
				return "Error!";
				break;
		}
	}
}
