<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0110;

$std = new stdClass();
$std->COD_INC_TRIB = '3';
$std->IND_APRO_CRED = '1';
$std->COD_TIPO_CONT = '2';
$std->IND_REG_CUM = '';

try {
$z0110 = new Z0110($std);
echo "{$z0110}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0110|3|1|2||<br>';
