<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C501;

$std = new stdClass();
$std->CST_PIS = '66';
$std->VL_ITEM = 93.55;
$std->NAT_BC_CRED = '02';
$std->VL_BC_PIS = 5.27;
$std->ALIQ_PIS = 543.3;
$std->VL_PIS = 79.45;
$std->COD_CTA = '9347693487563';

try {
$c501 = new C501($std);
echo "{$c501}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C501|66|93,55|02|5,27|543,3000|79,45|9347693487563|<br>';
