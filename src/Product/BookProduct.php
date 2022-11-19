<?php

namespace Btinet\MiniCore\Product;

use JetBrains\PhpStorm\Pure;

class BookProduct extends ShopProduct
{
    public int $numPages;

    #[Pure]
    public function __construct(
        string $title,
        string $producerFirstName,
        string $producerLastName,
        int $price,
        int $numPages
    ) {
        parent::__construct(
            $title,
            $producerFirstName,
            $producerLastName,
            $price
        );
        $this->numPages = $numPages;
    }

    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        $base  = parent::getSummaryLine();
        $base .= ": page count - {$this->numPages}";
        return $base;
    }

}
