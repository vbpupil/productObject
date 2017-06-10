<?php

use App\product;

include 'vendor/autoload.php';

//product::$url = '/product2/';

$p = (new \App\product( '123', new \App\Attributes(
        [   'name' => '100% Cotton T-Shirt',
            'dean',
            'live' => 1,
            'new' => 1,
            'specificationDescription' => 'This is the short Desc...',
            'FeatureDescription' => 'This item will fit in a space...',
            'shortDescription' => 'Spec text...',
            'LongDescription' => 'This is the long description',
            'deliveryTime' => 2,
            'VideoUrl' => 'https://youtu.be/CPBJgpK0Ulc'
        ]
    )));

$p->setAttribute( 'name', new \App\Attribute('Cotton Tees') );

$v1 = (new \App\generalProductVariation('v1',  new \App\Attributes(
        [
            'name' => 'Small',
            'colour' => 'red',
            'cost' => 5.80,
            'price' => 8.75,
            'specialPriceActiveDate' => '01/01/17',
            'specialPriceEndDate' => '29/12/17',
            'specialPriceActive' => 1,
            'specialPrice' => 8.00,
            'barcode' => '801123487',
            'depth' =>  30,
            'height' => 20,
            'length' => 20,
            'width' => 50,
            'weight' => 100
        ]
    )))
    ->addImage(
        (new \App\productImage())
        ->setName('top.twenty.black.box.jpg'))
    ->addImage(
        (new \App\productImage())
            ->setName('34_17-box.jpg'));


$v2 = (new \App\generalProductVariation('v2',  new \App\Attributes(
    [
        'name' => 'Medium',
        'cost' => 5.80,
        'price' => 8.75,
        'barcode' => '801123487',
        'depth' =>  30,
        'height' => 20,
        'length' => 20,
        'width' => 50,
        'weight' => 100
    ]
)))
    ->addImage(
        (new \App\productImage())
            ->setName('top.twenty.black.box.jpg'))
    ->addImage(
        (new \App\productImage())
            ->setName('34_17-box.jpg'));


$p->addVariation($v1)
    ->addVariation($v2);

dump($p);

dump(product::$url . $p->getShortName());
