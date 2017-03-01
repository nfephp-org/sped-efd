<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use stdClass;
use NFePHP\EFD\Bloco;
use InvalidArgumentException;

$std = new stdClass();
$std->codver = '001'; 
$std->codfin = '0';
$std->dtini = '01062008';
$std->dtfin = '30062008';
$std->name = 'ARMSTRONG BRASIL EQUIPAMENTOS IND.LTDA';
$std->cnpj = '00258807000129';
$std->cpf = '';
$std->uf = 'SP';
$std->ie = '206084839119';
$std->codmun = '3550308';
$std->im = '';
$std->suframa = '';
$std->indperfil = 'B';
$std->indativ = '0';

try {
    $b0 = Bloco::B000($std);
    echo "{$b0}".'<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}    

echo '|0000|001|0|01062008|30062008|ARMSTRONG BRASIL EQUIPAMENTOS IND.LTDA|00258807000129||SP|206084839119|3550308|||B|0|<br>';

foreach($b0->errors as $error) {
    echo "ERRO: $error <br>";
}
