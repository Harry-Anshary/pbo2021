<?php
use application\StringMutator;
require_once ('initialize.php');

$kata = new StringMutator('Dian Prawira');
//$kata->bold();
//$kata->italic();
//$kata->underscore();
//$hasil = $kata->getWord();
$hasil = $kata->bold()->italic()->underscore()->getWord();
echo $hasil;
?>