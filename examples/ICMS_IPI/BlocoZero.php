<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use stdClass;
use NFePHP\EFD\Blocks\ICMSIPI\Block0;

//grava json das propriedades dos elementos dos blocos para a versão 017
$b = new Block0('017');
$std = new stdClass();
foreach ($b->elements as $key => $element) {
    try {
        $b->$key($std);
    } catch (\Exception $e) {
    }
}


try {
    $b0 = new Block0();

     //0000 Obrigatório [1:1]
    //Abertura do Arquivo Digital e Identificação da entidade
    $std = new stdClass();
    $std->cod_ver = '001';
    $std->cod_fin = 0;
    $std->dt_ini = '01062008';
    $std->dt_fin = '30062008';
    $std->nome = 'ARMSTRONG BRASIL EQUIPAMENTOS IND.LTDA';
    $std->cnpj = '00258807000129';
    //$std->cpf = '12345678901';
    $std->uf = 'SP';
    $std->ie = '206084839119';
    $std->cod_mun = 3550308;
    //$std->im = '';
    //$std->suframa = '';
    $std->ind_perfil = 'B';
    $std->ind_ativ = 0;
    $b0->z0000($std);

    //0001 Obrigatório
    //Abertura do Bloco 0
    $std = new stdClass();
    $std->ind_mov = 1;
    $b0->z0001($std);

    //0005 Obrigatório
    //Dados Complementares da entidade
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
    $b0->z0005($std);

    //0015 Opcional deve ser incluso apenas se existir
    //Dados do Contribuinte Substituto ou Responsável pelo ICMS Destino
    $std = new stdClass();
    $std->uf_st = 'PR';
    $std->ie_st = '12345678901234';
    $b0->z0015($std);

    //0100 Obrigatório
    //Dados do Contabilista
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
    $b0->z0100($std);

    //0150 Opcional
    //Tabela de Cadastro do Participante
    $std = new stdClass();
    $std->COD_PART = '000123';
    $std->NOME = 'Fundo de Quintal Ltda';
    $std->COD_PAIS = '01058';
    $std->CNPJ = '12345678901234';
    //$std->CPF = '12345678901';
    $std->IE = '12345678901234';
    $std->COD_MUN = '0123456';
    //$std->SUFRAMA = null;
    $std->END = 'Rua UM';
    $std->NUM = 'N.1';
    $std->COMPL = 'Sala 1';
    $std->BAIRRO = 'Um de Dois';
    $b0->z0150($std);

    $std = new stdClass();
    $std->DT_ALT = '12082018';
    $std->NR_CAMPO = '08';
    $std->CONT_ANT = '3514536'; //campo 8 COD_MUN do registro 0150
    $b0->z0175($std);

    $std = new stdClass();
    $std->UNID = 'mts';
    $std->DESCR = 'metros';
    $b0->z0190($std);
    $std = new stdClass();
    $std->UNID = 'kg';
    $std->DESCR = 'quilogramas';
    $b0->z0190($std);
    $std = new stdClass();
    $std->UNID = 'un';
    $std->DESCR = 'unidade';
    $b0->z0190($std);

    $std = new stdClass();
    $std->COD_ITEM = '123456';
    $std->DESCR_ITEM = 'Produto descrito na nota fiscal';
    $std->COD_BARRA = '123456890123';
    //$std->COD_ANT_ITEM = '123456'; //se existir declarar em 0205
    $std->UNID_INV = 'KG';
    $std->TIPO_ITEM = '04';
    $std->COD_NCM = '12345678';
    $std->EX_IPI = '01';
    $std->COD_GEN = '12';
    //$std->COD_LST = '25.25'; ou esse ou NCM
    $std->ALIQ_ICMS = 18;
    $std->CEST = '1234567';
    $b0->z0200($std);

    $std = new stdClass();
    $std->DESCR_ANT_ITEM = 'Produto anterior descrito na nota fiscal';
    $std->DT_INI = '01012005';
    $std->DT_FIM = '01052008';
    $std->COD_ANT_ITEM = '654321';
    $b0->z0205($std);

    $txt = str_replace("\n", "<br>", $b0->get());
    echo $txt.'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
