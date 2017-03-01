<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include '../bootstrap.php';

$blocoK = new NFePHP\EFD\Blocos\Producao();


$dados = ['dtIni' => '01012016', 'dtFim' => '31012016'];
$ret = $blocoK->periodoApuracao($dados);

$dados = [
    'dtFim' => '31012016',
    'codigo' => '2104BCB00',
    'qtd' => '125,45',
    'indicador' => '0',
    'participante' => ''
];
$ret = $blocoK->estoque($dados);
$dados = [
    'dtFim' => '31012016',
    'codigo' => '2555BCB01',
    'qtd' => '2133,00',
    'indicador' => '0',
    'participante' => ''
];
$ret = $blocoK->estoque($dados);


$ret = $blocoK->render();
echo "<pre>";
print_r($ret);
echo "</pre>";

var_dump($blocoK->save());

var_dump($blocoK);
echo "<BR><BR><BR>";