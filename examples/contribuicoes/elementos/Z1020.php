<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1020;

$std = new stdClass();
$std->NUM_PROC = 'VPTOYISZK514CKMHM8DN';
$std->IND_NAT_ACAO = '01';
$std->DT_DEC_ADM = '04102018';

try {
$z1020 = new Z1020($std);
echo "{$z1020}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1020|VPTOYISZK514CKMHM8DN|01|04102018|<br>';
