<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0140;

$std = new stdClass();
$std->COD_EST = 'IHA3WT5IG1A2RVU2Y3JP9RDTTHCR9EAS8A304FXRWDJZ065R48SR8ARBHYN6';
$std->NOME = 'SZZSS3N6TDYLMIGI5TVQ5UD6AZGHCKQYNP2MWE4LATO81KP97IOTPCMBVX7XE8KTASU3Q35TRSEMMABK8KR5TKKDS1D2ZI58PCTQ';
$std->CNPJ = '40814340000170';
$std->UF = '11';
$std->IE = '246018000';
$std->COD_MUN = 'R3Q5IT2';
$std->IM = '1H18RU';
$std->SUFRAMA = '20JK4DUPL';

try {
$z0140 = new Z0140($std);
echo "{$z0140}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0140|<br>';