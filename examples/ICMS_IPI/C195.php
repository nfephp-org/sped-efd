<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C195;

$std = new stdClass();
$std->COD_OBS = '44342D';
$std->TXT_COMPL = 'Texto de teste';

try {
    $c195 = new C195($std);
    echo "{$c195}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C195|44342D|Texto de teste|<br>';
