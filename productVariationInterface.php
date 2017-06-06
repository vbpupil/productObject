<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 06/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App\src;


interface productVariationInterface
{

    public function setName();
    public function getName();
    public function setCostPrice();
    public function getCostPrice();
    public function setSpecialPrice();
    public function getSpecialPrice();
    public function setSpecialPriceExpiry();
    public function getSpecialPriceExpiry();
    public function setSpecialPriceActive();
    public function getSpecialPriceActive();
    public function setBarcode();
    public function getBarcode();
    public function setProductCode();
    public function getProductCode();
    public function setVatCode();
    public function getVatCode();
    public function setWeight();
    public function getWeight();
    public function setWidth();
    public function getWidth();
    public function setLength();
    public function getLength();
    public function setHeight();
    public function getHeight();
    public function setDepth();
    public function getDepth();




}