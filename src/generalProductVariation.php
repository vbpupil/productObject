<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 06/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;


class generalProductVariation implements productVariationInterface, AttributableInterface
{
    protected $images = [];

    /**
     * @var Attributes
     */
    protected $attributes;

    protected $requiredAttributes = [];


    public function __construct($id, Attributes $attributes)
    {
        foreach ($attributes->getAttrs() as $k => $v){
            $this->$k = $v;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCostPrice($cost)
    {
        $this->costPrice = $cost;
        return $this;
    }

    public function getCostPrice()
    {
        return $this->costPrice;
    }

    public function setSpecialPrice($price)
    {
        $this->specialPrice = $price;
        return $this;
    }

    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    public function setSpecialPriceExpiry($specialPriceExpiry)
    {
        $this->specialPriceExpiry = $specialPriceExpiry;
        return $this;
    }

    public function getSpecialPriceExpiry()
    {
        return $this->specialPriceExpiry;
    }

    public function setSpecialPriceActive($specialPriceActive)
    {
        $this->specialPriceActive = $specialPriceActive;
        return $this;
    }

    public function getSpecialPriceActive()
    {
        return $this->specialPriceActive;
    }

    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function setProductCode($code)
    {
        $this->productCode = $code;
        return $this;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setVatCode($code)
    {
        $this->vatCode = $code;
        return $this;
    }

    public function getVatCode()
    {
        return $this->vatCode;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function addImage(abstractImage $image)
    {
        $this->images[] = $image;
        return $this;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function getAttribute($name)
    {
        // TODO: Implement getAttribute() method.
    }

    public function setAttribute($name, Attribute $value)
    {
        // TODO: Implement setAttribute() method.
    }
}