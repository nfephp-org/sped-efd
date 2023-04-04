<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M700;

$std = new stdClass();
$std->REG = 'XUQI';
$std->COD_CONT = '49';
$std->VL_CONT_APUR_DIFER = 38.85;
$std->NAT_CRED_DESC = '2';
$std->VL_CRED_DESC_DIFER = 59.27;
$std->VL_CONT_DIFER_ANT = 3;
$std->PER_APUR = '367339';
$std->DT_RECEB = '05102018';

try {
$m700 = new M700($std);
echo "{$m700}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M700|XUQI|49|38,85|2|59,27|3,00|367339|05102018|
<br>';
