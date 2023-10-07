<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C396;

$std = new stdClass();
$std->COD_ITEM = '4875694356943';
$std->VL_ITEM = 65.13;
$std->VL_DESC = 67.6;
$std->NAT_BC_CRED = 'ZK';
$std->CST_PIS = '97';
$std->VL_BC_PIS = 33.14;
$std->ALIQ_PIS = 124;
$std->VL_PIS = 87.21;
$std->CST_COFINS = '33';
$std->VL_BC_COFINS = 90.79;
$std->ALIQ_COFINS = 900.9;
$std->VL_COFINS = 37.70;
$std->COD_CTA = '93469384875684';

try {
$c396 = new C396($std);
echo "{$c396}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C396|4875694356943|65,13|67,60|ZK|97|33,14|124,0000|87,21|33|90,79|900,9000|37,70|93469384875684|<br>';
