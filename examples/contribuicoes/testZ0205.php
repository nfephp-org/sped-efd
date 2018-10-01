<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0205;

$std = new stdClass();
$std->DESCR_ANT_ITEM = '206R7J';
$std->DT_INI = '01102018';
$std->DT_FIM = '01102018';
$std->COD_ANT_ITEM = 'JA9EY64FU3J07YA3ICM18PBOBXJQ5AIPYTF0YVUSZNIEE4H819BKGMXBOMI6';

try {
$z0205 = new Z0205($std);
echo "{$z0205}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0205|<br>';