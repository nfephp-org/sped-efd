<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0200;

$std = new stdClass();
$std->COD_ITEM = '123456';
$std->DESCR_ITEM = 'Produto descrito na nota fiscal';
$std->COD_BARRA = '123456890123';
//$std->COD_ANT_ITEM = '123456'; //se existir declarar em 0205
$std->UNID_INV = 'KG';
$std->TIPO_ITEM = '04';
$std->COD_NCM = '12345678';
$std->EX_IPI = '01';
$std->COD_GEN = '12';
//$std->COD_LST = '25.25'; ou esse ou NCM
$std->ALIQ_ICMS = 18;
$std->CEST = '1234567';

try {
    $z0200 = new Z0200($std);
    echo "{$z0200}".'<br>';
    echo '|0200|123456|Produto descrito na nota fiscal|123456890123|KG|04|12345678|01|12||18,00|1234567|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

