<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E112;

$std = new stdClass();
$std->NUM_DA = '123456789';
$std->NUM_PROC = '385743443';
$std->IND_PROC = '9';
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar';

try {
    $b0 = new E112($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|E112|123456789|385743443|9|Descrição resumida do processo que embasou o lançamento|Descrição complementar|<br>';