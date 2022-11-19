<?php

namespace Btinet\MiniCore\Product;

abstract class ShopProduct
{

    public string $title;
    public string $producerFirstName;
    public string $producerLastName;
    public int $discount = 0;
    protected int $price;

    public function __construct(
        $title,
        $producerFirstName,
        $producerLastName,
        $price
    ){
        $this->title = $title;
        $this->producerFirstName = $producerFirstName;
        $this->producerLastName = $producerLastName;
        $this->price = $price;
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
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return ($this->price - $this->discount);
    }

    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

}
