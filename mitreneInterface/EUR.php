<?php

class EUR implements CurrencyInterface
{
    public function getCurrency(): string
    {
        return 'EUR';
    }
}