<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0100;

$std = new stdClass();
$std->NOME = 'Ciclano da Silva';
$std->CPF = '00199745866';
$std->CRC = '12345678';
$std->CNPJ = '12345678901234';
$std->CEP = '04055000';
$std->END = 'Rua da Virada';
$std->NUM = 'S/N';
$std->COMPL = '5o andar';
$std->BAIRRO = 'Fundão';
$std->FONE = '3512345588';
$std->FAX = '3512345589';
$std->EMAIL = 'ciclano@mail.com.br';
$std->COD_MUN = '0123456';

try {
    $b100 = new Z0100($std);
    echo "{$b100}".'<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo '|0100|Ciclano da Silva|00199745866|12345678|12345678901234|04055000|Rua da Virada|S/N|5o andar|Fundão|3512345588|3512345589|ciclano@mail.com.br|0123456|<br>';
