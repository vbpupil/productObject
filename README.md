# Product Object

A product object with attachable variations.

## Usage Example


```php
use App\product;

include 'vendor/autoload.php';

$p = (new \App\product( '123', new \App\Attributes(
        [   'name' => '100% Cotton T-Shirt',
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
        ->setName('red.cotton.tshirt.front.jpg'))
    ->addImage(
        (new \App\productImage())
            ->setName('red.cotton.tshirt.back.jpg'));
            
$p->setAttribute( 'name', new \App\Attribute('Cotton Tees') );

$p->addVariation($v1)
    ->addVariation($v2);

var_dump($p);
```