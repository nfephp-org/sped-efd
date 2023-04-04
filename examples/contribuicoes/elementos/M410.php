<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M410;

$std = new stdClass();
$std->NAT_REC = '5';
$std->VL_REC = 2.10;
$std->COD_CTA = '4842909840994130';
$std->DESC_COMPL = '8I4598';

try {
$m410 = new M410($std);
echo "{$m410}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M410|5|2,10|4842909840994130|8I4598|
<br>';
