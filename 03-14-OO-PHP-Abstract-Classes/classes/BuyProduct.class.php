<?php
include_once "abstract/PaymentTypes.abstract.php";

class BuyProduct extends Visa {
	public function getPayment() {
		return $this->visaPayment();
	}
}

?>