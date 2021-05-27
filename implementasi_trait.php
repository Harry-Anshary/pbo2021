<?php

require_once('vendor/autoload.php');

use App\Person;

$ilham = new Person();

$ilham->goodBye('Bayu');
$ilham->hasName = 'Ilhamsyah';
echo $ilham->hasName;
