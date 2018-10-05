<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M230;

$std = new stdClass();
$std->CNPJ = '40814340000170';
$std->VL_VEND = 23.69;
$std->VL_NAO_RECEB = 11.6;
$std->VL_CONT_DIF = 99.15;
$std->VL_CRED_DIF = 26.49;
$std->COD_CRED = '759';

try {
$m230 = new M230($std);
echo "{$m230}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M230|40814340000170|23,69|11,60|99,15|26,49|759|
<br>';
