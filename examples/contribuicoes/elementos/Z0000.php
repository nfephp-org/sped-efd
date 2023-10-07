<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0000;

$std = new stdClass();
$std->COD_VER = '454';
$std->TIPO_ESCRIT = '0';
$std->IND_SIT_ESP = '2';
$std->NUM_REC_ANTERIOR = 'GHFNH8YT111G5SZQLL7QFK98WJ6XIMBKGOSPLMNU3';
$std->DT_INI = '01102018';
$std->DT_FIN = '01102018';
$std->NOME = 'Nome de Teste';
$std->CNPJ = '40814340000170';
$std->UF = '26';
$std->COD_MUN = '1235456';
$std->SUFRAMA = 'QKR090AD5';
$std->IND_NAT_PJ = '04';
$std->IND_ATIV = '1';

try {
$z0000 = new Z0000($std);
echo "{$z0000}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0000|454|0|2|GHFNH8YT111G5SZQLL7QFK98WJ6XIMBKGOSPLMNU3|01102018|01102018|Nome de Teste|40814340000170|26|1235456|QKR090AD5|04|1|<br>';
