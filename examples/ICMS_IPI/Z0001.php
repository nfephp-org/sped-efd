<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0001;

$std = new stdClass();
$std->ind_mov = '2';

$b1 = new Z0001($std);

echo "<H2>Elemento 0001</H2>";
echo "{$b1}" . '<br>';
echo '|0001|1|';

echo "<H2>Erros</H2>";
echo "<pre>";
print_r($b1->errors);
echo "</pre>";
