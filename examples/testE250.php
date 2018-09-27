<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E250;

$std = new stdClass();
$std->COD_OR = '999';
$std->VL_OR = 293.90;
$std->DT_VCTO = 26102018;
$std->COD_REC = '32842940341';
$std->NUM_PROC = '1230983467832';
$std->IND_PROC = '1';
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar das obrigações a recolher';
$std->MES_REF = 102018;

try {
    $b0 = new E250($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|E250|999|293.90|26102018|32842940341|1230983467832|1|Descrição resumida do processo que embasou o lançamento|Descrição complementar das obrigações a recolher|102018|<br>';