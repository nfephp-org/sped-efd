<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1620;

$std = new stdClass();
$std->PER_APU_CRED = '972986';
$std->ORIG_CRED = '1';
$std->COD_CRED = '531';
$std->VL_CRED = 93.29;

try {
$z1620 = new Z1620($std);
echo "{$z1620}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1620|972986|1|531|93,29|<br>';
