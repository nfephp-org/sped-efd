<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M800;

$std = new stdClass();
$std->CST_COFINS = '99';
$std->VL_TOT_REC = 82.14;
$std->COD_CTA = '4467859477446066';
$std->DESC_COMPL = 'ISG7HW';

try {
$m800 = new M800($std);
echo "{$m800}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M800|99|82,14|4467859477446066|ISG7HW|
<br>';
