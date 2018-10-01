<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0000;

$std = new stdClass();
$std->COD_VER = 'P5J';
$std->TIPO_ESCRIT = '0';
$std->IND_SIT_ESP = '2';
$std->NUM_REC_ANTERIOR = 'GHFNH8YT111G5SZQLL7QFK98WJ6XIMBKGOSPLMNU3';
$std->DT_INI = '01102018';
$std->DT_FIN = '01102018';
$std->NOME = 'A2LW7XIZPA9QHROLRV6PZWAT5D48J1LI9M1A031W0SJJKSEPJFHBJLKIRVGH6BELY1LW40JCAV83ASMSR1O9KTTGFEBPH9HG5V7O';
$std->CNPJ = '40814340000170';
$std->UF = '26';
$std->COD_MUN = 'VJ89CST';
$std->SUFRAMA = 'QKR090AD5';
$std->IND_NAT_PJ = '64';
$std->IND_ATIV = '7';

try {
$z0000 = new Z0000($std);
echo "{$z0000}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0000|<br>';