<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C460;

$std = new stdClass();
$std->COD_MOD = '2D';
$std->COD_SIT = '01';
$std->NUM_DOC = '622059796';
$std->DT_DOC = '27092018';
$std->VL_DOC = 64.59;
$std->VL_PIS = 25.88;
$std->VL_COFINS = 17.78;
$std->CPF_CNPJ = '52543658629';
$std->NOM_ADQ = 'Nome teste';

try {
    $c460 = new C460($std);
    echo "{$c460}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C460|2D|01|622059796|27092018|64,59|25,88|17,78|52543658629|Nome teste|<br>';
