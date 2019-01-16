<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E316;

$std = new stdClass();
$std->COD_OR = '006';
$std->VL_OR = 90.00;
$std->DT_VCTO = 27102017;
$std->COD_REC = '182763009729';
$std->NUM_PROC = '230356';
$std->IND_PROC = '2';
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar das obrigações recolhidas ou a recolher';
$std->MES_REF = 102018;

try {
    $b0 = new E316($std);
    echo "{$b0}".'<br>';
    echo '|E316|006|90.00|27102017|182763009729|230356|2|Descrição resumida do processo que embasou o lançamento|Descrição complementar das obrigações recolhidas ou a recolher|102018|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
