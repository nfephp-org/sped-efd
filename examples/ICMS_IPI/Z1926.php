<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1926;

$std = new stdClass();
$std->COD_OR = '123';
$std->VL_OR = 99.90;
$std->DT_VCTO = 12122018;
$std->COD_REC = '97324012634';
$std->NUM_PROC = '454321943847230';
$std->IND_PROC = '9';
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar das obrigações a recolher.';
$std->MES_REF = 102018;

try {
    $b1 = new Z1926($std);
    echo "{$b1}".'<br>';
    echo '|1926|123|99.90|12122018|97324012634|454321943847230|9|Descrição resumida do processo que embasou o lançamento|Descrição complementar das obrigações a recolher.|102018|';
} catch (\Exception $e) {
    echo $e->getMessage();
}