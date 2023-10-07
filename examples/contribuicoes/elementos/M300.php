<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M300;

$std = new stdClass();
$std->COD_CONT = '87';
$std->VL_CONT_APUR_DIFER = 72.99;
$std->NAT_CRED_DESC = '2';
$std->VL_CRED_DESC_DIFER = 64.96;
$std->VL_CONT_DIFER_ANT = 3;
$std->PER_APUR = '375865';
$std->DT_RECEB = '05102018';

try {
$m300 = new M300($std);
echo "{$m300}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M300|87|72,99|2|64,96|3,00|375865|05102018|<br>';
