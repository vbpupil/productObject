<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 06/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;


class product
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * Products Name
     * @var String
     */
    protected $name;

    /**
     * Products Shortname
     * @var String
     */
    protected $shortName;

    /**
     * Products URL
     * @var string
     */
    protected $url;

    /**
     * Products Short Description
     * @var string
     */
    protected $shortDescription;

    /**
     * Products Long Description
     * @var string
     */
    protected $longDescription;

    /**
     * Products Feature Description
     * @var string
     */
    protected $featureDescription;

    /**
     * Products Specification Description
     * @var string
     */
    protected $specificationDescription;

    /**
     * Products Video URL ie Youtube/Vimeo
     * @var string
     */
    protected $videoUrl;

    /**
     * Products Estimated Delivery
     * @var string
     */
    protected $estimatedDeliveryTime;

    /**
     * Products New Flag
     * @var int
     */
    protected $newFlag;


    /**
     * Products Live Flag
     * @var int
     */
    protected $liveFlag;

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
    public function getShortName()
    {
        if(empty($this->shortName)){
            $this->setShortName();
        }

        return $this->shortName;
    }

    /**
     * @param String $shortName
     */
    public function setShortName()
    {
        $this->shortName = preg_replace('[^a-zA-Z\d]', '-', strtolower($this->name));
    }




    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return product
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
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
    public function setEstimatedDeliveryTime($estimatedDeliveryTime)
    {
        $this->estimatedDeliveryTime = $estimatedDeliveryTime;
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

    }
}