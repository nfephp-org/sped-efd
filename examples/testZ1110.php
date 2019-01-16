<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1110;

$std = new stdClass();
$std->COD_PART = '12309213802976570';
$std->COD_MOD = '1B';
$std->SER = '1234';
$std->NUM_DOC = 1233;
$std->DT_DOC = 12122017;
$std->CHV_NFE = '51080701212344000127550010000000981364117781';
$std->NR_MEMO = 123230937;
$std->QTD = 2000;
$std->UNID = '123210';


try {
    $b1 = new Z1110($std);
    echo "{$b1}".'<br>';
    echo '|1110|12309213802976570|1B|1234|1233|12122017|51080701212344000127550010000000981364117781|123230937|2000|123210|';
} catch (\Exception $e) {
    echo $e->getMessage();
}

