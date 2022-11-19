<?php

namespace Btinet\MiniCore\Product;

abstract class ShopProduct
{

    public string $title;
    public string $producerFirstName;
    public string $producerLastName;
    public int $price;

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

}
