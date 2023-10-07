<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E116;

$std = new stdClass();
$std->COD_OR = '090';
$std->VL_OR = 800.97;
$std->DT_VCTO = 26102018;
$std->COD_REC = '49435793';
$std->NUM_PROC = '39457202334';
$std->IND_PROC = '2';
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar das obrigações a recolher.';
$std->MES_REF = 102018;

try {
    $b0 = new E116($std);
    echo "{$b0}".'<br>';
    echo '|E116|090|800.97|26102018|49435793|39457202334|2|Descrição resumida do processo que embasou o lançamento|Descrição complementar das obrigações a recolher.|102018|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
