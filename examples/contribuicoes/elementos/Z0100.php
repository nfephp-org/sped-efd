<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0100;

$std = new stdClass();
$std->NOME = 'Nome de teste';
$std->CPF = '52543658629';
$std->CRC = '739W1MS3XAR0YFQ';
$std->CNPJ = '40814340000170';
$std->CEP = '26370963';
$std->END = 'Endereco de teste';
$std->NUM = '2038';
$std->COMPL = 'apt 202';
$std->BAIRRO = 'Nome do bairro';
$std->FONE = '11998444444';
$std->FAX = '1133334444';
$std->EMAIL = 'teste@teste,com';
$std->COD_MUN = '1134564';

try {
$z0100 = new Z0100($std);
echo "{$z0100}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0100|Nome de teste|52543658629|739W1MS3XAR0YFQ|40814340000170|26370963|Endereco de teste|2038|apt 202|Nome do bairro|11998444444|1133334444|teste@teste,com|1134564|<br>';
