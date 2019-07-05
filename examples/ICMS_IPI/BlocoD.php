<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Blocks\ICMSIPI\BlockD;

try {
    $bD = new BlockD();

    $std = new stdClass();
    $std->IND_MOV = 0;
    $bD->d001($std);

    $std = new stdClass();
    $std->IND_OPER = '0';
    $std->IND_EMIT = '1';
    $std->COD_PART = '5EO0IYTQS';
    $std->COD_MOD = '57';
    $std->COD_SIT = '00';
    $std->SER = '0';
    $std->SUB = null;
    $std->NUM_DOC = '000128501';
    $std->CHV_CTE = '35190104137177000195570000001285011000432321';
    $std->DT_DOC = '03012019';
    $std->DT_A_P = '03012019';
    $std->TP_CT_E = '0';
    $std->CHV_CTE_REF = '';
    $std->VL_DOC = 93.76;
    $std->VL_DESC = 0.00;
    $std->IND_FRT = 0;
    $std->VL_SERV = 93.76;
    $std->VL_BC_ICMS = 0.00;
    $std->VL_ICMS = 0.00;
    $std->VL_NT = 0.00;
    $std->COD_INF = null;
    $std->COD_CTA = null;
    $std->COD_MUN_ORIG = '3549904';
    $std->COD_MUN_DEST = '3518800';
    $bD->d100($std);

    $std = new stdClass();
    $std->CST_ICMS = '000';
    $std->CFOP = '1352';
    $std->ALIQ_ICMS = 0.00;
    $std->VL_OPR = 93.76;
    $std->VL_BC_ICMS = 0.00;
    $std->VL_ICMS = 0.00;
    $std->VL_RED_BC = 0.00;
    $std->COD_OBS = '';
    $bD->d190($std);


    $txt = str_replace("\n", "<br>", $bD->get());
    echo $txt . '<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
