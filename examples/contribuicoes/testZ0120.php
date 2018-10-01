<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0120;

$std = new stdClass();
$std->REG = 'ZO3H';
$std->MES_REFER = 'J6753J';
$std->INF_COMP = 'U6GWMSJASGBPFJTOF4WPTGSZHTJCEUMSSVWVHTR3XFVW10BKUYN845C1KCWA6ZYTV93F4GMAIACSLNGJKQ2LO3PEVW';

try {
$z0120 = new Z0120($std);
echo "{$z0120}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0120|<br>';