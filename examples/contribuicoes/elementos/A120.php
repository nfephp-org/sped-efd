<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\A120;

$std = new stdClass();
$std->VL_TOT_SERV = 8.82;
$std->VL_BC_PIS = 45.33;
$std->VL_PIS_IMP = 52.2;
$std->DT_PAG_PIS = '01102018';
$std->VL_BC_COFINS = 42.5;
$std->VL_COFINS_IMP = 40.74;
$std->DT_PAG_COFINS = '01102018';
$std->LOC_EXE_SERV = 'M';

try {
$a120 = new A120($std);
echo "{$a120}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|A120|8,82|45,33|52,20|01102018|42,50|40,74|01102018|M|<br>';
