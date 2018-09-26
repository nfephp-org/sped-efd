<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C112;

$std = new stdClass();
$std->COD_DA = '1';
$std->UF = 'SP';
$std->COD_AUT = 'SP';
$std->VL_DA = 50.32;
$std->DT_VCTO = '07102017';
$std->DT_PGTO = '07102017';
try {
    $b0 = new C112($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C112|1|SP||SP|50,32|07102017|07102017|<br>';
