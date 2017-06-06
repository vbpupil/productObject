<?php

use App\product;

include 'vendor/autoload.php';

$p = new \App\product('Test product & names');

var_dump($p);
var_dump($p->getShortName());