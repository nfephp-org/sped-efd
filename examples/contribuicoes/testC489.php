<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C489;

$std = new stdClass();
$std->NUM_PROC = 'DTE2HA2B3O2R79H2DJ4E';
$std->IND_PROC = '1';

try {
$c489 = new C489($std);
echo "{$c489}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C489|DTE2HA2B3O2R79H2DJ4E|1|
<br>';
