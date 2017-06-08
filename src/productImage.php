<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 08/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;


class productImage extends abstractImage
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $location = '/templates/default/images/';


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }



}