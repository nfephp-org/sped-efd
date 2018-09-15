<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Blocks\Elements\ICMSIPI\B0150;

$std = new stdClass();
$std->COD_PART = '000123';
$std->NOME = 'Fundo de Quintal Ltda';
$std->COD_PAIS = '01058';
$std->CNPJ = '12345678901234';
//$std->CPF = null;
$std->IE = '12345678901234';
$std->COD_MUN = '0123456';
//$std->SUFRAMA = null;
$std->END = 'Rua UM';
$std->NUM = 'N.1';
$std->COMPL = 'Sala 1';
$std->BAIRRO = 'Um de Dois';

try {
    $b150 = new B0150($std);
    echo "{$b150}".'<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo '|0150|000123|Fundo de Quintal Ltda|105|12345678901234||12345678901234|0123456||Rua UM|N.1|Sala 1|Um de Dois|<br>';
