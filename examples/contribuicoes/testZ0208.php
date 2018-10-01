<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0208;

$std = new stdClass();
$std->COD_TAB = 'Q4';
$std->COD_GRU = 'PV';
$std->MARCA_COM = 'RHAC2LZD88H3SVEH8JPCASKS14ZHNGZQDFVX9Q3MM401MFEMF1QSZ1AHSL6E';

try {
$z0208 = new Z0208($std);
echo "{$z0208}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0208|<br>';