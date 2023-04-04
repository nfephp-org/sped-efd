<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M350;

$std = new stdClass();
$std->VL_TOT_FOL = 98.1;
$std->VL_EXC_BC = 83.26;
$std->VL_TOT_BC = 55.11;
$std->ALIQ_PIS_FOL = 22.6;
$std->VL_TOT_CONT_FOL = 80.22;

try {
$m350 = new M350($std);
echo "{$m350}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M350|98,10|83,26|55,11|22,60|80,22|<br>';
