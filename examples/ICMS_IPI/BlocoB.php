<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Blocks\ICMSIPI\BlockB;

//grava json das propriedades dos elementos dos blocos para a versão 017
$bC = new BlockB('017');
$std = new stdClass();

foreach ($bC->elements as $key => $element) {
    try {
        $bC->$key($std);
    } catch (\Exception $e) {
    }
}


