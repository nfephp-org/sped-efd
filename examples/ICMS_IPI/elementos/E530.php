<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E530;

$std = new stdClass();
$std->IND_AJ = '0';
$std->VL_AJ = 0.80;
$std->COD_AJ = '001';
$std->IND_DOC = '3';
$std->NUM_DOC = '23080234632701';
$std->DESCR_AJ = 'Descrição detalhada do ajuste, com citação dos documentos fiscais.';

try {
    $b0 = new E530($std);
    echo "{$b0}".'<br>';
    echo '|E530|0|0.80|001|3|23080234632701|Descrição detalhada do ajuste, com citação dos documentos fiscais.|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
