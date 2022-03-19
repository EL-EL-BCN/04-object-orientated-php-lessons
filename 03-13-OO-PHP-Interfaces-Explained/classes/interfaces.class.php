<?php

// INTERFACES

interface PaymentInterface {
	public function PayNow();
}
// CLASS
class Paypal implements PaymentInterface {
	public function LoginFirst() {}
	public function PayNow() {}
// METHOD
	public function PaymentProcess() {
		$this->LoginFirst();
		$this->PayNow();
	}
}
// CLASS
class Visa implements PaymentInterface {
	public function PayNow() {}	
// METHOD
	public function PaymentProcess() {
		$this->PayNow();
	}

}
// CLASS
class Cash implements PaymentInterface {
	public function PayNow() {}	
// METHOD
	public function PaymentProcess() {
		$this->PayNow();
	}
}

class BuyProduct {
	public function pay(PaymentInterface $paymentType) {
		$paymentType->LoginFirst()
		$paymentType->paynow()
	}

}

$paymentType = new Paypal();
$BuyProduct = new BuyProduct();
$BuyProduct->pay($paymentType);


