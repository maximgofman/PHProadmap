<?php

class Shop
{
    private PaymentInterface $payment;

    public function __construct(ç $payment)
    {
        $this->payment = $payment;
    }

    public function order()
    {
        // so something
        $this->payment->pay(40);
    }
}