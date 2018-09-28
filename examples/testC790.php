    <?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C790;

$std = new stdClass();
$std->CST_ICMS = '567';
$std->CFOP = '1389';
$std->ALIQ_ICMS = 159.3;
$std->VL_OPR = 57.46;
$std->VL_BC_ICMS = 64.50;
$std->VL_ICMS = 3.40;
$std->VL_BC_ICMS_ST = 18.99;
$std->VL_ICMS_ST = 54.16;
$std->VL_RED_BC = 49.78;
$std->COD_OBS = 'TLFY3I';

try {
$c790 = new C790($std);
echo "{$c790}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C790|567|1389|159,30|57,46|64,50|3,40|18,99|54,16|49,78|TLFY3I|<br>';
