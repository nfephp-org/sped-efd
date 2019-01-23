<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C160;

$std = new stdClass();
$std->COD_PART = 'XPZXZJGPAROZIXP5AHXRUGDR3GYV9Z9VQ6FPP5VAA6KX4W3QQDBGDGT0V11T';
$std->VEIC_ID = 'DBG7V00';
$std->QTD_VOL = '602';
$std->PESO_BRT = 519.8;
$std->PESO_LIQ = 971.1;
$std->UF_ID = 'RJ';

try {
    $c160 = new C160($std);
    echo "{$c160}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C160|XPZXZJGPAROZIXP5AHXRUGDR3GYV9Z9VQ6FPP5VAA6KX4W3QQDBGDGT0V11T|DBG7V00|602|519,80|971,10|RJ|<br>';
