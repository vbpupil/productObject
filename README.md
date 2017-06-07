# Product Object

A product object with attachable variations.

## Usage Example


```php
use App\product;

include 'vendor/autoload.php';

$p = (new \App\product('Wooden Box'))
    ->setShortName()
    ->setLiveFlag(1)
    ->setSpecificationDescription('Spec text...')
    ->setLongDescription('This is the long description')
    ->setShortDescription('This is the short Desc...')
    ->setEstimatedDeliveryTime(2)
    ->setFeatureDescription('This item will fit in a space...')
    ->setNewFlag(1)
    ->setVideoUrl('https://youtu.be/CPBJgpK0Ulc')
    ;

$v1 = (new \App\generalProductVariation('Small'))
    ->setBarcode('801123487')
    ->setProductCode('123456')
    ->setCostPrice('5.00')
    ->setDepth('30')
    ->setHeight('20')
    ->setLength('20')
    ->setWidth('50')
    ->setWeight('100');

$v2 = (new \App\generalProductVariation('Medium'))
    ->setBarcode('502223433')
    ->setProductCode('998763')
    ->setCostPrice('10.00')
    ->setDepth('30')
    ->setHeight('20')
    ->setLength('20')
    ->setWidth('50')
    ->setWeight('100');

$p->addVariation($v1)
    ->addVariation($v2);

var_dump($p);

dump(product::$url . $p->getShortName());
```