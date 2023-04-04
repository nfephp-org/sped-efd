<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M505;

$std = new stdClass();
$std->NAT_BC_CRED = 'RO';
$std->CST_COFINS = '99';
$std->VL_BC_COFINS_TOT = 24.69;
$std->VL_BC_COFINS_CUM = 98.66;
$std->VL_BC_COFINS_NC = 4;
$std->VL_BC_COFINS = 27.87;
$std->QUANT_BC_COFINS_TOT = 900.4;
$std->QUANT_BC_COFINS = 263.6;
$std->DESC_CRED = '928AB7YE8QGCT67581XP7DE0G4UIAOW2DDIHW0X2VPJJY5Z8M8R5PQ9ARRLB';

try {
$m505 = new M505($std);
echo "{$m505}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M505|RO|99|24,69|98,66|4,00|27,87|900,400|263,600|928AB7YE8QGCT67581XP7DE0G4UIAOW2DDIHW0X2VPJJY5Z8M8R5PQ9ARRLB|
<br>';
