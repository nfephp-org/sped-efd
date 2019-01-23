<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C165;

$std = new stdClass();
$std->REG = '';
$std->COD_PART = 'NMRSU6RM0DXCKF6SVNAKWJMLAXX4KGAOR1UJFOX9W1PLGDCMXUWHV4DZGHGM';
$std->VEIC_ID = 'LUS0J26';
$std->COD_AUT = '3A';
$std->NR_PASSE = '';
$std->HORA = '170528';
$std->TEMPER = 749;
$std->QTD_VOL = '8053';
$std->PESO_BRT = 409;
$std->PESO_LIQ = 428.8;
$std->NOM_MOT = 'Nome Teste';
$std->CPF = '52543658629';
$std->UF_ID = 'GO';

try {
    $c165 = new C165($std);
    echo "{$c165}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C165|NMRSU6RM0DXCKF6SVNAKWJMLAXX4KGAOR1UJFOX9W1PLGDCMXUWHV4DZGHGM|LUS0J26|3A||170528|749,00|8053|409,00|428,80|Nome Teste|52543658629|GO|<br>';
