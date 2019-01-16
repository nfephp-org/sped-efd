<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0000;

$std = new stdClass();
$std->cod_ver = '001'; 
$std->cod_fin = 0;
$std->dt_ini = '01062008';
$std->dt_fin = '30062008';
$std->nome = 'ARMSTRONG BRASIL EQUIPAMENTOS IND.LTDA';
$std->cnpj = '00258807000129';
//$std->cpf = '';
$std->uf = 'SP';
$std->ie = '206084839119';
$std->cod_mun = 3550308;
//$std->im = '';
//$std->suframa = '';
$std->ind_perfil = 'B';
$std->ind_ativ = 0;

try {
    $b0 = new Z0000($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|0000|001|0|01062008|30062008|ARMSTRONG BRASIL EQUIPAMENTOS IND.LTDA|00258807000129||SP|206084839119|3550308|||B|0|<br>';
