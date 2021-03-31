<?php
use application\frontend\MyDate;

require_once ('initialize.php');

$tanggalku = new MyDate();

echo $tanggalku->penanggalan();