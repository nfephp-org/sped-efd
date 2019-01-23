<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C700;

$std = new stdClass();
$std->COD_MOD = '28';
$std->SER = 'GOSH';
$std->NRO_ORD_INI = '314962130';
$std->NRO_ORD_FIN = '665921271';
$std->DT_DOC_INI = '27092018';
$std->DT_DOC_FIN = '27092018';
$std->NOM_MEST = 'Nome Teste';
$std->CHV_COD_DIG = '43171207364617000135550000000120';

try {
$c700 = new C700($std);
echo "{$c700}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C700|28|GOSH|314962130|665921271|27092018|27092018|Nome Teste|43171207364617000135550000000120|<br>';
