<?php

class KlarnaPayment implements PaymentInterface
{
    public function pay(int $amount): bool
    {
        echo 'Pay ' . $amount . ' with Klarna';
        return true;
    }
}