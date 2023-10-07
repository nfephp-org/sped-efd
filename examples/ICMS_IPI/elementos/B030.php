<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B030;

$std = new stdClass();
$std->COD_MOD = '3D';
$std->SER = '123';
$std->NUM_DOC_INI = 123456789;
$std->NUM_DOC_FIN = 198765432;
$std->DT_DOC = 28092018;
$std->QTD_CANC = 3;
$std->VL_CONT = 40.00;
$std->VL_ISNT_ISS = 10.00;
$std->VL_BC_ISS = 12.00;
$std->VL_ISS = 8.00;
$std->COD_INF_OBS = '213049713585609435746';

try {
    $b0 = new B030($std);
    echo "{$b0}".'<br>';
    echo '|B030|3D|123|123456789|198765432|28092018|3|40.00|10.00|12.00|8.00|213049713585609435746|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
