<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M115;

$std = new stdClass();
$std->DET_VALOR_AJ = 875;
$std->CST_PIS = '99';
$std->DET_BC_CRED = 321.8;
$std->DET_ALIQ = 938.6;
$std->DT_OPER_AJ = '05102018';
$std->DESC_AJ = '0XYOLQ';
$std->COD_CTA = '0731939469772590';
$std->INFO_COMPL = 'PSKJ2Z';

try {
$m115 = new M115($std);
echo "{$m115}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M115|875,00|99|321,800|938,6000|05102018|0XYOLQ|0731939469772590|PSKJ2Z|
<br>';
