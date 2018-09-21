<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Blocks\ICMSIPI\BlockH;

try {
    $bH = new BlockH();
    
    $std = new stdClass();
    $std->IND_MOV = 0; 
    $bH->h001($std);
    
    $std = new stdClass();
    $std->DT_INV = '31102017'; 
    $std->VL_INV = 3457892.939392882;
    $std->MOT_INV = '01';
    $bH->h005($std);
    
    $std = new stdClass();
    $std->COD_ITEM = 'ABC230';
    $std->UNID = 'KG';
    $std->QTD = 1234.50;
    $std->VL_UNIT = 29.33;
    $std->VL_ITEM = 36207.885;
    $std->IND_PROP = 0;
    //$std->COD_PART = '12345678901234';
    //$std->TXT_COMPL = 'Texto complementar';
    //$std->COD_CTA = 'código da conta seilá';
    //$std->VL_ITEM_IR = 12345.987;
    $bH->h010($std);
    
    $std = new stdClass();
    $std->CST_ICMS = '123';
    $std->BC_ICMS = 36207.885;
    $std->VL_ICMS = 6517.4193;
    $bH->h020($std);
    
    $std = new stdClass();
    $std->COD_ITEM = '230KCC';
    $std->UNID = 'KG';
    $std->QTD = 2.50;
    $std->VL_UNIT = 1009.25;
    $std->VL_ITEM = 2523.125;
    $std->IND_PROP = 1;
    $std->COD_PART = '12345678901234';
    $std->TXT_COMPL = 'Texto complementar';
    $std->COD_CTA = 'código da conta seilá';
    $std->VL_ITEM_IR = 12345.987;
    $bH->h010($std);
    
    $txt = str_replace("\n", "<br>", $bH->get());
    echo $txt.'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
