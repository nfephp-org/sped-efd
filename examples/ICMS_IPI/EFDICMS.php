<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Blocks\ICMSIPI\Block0;
use NFePHP\EFD\Blocks\ICMSIPI\Block1;
use NFePHP\EFD\Blocks\ICMSIPI\BlockH;
use NFePHP\EFD\EFDICMS;

try {

    $efd = new EFDICMS();

    //Construção do Bloco 0 - Bloco Inicial
    //IMPORTANTE: a ORDEM afeta o resultado portanto é muito importante
    //carregar os elementos na ordem correta
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

    //adicionando o bloco 0 ao EFD
    $efd->add($b0);


    $bH = new BlockH();

    $std = new stdClass();
    $std->IND_MOV = 0;
    $bH->h001($std);

    $std = new stdClass();
    $std->DT_INV = '31102017';
    $std->VL_INV = 3457892.939392882;
    $std->MOT_INV = '01';
    $bH->h005($std);

    $std = new stdClass();
    $std->COD_ITEM = 'ABC230';
    $std->UNID = 'KG';
    $std->QTD = 1234.50;
    $std->VL_UNIT = 29.33;
    $std->VL_ITEM = 36207.885;
    $std->IND_PROP = 0;
    //$std->COD_PART = '12345678901234';
    //$std->TXT_COMPL = 'Texto complementar';
    //$std->COD_CTA = 'código da conta seilá';
    //$std->VL_ITEM_IR = 12345.987;
    $bH->h010($std);

    $std = new stdClass();
    $std->CST_ICMS = '123';
    $std->BC_ICMS = 36207.885;
    $std->VL_ICMS = 6517.4193;
    $bH->h020($std);

    $std = new stdClass();
    $std->COD_ITEM = '230KCC';
    $std->UNID = 'KG';
    $std->QTD = 2.50;
    $std->VL_UNIT = 1009.25;
    $std->VL_ITEM = 2523.125;
    $std->IND_PROP = 1;
    $std->COD_PART = '12345678901234';
    $std->TXT_COMPL = 'Texto complementar';
    $std->COD_CTA = 'código da conta seilá';
    $std->VL_ITEM_IR = 12345.987;
    $bH->h010($std);

    //adicionando o bloco 0 ao EFD
    $efd->add($bH);

    $b1 = new Block1;

    $std = new \stdClass;
    $std->IND_MOV = '0';
    $b1->z1001($std);

    $std = new \stdClass;
    $std->IND_EXP = 'N';
    $std->IND_CCRF = 'N';
    $std->IND_COMB = 'N';
    $std->IND_USINA = 'N';
    $std->IND_VA = 'N';
    $std->IND_EE = 'N';
    $std->IND_CART = 'N';
    $std->IND_FORM = 'N';
    $std->IND_AER = 'N';
    $std->IND_GIAF1 = 'N';
    $std->IND_GIAF3 = 'N';
    $std->IND_GIAF4 = 'N';
    $std->IND_REST_RESSARC_COMPL_ICMS = 'N';
    $b1->z1010($std);

    $std = new stdClass();
    $std->COD_PART_IP = '000123';
    $std->COD_PART_IT = null;
    $std->TOT_VS = 100;
    $std->TOT_ISS = 120;
    $std->TOT_OUTROS = 20;
    $b1->z1601($std);

    $efd->add($b1);

    //recuperar os dados em tela
    echo str_replace("\n", "<br>", $efd->get()) . '<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
