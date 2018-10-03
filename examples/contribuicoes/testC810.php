<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C810;

$std = new stdClass();
$std->CFOP = '7383';
$std->VL_ITEM = 35.84;
$std->COD_ITEM = '1473351734265980';
$std->CST_PIS = '99';
$std->VL_BC_PIS = 3.82;
$std->ALIQ_PIS = 390.2;
$std->VL_PIS = 14.90564;
$std->CST_COFINS = '99';
$std->VL_BC_COFINS = 1.89;
$std->ALIQ_COFINS = 939.1;
$std->VL_COFINS = 61.75;
$std->COD_CTA = '0431277967971283';

try {
$c810 = new C810($std);
echo "{$c810}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C810|7383|35,84|1473351734265980|99|3,82|390,2000|14,91|99|1,89|939,1000|61,75|0431277967971283|<br>';
