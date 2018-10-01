<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0200;

$std = new stdClass();
$std->COD_ITEM = 'GLAX7MLMUWWNUKVYL1DGUXGS78YKFHE7M1PPUZ2TUOFEBP58Y3UDN39F5Q1H';
$std->DESCR_ITEM = 'JMV3P4';
$std->COD_BARRA = 'JP';
$std->COD_ANT_ITEM = '0RTNS27XM4T9ZU8PK4LW3VUK50TC9IRH3CS9QOV9MOD3FQ9FRHXS4FRRFTKQ';
$std->UNID_INV = 'LPFC1S';
$std->TIPO_ITEM = '32';
$std->COD_NCM = 'CSD20WD8';
$std->EX_IPI = '4TX';
$std->COD_GEN = '3W';
$std->COD_LST = 'QBLG';
$std->ALIQ_ICMS = 205.1;

try {
$z0200 = new Z0200($std);
echo "{$z0200}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0200|<br>';