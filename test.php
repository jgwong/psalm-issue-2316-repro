<?php

require_once 'vendor/autoload.php';

use Laminas\InputFilter\Input;
use Laminas\Filter\StringTrim;

$input = new Input();
$input->getFilterChain()->attach(new StringTrim());