<?php

interface PaymentInterface
{
    public function pay(Money $money): bool;
}