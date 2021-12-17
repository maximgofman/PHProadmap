<?php

class Money
{
    private CurrencyInterface $currency;
    private int $amount;

    public function __construct(int $amount, CurrencyInterface $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }
}