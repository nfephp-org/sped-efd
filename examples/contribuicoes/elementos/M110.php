<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M110;

$std = new stdClass();
$std->IND_AJ = '1';
$std->VL_AJ = 7.34;
$std->COD_AJ = '96';
$std->NUM_DOC = 'PUAN7J';
$std->DESCR_AJ = 'M5UMKP';
$std->DT_REF = '05102018';

try {
    $m110 = new M110($std);
    echo "{$m110}" . '<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|M110|1|7,34|96|PUAN7J|M5UMKP|05102018|
|<br>';
