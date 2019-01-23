<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1922;

$std = new stdClass();
$std->NUM_DA = '12398324920';
$std->NUM_PROC = '2394073283';
$std->IND_PROC = '1';
$std->PROC = 'Descrição resumida do processo que embasou o lançamento';
$std->TXT_COMPL = 'Descrição complementar';

try {
    $b1 = new Z1922($std);
    echo "{$b1}".'<br>';
    echo '|1922|12398324920|2394073283|1|Descrição resumida do processo que embasou o lançamento|Descrição complementar|';
} catch (\Exception $e) {
    echo $e->getMessage();
}