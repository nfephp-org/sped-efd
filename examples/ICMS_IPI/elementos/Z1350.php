<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1350;

$std = new stdClass();
$std->SERIE = '123434321097';
$std->FABRICANTE = 'Nome do Fabricante da Bomba';
$std->MODELO = 'A2J1239';
$std->TIPO_MEDICAO = '1';

try {
    $b1 = new Z1350($std);
    echo "{$b1}".'<br>';
    echo '|1350|123434321097|Nome do Fabricante da Bomba|A2J1239|1|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
