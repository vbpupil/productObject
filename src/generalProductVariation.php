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

    /**
     * @var array
     */
    protected $requiredAttributes = [];


    /**
     * generalProductVariation constructor.
     * @param $id
     * @param Attributes $attributes
     */
    public function __construct($id, Attributes $attributes)
    {
        foreach ($attributes->getAttrs() as $k => $v){
            $this->$k = $v;
        }
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $cost
     * @return $this
     */
    public function setCostPrice($cost)
    {
        $this->costPrice = $cost;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * @param $price
     * @return $this
     */
    public function setSpecialPrice($price)
    {
        $this->specialPrice = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecialPrice()
    {
        return $this->specialPrice;
    }

    /**
     * @param $specialPriceExpiry
     * @return $this
     */
    public function setSpecialPriceExpiry($specialPriceExpiry)
    {
        $this->specialPriceExpiry = $specialPriceExpiry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecialPriceExpiry()
    {
        return $this->specialPriceExpiry;
    }

    /**
     * @param $specialPriceActive
     * @return $this
     */
    public function setSpecialPriceActive($specialPriceActive)
    {
        $this->specialPriceActive = $specialPriceActive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecialPriceActive()
    {
        return $this->specialPriceActive;
    }

    /**
     * @param $barcode
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param $code
     * @return $this
     */
    public function setProductCode($code)
    {
        $this->productCode = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param $code
     * @return $this
     */
    public function setVatCode($code)
    {
        $this->vatCode = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatCode()
    {
        return $this->vatCode;
    }

    /**
     * @param $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $depth
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param abstractImage $image
     * @return $this
     */
    public function addImage(abstractImage $image)
    {
        $this->images[] = $image;
        return $this;
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param $name
     */
    public function getAttribute($name)
    {
        // TODO: Implement getAttribute() method.
    }

    /**
     * @param $name
     * @param Attribute $value
     */
    public function setAttribute($name, Attribute $value)
    {
        // TODO: Implement setAttribute() method.
    }
}