<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M630;

$std = new stdClass();
$std->CNPJ = '40814340000170';
$std->VL_VEND = 66.57;
$std->VL_NAO_RECEB = 16.51;
$std->VL_CONT_DIF = 25.76;
$std->VL_CRED_DIF = 1.21;
$std->COD_CRED = '858';

try {
$m630 = new M630($std);
echo "{$m630}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M630|40814340000170|66,57|16,51|25,76|1,21|858|
<br>';
