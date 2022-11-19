<?php

namespace Btinet\MiniCore\Product;

use Btinet\MiniCore\Type\MoneyType;
use JetBrains\PhpStorm\Pure;

abstract class ShopProduct
{

    public string $title;
    public string $producerFirstName;
    public string $producerLastName;
    public int $discount = 0;
    protected MoneyType $price;

    #[Pure]
    public function __construct(
        $title,
        $producerFirstName,
        $producerLastName,
        $price
    ){
        $this->title = $title;
        $this->producerFirstName = $producerFirstName;
        $this->producerLastName = $producerLastName;
        $this->price = new MoneyType($price);
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producerFirstName . " "
            . $this->producerLastName;
    }

    public function getSummaryLine(): string
    {
        $base  = "{$this->title} ( {$this->producerLastName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

    public function setPrice(int $price): void
    {
        $this->price->setAmount($price);
    }

    #[Pure]
    public function getPrice(): string
    {
        return $this->price;
    }

    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

}
