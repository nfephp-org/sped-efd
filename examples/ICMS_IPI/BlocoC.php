<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Blocks\ICMSIPI\BlockC;

$bC = new BlockC('017');
$std = new stdClass();

foreach ($bC->elements as $key => $element) {
    try {
        $bC->$key($std);
    } catch (\Exception $e) {
    }
}


