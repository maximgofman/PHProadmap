<?php

class SepaPayment implements PaymentInterface
{

    public function pay(int $amount): bool
    {
        echo 'Pay ' .  $amount . 'with SEPA';
        return false;
    }
}