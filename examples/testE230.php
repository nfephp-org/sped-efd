<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E230;

$std = new stdClass();
$std->NUM_DA = '3402862347';
$std->NUM_PROC = '348597434';
$std->IND_PROC = 9;
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar';

try {
    $b0 = new E230($std);
    echo "{$b0}".'<br>';
    echo '|E230|3402862347|348597434|9|Descrição resumida do processo que embasou o lançamento|Descrição complementar|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
