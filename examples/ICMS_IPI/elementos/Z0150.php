<?php
error_reporting(E_ERROR);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0150;

$std = new stdClass();
$std->COD_PART = '000123';
$std->NOME = 'Fundo de Quintal Ltda';
$std->COD_PAIS = '01112';
$std->CNPJ = '0';
$std->CPF = null;
$std->IE = '';
//$std->COD_MUN = '0123456';
//$std->SUFRAMA = null;
$std->END = 'Rua UM';
$std->NUM = 'N.1';
$std->COMPL = 'Sala 1';
$std->BAIRRO = 'Um de Dois';

try {
    $b150 = new Z0150($std);
    echo "{$b150}".'<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo '|0150|000123|Fundo de Quintal Ltda|105|12345678901234||12345678901234|0123456||Rua UM|N.1|Sala 1|Um de Dois|<br>';
