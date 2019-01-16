<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0005;

$std = new stdClass();
$std->FANTASIA = 'Fantasia';
$std->CEP = '12345678';
$std->END = 'Estrada das lagrimas';
$std->NUM = 'KM 2';
//$std->COMPL = '';
$std->BAIRRO = 'CENTRO';
$std->FONE = '1155552222';
$std->FAX = '1155552222';
$std->EMAIL = 'ciclano@mail.com';

try {
    $b5 = new Z0005($std);
    echo "{$b5}".'<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo '|0005|Fantasia|12345678|Estrada das lagrimas|KM 2||CENTRO|1155552222|1155552222|ciclano@mail.com|<br>';
