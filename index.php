<?php

use Btinet\MiniCore\Product\BookProduct;
use Btinet\MiniCore\Product\CdProduct;
use Btinet\MiniCore\Writer\ShopProductWriter;

const project_root = __DIR__;
require ('./vendor/autoload.php');

$cd1 = new CdProduct(
    'Thats Christmas to Me',
    'Mister',
    'Pentatonix',
    995,
    60
);

$book1 = new BookProduct(
    'Rollende Steine',
    'Terry',
    'Prattchet',
    1295,
    415
);

$writer = new ShopProductWriter();
$writer->addProduct($cd1);
$writer->addProduct($book1);

?>

<html lang="en">
    <head>
        <title>Shop</title>
    </head>
    <body>
    <h1>Aktuelle Produkte</h1>
    <p>
        <?=$writer->write();?>
    </p>
    </body>
</html>