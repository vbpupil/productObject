<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 06/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;


interface productVariationInterface
{

    public function setName($name);
    public function getName();

    public function setCostPrice($cost);
    public function getCostPrice();

    public function setSpecialPrice($price);
    public function getSpecialPrice();

    public function setSpecialPriceExpiry($expiry);
    public function getSpecialPriceExpiry();

    public function setSpecialPriceActive($active);
    public function getSpecialPriceActive();

    public function setBarcode($barcode);
    public function getBarcode();

    public function setProductCode($code);
    public function getProductCode();

    public function setVatCode($code);
    public function getVatCode();

    public function setWeight($weight);
    public function getWeight();

    public function setWidth($width);
    public function getWidth();

    public function setLength($length);
    public function getLength();

    public function setHeight($height);
    public function getHeight();

    public function setDepth($depth);
    public function getDepth();




}