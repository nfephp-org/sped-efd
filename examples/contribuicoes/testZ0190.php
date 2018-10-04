<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0190;

$std = new stdClass();
$std->UNID = 'JYTQBH';
$std->DESCR = 'T537XN';

try {
$z0190 = new Z0190($std);
echo "{$z0190}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0190|JYTQBH|T537XN|<br>';
