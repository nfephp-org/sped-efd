<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0035;

$std = new stdClass();
$std->COD_SCP = '63402238000163';
$std->DESC_SCP = 'Desricao teste';
$std->INF_COMP = 'Informacao';

try {
$z0035 = new Z0035($std);
echo "{$z0035}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0035|63402238000163|Desricao teste|Informacao|<br>';
