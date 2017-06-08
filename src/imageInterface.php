<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Dean Haines
 * @copyright Freetimers Communications Ltd, 08/06/2017, UK
 * @license   Proprietary See LICENSE.md
 */

namespace App;


interface imageInterface
{
    public function setName($name);
    public function getName();

    public function getLocation();

    public function setType($type);
    public function getType();

    public function setAsDefault($id);
}