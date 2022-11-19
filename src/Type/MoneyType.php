<?php

namespace Btinet\MiniCore\Type;

use JetBrains\PhpStorm\Pure;

class MoneyType
{

    private int $amount;
    private string $currency;

    public function __construct(
        int $amount = 0,
        string $currency = 'EUR'
    ){
        $this->amount = $amount;
        $this->currency = strtoupper($currency);
    }

    #[Pure]
    public function __toString(): string
    {
        return sprintf("%s %s",$this->formatMoney($this->amount),$this->currency);
    }

    protected function formatMoney(int $amount): string
    {
        return number_format($amount/100,2,',','.');
    }

    #[Pure]
    public function getAmount($format = false): string|int
    {
        return $format ? $this->formatMoney($this->amount) : $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setAmount(int $amount): MoneyType
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCurrency(string $currency): MoneyType
    {
        $this->currency = strtoupper($currency);
        return $this;
    }

}
