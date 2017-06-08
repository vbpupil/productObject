<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 06/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;


class woodToolVariation implements productVariationInterface
{
    protected $name;
    protected $costPrice;
    protected $specialPrice;
    protected $productCode;
    protected $vatCode;
    protected $weight;
    protected $width;
    protected $length;
    protected $height;
    protected $depth;
    protected $cuttingDepth;
    protected $specialPriceExpiry;
    protected $specialPriceActive;
    protected $barcode;
    protected $powerRating;
    protected $decibelRating;
    protected $images = [];

    public function __construct($name)
    {
        $this->setName($name);
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

    /**
     * @return mixed
     */
    public function getCuttingDepth()
    {
        return $this->cuttingDepth;
    }

    /**
     * @param mixed $cuttingDepth
     */
    public function setCuttingDepth($cuttingDepth)
    {
        $this->cuttingDepth = $cuttingDepth;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPowerRating()
    {
        return $this->powerRating;
    }

    /**
     * @param mixed $powerRating
     */
    public function setPowerRating($powerRating)
    {
        $this->powerRating = $powerRating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDecibelRating()
    {
        return $this->decibelRating;
    }

    /**
     * @param mixed $decibelRating
     */
    public function setDecibelRating($decibelRating)
    {
        $this->decibelRating = $decibelRating;
        return $this;
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
}