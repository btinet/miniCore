<?php

namespace Btinet\MiniCore\Product;

use JetBrains\PhpStorm\Pure;

class CdProduct extends ShopProduct
{
    public int $playLength;

    #[Pure]
    public function __construct(
        string $title,
        string $producerFirstName,
        string $producerLastName,
        int $price,
        int $playLength
    )
    {
        parent::__construct(
            $title,
            $producerFirstName,
            $producerLastName,
            $price
        );
        $this->playLength = $playLength;
    }

    public function getPlayLength(): int
    {
        return $this->playLength;
    }

    public function getSummaryLine(): string
    {
        $base  = parent::getSummaryLine();
        $base .= ": playing time - {$this->playLength}";
        return $base;
    }

}
