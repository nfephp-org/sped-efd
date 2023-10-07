<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1809;

$std = new stdClass();
$std->NUM_PROC = 'PJ3CTIAF1A2GBACRKYPT';
$std->IND_PROC = '1';

try {
$z1809 = new Z1809($std);
echo "{$z1809}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1809|PJ3CTIAF1A2GBACRKYPT|1|<br>';
