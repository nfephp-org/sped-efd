<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C171;

$std = new stdClass();
$std->NUM_TANQUE = 'S1U';
$std->QTDE = '1527';

try {
    $c171 = new C171($std);
    echo "{$c171}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C171|S1U|1527,000|<br>';
