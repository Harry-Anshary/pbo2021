<?php
use application\backend\MyDate;

require_once ('initialize.php');

$the_date = new MyDate();
$the_date->setDay(15);

echo $the_date->getDay();
