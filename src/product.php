<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 06/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;


class product implements AttributableInterface
{
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

    /**
     * Products URL
     * @var string
     */
    public static $url = '/product/';

    protected $variations;

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $name
     * @return product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return String
     */
    public function getShortName($shortname=null)
    {
        if(empty($this->shortName)){
            $this->setShortName($shortname);
        }

        return $this->shortName;
    }

    /**
     * Sets Product Shortname for url
     * @param String $shortName
     */
    public function setShortName($shortname=null)
    {
        $this->shortName = preg_replace(
            '([^a-zA-Z\d])',
            '-',
            strtolower(  ($shortname ? $shortname : $this->name) )
        );

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return static::$url;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return product
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureDescription()
    {
        return $this->featureDescription;
    }

    /**
     * @param string $featureDescription
     * @return product
     */
    public function setFeatureDescription($featureDescription)
    {
        $this->featureDescription = $featureDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecificationDescription()
    {
        return $this->specificationDescription;
    }

    /**
     * @param string $specificationDescription
     * @return product
     */
    public function setSpecificationDescription($specificationDescription)
    {
        $this->specificationDescription = $specificationDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     * @return product
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedDeliveryTime()
    {
        return $this->estimatedDeliveryTime;
    }

    /**
     * @param string $estimatedDeliveryTime
     * @return product
     */
    public function setEstimatedDeliveryTime($days)
    {
        $this->estimatedDeliveryTime = $days;
        return $this;
    }

    /**
     * @return int
     */
    public function getNewFlag()
    {
        return $this->newFlag;
    }

    /**
     * @param int $newFlag
     * @return product
     */
    public function setNewFlag($newFlag)
    {
        $this->newFlag = $newFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveFlag()
    {
        return $this->liveFlag;
    }

    /**
     * @param int $liveFlag
     * @return product
     */
    public function setLiveFlag($liveFlag)
    {
        $this->liveFlag = $liveFlag;
        return $this;
    }

    public function addVariation(productVariationInterface $variation){
        $this->variations[] = $variation;
        return $this;
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