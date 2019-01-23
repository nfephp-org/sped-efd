<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E312;

$std = new stdClass();
$std->NUM_DA = '3402862347';
$std->NUM_PROC = '348597434';
$std->IND_PROC = 9;
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar';

try {
    $b0 = new E312($std);
    echo "{$b0}".'<br>';
    echo '|E312|3402862347|348597434|9|Descrição resumida do processo que embasou o lançamento|Descrição complementar|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
