<?php

class PayPalPayment implements PaymentInterface
{

    public function pay(int $amount): bool
    {
        // login in PayPal and authorize payment amount
        echo 'Pay ' .  $amount . 'with PayPal';

        return true;
    }
}