<?php

namespace Btinet\MiniCore\Writer;

use Btinet\MiniCore\Product\ShopProduct;

class ShopProductWriter
{

    private array $products = [];

    public function addProduct(ShopProduct $shopProduct): void
    {
        $this->products[] = $shopProduct;
    }

    public function write(): string
    {
        $str  = "";
        foreach ($this->products as $shopProduct){
            $str .= "{$shopProduct->title}: ";
            $str .=  $shopProduct->getProducer();
            $str .= " ({$shopProduct->getPrice()}) \r\n";
        }
        return nl2br($str);
    }

}