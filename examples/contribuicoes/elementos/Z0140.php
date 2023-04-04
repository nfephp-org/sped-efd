<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0140;

$std = new stdClass();
$std->COD_EST = 'RRE43';
$std->NOME = 'Nome Estabelecimento';
$std->CNPJ = '40814340000170';
$std->UF = '11';
$std->IE = '246018000';
$std->COD_MUN = '2938437';
$std->IM = '1H18RU';
$std->SUFRAMA = '904385925';

try {
$z0140 = new Z0140($std);
echo "{$z0140}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0140|RRE43|Nome Estabelecimento|40814340000170|11|246018000|2938437|1H18RU|904385925|<br>';
