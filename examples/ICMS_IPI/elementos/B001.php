<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B001;

$std = new stdClass();
$std->IND_MOV = '1';


$b0 = new B001($std);

echo "<H2>Elemento B001</H2>";
echo "{$b0}" . '<br>';
echo '|B001|1|<br>';

echo "<H2>Erros</H2>";
echo "<pre>";
print_r($b0->errors);
echo "</pre>";
