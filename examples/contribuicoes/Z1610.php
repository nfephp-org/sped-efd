<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1610;

$std = new stdClass();
$std->CNPJ = '40814340000170';
$std->CST_COFINS = '99';
$std->COD_PART = '6164839762170182';
$std->DT_OPER = '04102018';
$std->VL_OPER = 9.96;
$std->VL_BC_COFINS = 38.11;
$std->ALIQ_COFINS = 261.3;
$std->VL_COFINS = 99.58143;
$std->COD_CTA = '1429774778938636';
$std->DESC_COMPL = 'HQHBRO';

try {
$z1610 = new Z1610($std);
echo "{$z1610}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1610|40814340000170|99|6164839762170182|04102018|9,96|38,11|261,3000|99,58|1429774778938636|HQHBRO|<br>';
