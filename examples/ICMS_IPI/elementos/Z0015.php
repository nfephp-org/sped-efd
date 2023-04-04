<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0015;

$std = new stdClass();
$std->uf_st = 'PR';
$std->ie_st = '12345678901234';

try {
    $b15 = new Z0015($std);
    echo "{$b15}".'<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo '|0015|PR|12345678901234|<br>';
