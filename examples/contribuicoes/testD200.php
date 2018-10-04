<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D200;

$std = new stdClass();
$std->COD_MOD = '07';
$std->COD_SIT = '00';
$std->SER = 'FFF4';
$std->SUB = '9LJ';
$std->NUM_DOC_INI = '723616793';
$std->NUM_DOC_FIN = '342167277';
$std->CFOP = '4583';
$std->DT_REF = '03102018';
$std->VL_DOC = 0.1;
$std->VL_DESC = 25.42;

try {
$d200 = new D200($std);
echo "{$d200}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D200|<br>';
