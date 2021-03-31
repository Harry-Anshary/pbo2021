<?php
use application\Product;
require_once ('initialize.php');

$pro = new Product();
echo $pro->getProductType();
$pro->setProductType('FlashDisk');
echo '<br>';
echo $pro->getProductType();
?>