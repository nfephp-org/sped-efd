<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D105;

$std = new stdClass();
$std->IND_NAT_FRT = '0';
$std->VL_ITEM = 90.26;
$std->CST_COFINS = '99';
$std->NAT_BC_CRED = '8S';
$std->VL_BC_COFINS = 62.96;
$std->ALIQ_COFINS = 967;
$std->VL_COFINS = 608.8232;
$std->COD_CTA = '6571984985422007';

try {
$d105 = new D105($std);
echo "{$d105}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D105|0|90,26|99|8S|62,96|967,0000|608,82|6571984985422007|
<br>';
