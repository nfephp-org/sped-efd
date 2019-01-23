<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M810;

$std = new stdClass();
$std->NAT_REC = '4';
$std->VL_REC = 46.18;
$std->COD_CTA = '87';
$std->DESC_COMPL = 'J340XN';

try {
$m810 = new M810($std);
echo "{$m810}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M810|4|46,18|87|J340XN|
<br>';
