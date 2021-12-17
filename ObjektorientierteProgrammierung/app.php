<?php

include './Shop.php';
include './PaymentInterface.php';
include './PayPalPayment.php';
include './SepaPayment.php';
include './KlarnaPayment.php';

echo 'Shop APP' . PHP_EOL;

$paypalPayment = new PayPalPayment();
$sepaPayment = new SepaPayment();
$klarnaPayment = new KlarnaPayment();

$shop = new Shop($klarnaPayment);
$shop->order();

echo PHP_EOL;