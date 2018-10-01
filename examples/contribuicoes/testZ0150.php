<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0150;

$std = new stdClass();
$std->COD_PART = '3323443';
$std->NOME = 'Nome completo';
$std->COD_PAIS = '01058';
$std->CNPJ = '40814340000170';
$std->CPF = '52543658629';
$std->IE = '246018000';
$std->COD_MUN = '2700102';
$std->SUFRAMA = 'RT84YVEKX';
$std->END = 'Endereco';
$std->NUM = '3029';
$std->COMPL = 'Complemento';
$std->BAIRRO = 'Bairro';

try {
$z0150 = new Z0150($std);
echo "{$z0150}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0150|3323443|Nome completo|01058|40814340000170|52543658629|246018000|2700102|RT84YVEKX|Endereco|3029|Complemento|Bairro|<br>';
