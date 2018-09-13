<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Blocks\Block0;
use NFePHP\EFD\EFDICMS;

try {
    
    $efd = new EFDICMS();
    
    $b0 = new Block0();
    
    //0000
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
    $b0->b0000($std);
    
    //0001
    $std = new stdClass();
    $std->ind_mov = 1; 
    $b0->b0001($std);
    
    //0005
    $std = new stdClass();
    $std->FANTASIA = 'Fantasia';
    $std->CEP = '12345678';
    $std->END = 'Estrada das lagrimas';
    $std->NUM = 'KM 2';
    //$std->COMPL = '';
    $std->BAIRRO = 'CENTRO';
    $std->FONE = '1155552222';
    $std->FAX = '1155552222';
    $std->EMAIL = 'ciclano@mail.com';
    $b0->b0005($std);
    
    //0015
    $std = new stdClass();
    $std->uf_st = 'PR';
    $std->ie_st = '12345678901234';
    $b0->b0015($std);
    
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
    $b0->b0100($std);
    
    //adicionando o bloco 0 ao EFD
    $efd->add($b0);
    //recuperar os dados em tela
    echo str_replace("\n", "<br>", $efd->get()).'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
