<?php
include_once "abstract/PaymentTypes.abstract.php";
include_once "classes/BuyProduct.class.php";

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();

?>
