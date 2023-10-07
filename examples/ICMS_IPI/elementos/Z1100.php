<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1100;

$std = new stdClass();
$std->IND_DOC = 1;
$std->NRO_DE = '23432760237651';
$std->DT_DE = 12122017;
$std->NAT_EXP = 1;
$std->NRO_RE = 12316499840;
$std->DT_RE = 15122017;
$std->CHC_EMB = '12345678';
$std->DT_CHC = 19122017;
$std->DT_AVB = 16122017;
$std->TP_CHC = 10;
$std->PAIS = '055';


try {
    $b1 = new Z1100($std);
    echo "{$b1}".'<br>';
    echo '|1100|1|23432760237651|12122017|1|12316499840|15122017|12345678|19122017|16122017|10|055|';
} catch (\Exception $e) {
    echo $e->getMessage();
}

