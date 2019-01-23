<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1370;

$std = new stdClass();
$std->NUM_BICO = 123;
$std->COD_ITEM = '92738910';
$std->NUM_TANQUE = '990';

try {
    $b1 = new Z1370($std);
    echo "{$b1}".'<br>';
    echo '|1370|123|92738910|990|';
} catch (\Exception $e) {
    echo $e->getMessage();
}