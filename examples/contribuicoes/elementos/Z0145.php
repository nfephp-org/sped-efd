<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0145;

$std = new stdClass();
$std->COD_INC_TRIB = '1';
$std->VL_REC_TOT = 91.10;
$std->VL_REC_ATIV = 41.22;
$std->VL_REC_DEMAIS_ATIV = 78.92;
$std->INFO_COMPL = 'Informacao';

try {
$z0145 = new Z0145($std);
echo "{$z0145}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0145|1|91,10|41,22|78,92|Informacao|<br>';
