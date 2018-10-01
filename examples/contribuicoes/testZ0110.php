<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0110;

$std = new stdClass();
$std->COD_INC_TRIB = 'W';
$std->IND_APRO_CRED = '6';
$std->COD_TIPO_CONT = 'B';
$std->IND_REG_CUM = '1';

try {
$z0110 = new Z0110($std);
echo "{$z0110}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0110|<br>';