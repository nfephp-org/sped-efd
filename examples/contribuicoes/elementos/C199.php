<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C199;

$std = new stdClass();
$std->COD_DOC_IMP = '1';
$std->NUM_DOCIMP = 'O8I8DG25Q1';
$std->VL_PIS_IMP = 37.38;
$std->VL_COFINS_IMP = 47.37;
$std->NUM_ACDRAW = '023463476578433';

try {
$c199 = new C199($std);
echo "{$c199}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C199|1|O8I8DG25Q1|37,38|47,37|023463476578433|<br>';
