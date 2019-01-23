<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1010;

$std = new stdClass();
$std->NUM_PROC = 'O3GQ80NH6CK94VQ0OTDW';
$std->ID_SEC_JUD = 'GC45YC';
$std->ID_VARA = 'K5';
$std->IND_NAT_ACAO = '01';
$std->DESC_DEC_JUD = 'Descricao';
$std->DT_SENT_JUD = '04102018';

try {
$z1010 = new Z1010($std);
echo "{$z1010}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1010|O3GQ80NH6CK94VQ0OTDW|GC45YC|K5|01|Descricao|04102018|<br>';
