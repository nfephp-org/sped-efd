<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B350;

$std = new stdClass();
$std->COD_CTD = '21837094738973';
$std->CTA_ISS = '1209387439687435';
$std->CTA_COSIF = 12345678;
$std->QTD_OCOR = 3;
$std->COD_SERV = 1234;
$std->VL_CONT = 120.00;
$std->VL_BC_ISS = 110.00;
$std->ALIQ_ISS = 5;
$std->VL_ISS = 5.50;
$std->COD_INF_OBS = '12309128389456503972916982';

try {
    $b0 = new B350($std);
    echo "{$b0}".'<br>';
    echo '|B350|21837094738973|1209387439687435|12345678|3|1234|120.00|110.00|5|5.50|12309128389456503972916982|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}