<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 08/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;

abstract class abstractImage
{
    protected $name;
    protected $type;
    protected $location;


    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->setType();
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return $this
     */
    public function getName(){
        $this->name;
        return $this;
    }

    /**
     * @return $this
     */
    public function setType()
    {
        $this->type = substr($this->name, (strrpos($this->name, '.')+1));
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    public function setAsDefault($id)
    {
        // TODO: Implement setAsDefault() method.
    }
}