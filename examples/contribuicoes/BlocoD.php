<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Blocks\Contribuicoes\BlockD;

$b = new BlockD('006');
$std = new stdClass();

foreach ($b->elements as $key => $element) {
    try {
        $b->$key($std);
    } catch (\Exception $e) {
    }
}


