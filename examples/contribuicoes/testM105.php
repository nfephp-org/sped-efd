<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M105;

$std = new stdClass();
$std->NAT_BC_CRED = 'A9';
$std->CST_PIS = '99';
$std->VL_BC_PIS_TOT = 72.18;
$std->VL_BC_PIS_CUM = 22.2;
$std->VL_BC_PIS_NC = 4;
$std->VL_BC_PIS = 92.95;
$std->QUANT_BC_PIS_TOT = 99.5;
$std->QUANT_BC_PIS = 963;
$std->DESC_CRED = 'NEMRPG6CLGOBD56MB822EH8K6PCVXASFN0H38CAJPYS6HICJM9B953M9S4AB';

try {
$m105 = new M105($std);
echo "{$m105}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M105|A9|99|72,18|22,20|4,00|92,95|99,500|963,000|NEMRPG6CLGOBD56MB822EH8K6PCVXASFN0H38CAJPYS6HICJM9B953M9S4AB|
<br>';
