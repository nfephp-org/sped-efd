<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0035;

$std = new stdClass();
$std->COD_SCP = 'LTH5MUBVKDC5CN';
$std->DESC_SCP = '79PJWU';
$std->INF_COMP = 'LEPPH0';

try {
$z0035 = new Z0035($std);
echo "{$z0035}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0035|<br>';