<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M225;

$std = new stdClass();
$std->DET_VALOR_AJ = 212.5;
$std->CST_PIS = '99';
$std->DET_BC_CRED = 742.5;
$std->DET_ALIQ = 432.7;
$std->DT_OPER_AJ = '05102018';
$std->DESC_AJ = 'RRA04F';
$std->COD_CTA = '1467780623130778';
$std->INFO_COMPL = '6F9FSX';

try {
$m225 = new M225($std);
echo "{$m225}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M225|212,50|99|742,500|432,7000|05102018|RRA04F|1467780623130778|6F9FSX|
<br>';
