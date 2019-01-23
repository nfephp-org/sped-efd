<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1010;

$std = new stdClass();
$std->IND_EXP = 'S';
$std->IND_CCRF = 'N';
$std->IND_COMB = 'S';
$std->IND_USINA = 'N';
$std->IND_VA = 'S';
$std->IND_EE = 'N';
$std->IND_CART = 'S';
$std->IND_FORM = 'N';
$std->IND_AER = 'S';


try {
    $b1 = new Z1010($std);
    echo "{$b1}".'<br>';
    echo '|1010|S|N|S|N|S|N|S|N|S|';
} catch (\Exception $e) {
    echo $e->getMessage();
}

