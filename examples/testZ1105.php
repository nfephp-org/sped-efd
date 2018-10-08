<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1105;

$std = new stdClass();
$std->COD_MOD = '55';
$std->SERIE = '123';
$std->NUM_DOC = 123324;
$std->CHV_NFE = '51080701212344000127550010000000981364117781';
$std->DT_DOC = 11112017;
$std->COD_ITEM = '12937243503457869430';


try {
    $b1 = new Z1105($std);
    echo "{$b1}".'<br>';
    echo '|1105|55|123|123324|51080701212344000127550010000000981364117781|11112017|12937243503457869430|';
} catch (\Exception $e) {
    echo $e->getMessage();
}

