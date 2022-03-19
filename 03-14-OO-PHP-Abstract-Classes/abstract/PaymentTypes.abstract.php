<?php

abstract class Visa {
	public function visaPayment() {
		return "perform a payment";
	}

	abstract public function getPayment();
}

?>