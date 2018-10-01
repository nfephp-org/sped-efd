<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0500;

$std = new stdClass();
$std->DT_ALT = '01102018';
$std->COD_NAT_CC = '03';
$std->IND_CTA = 'S';
$std->NIVEL = '10516';
$std->COD_CTA = '3324SE';
$std->NOME_CTA = 'NomeCTA';
$std->COD_CTA_REF = 'RE340485920';
$std->CNPJ_EST = '40814340000170';

try {
$z0500 = new Z0500($std);
echo "{$z0500}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0500|01102018|03|S|10516|3324SE|NomeCTA|RE340485920|40814340000170|<br>';
