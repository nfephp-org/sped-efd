<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1200;

$std = new stdClass();
$std->COD_AJ_APUR = '12395678';
$std->SLD_CRED = 120.00;
$std->CRED_APR = 130.50;
$std->CRED_RECEB = 90.00;
$std->CRED_UTIL = 12.00;
$std->SLD_CRED_FIM = 148.50;


try {
    $b1 = new Z1200($std);
    echo "{$b1}".'<br>';
    echo '|1200|12395678|120.00|130.50|90.00|12.00|148.50|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
