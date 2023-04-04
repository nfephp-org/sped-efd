<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Blocks\ICMSIPI\BlockK;

$b = new BlockK('017');
$std = new stdClass();

foreach ($b->elements as $key => $element) {
    try {
        $b->$key($std);
    } catch (\Exception $e) {
    }
}


try {
    $bK = new BlockK();

    $std = new stdClass();
    $std->IND_MOV = 0;
    $bK->k001($std);

    $std = new stdClass();
    $std->DT_INI = '30062017';
    $std->DT_FIN = '30112017';
    $bK->k100($std);

    $std = new stdClass();
    $std->DT_EST = '01112016';
    $std->COD_ITEM = '123456';
    $std->QTD = 123.56;
    $std->IND_EST = 0;
    $std->COD_PART = null;
    $bK->k200($std);


    $txt = str_replace("\n", "<br>", $bK->get());
    echo $txt.'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
