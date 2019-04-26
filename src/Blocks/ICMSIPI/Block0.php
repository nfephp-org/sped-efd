<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco 0 (inicial)
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * NOTA: usada a letra z no inicio do elemento devido ao fato de não poder chamar classes
 * apenas com numeros e também para não confundir os com elementos do bloco B
 *
 * @method Elements\Z0000 z0000(\stdClass $std) Constructor element 0000
 * @method Elements\Z0001 z0001(\stdClass $std) Constructor element 0001
 * @method Elements\Z0005 z0005(\stdClass $std) Constructor element 0005
 * @method Elements\Z0100 z0100(\stdClass $std) Constructor element 0100
 * @method Elements\Z0150 z0150(\stdClass $std) Constructor element 0150
 * @method Elements\Z0175 z0175(\stdClass $std) Constructor element 0175
 * @method Elements\Z0190 z0190(\stdClass $std) Constructor element 0190
 * @method Elements\Z0200 z0200(\stdClass $std) Constructor element 0200
 * @method Elements\Z0205 z0205(\stdClass $std) Constructor element 0205
 * @method Elements\Z0206 z0206(\stdClass $std) Constructor element 0206
 * @method Elements\Z0210 z0210(\stdClass $std) Constructor element 0210
 * @method Elements\Z0220 z0220(\stdClass $std) Constructor element 0220
 * @method Elements\Z0300 z0300(\stdClass $std) Constructor element 0300
 * @method Elements\Z0305 z0305(\stdClass $std) Constructor element 0305
 * @method Elements\Z0400 z0400(\stdClass $std) Constructor element 0400
 * @method Elements\Z0450 z0450(\stdClass $std) Constructor element 0450
 * @method Elements\Z0460 z0460(\stdClass $std) Constructor element 0460
 * @method Elements\Z0600 z0600(\stdClass $std) Constructor element 0600
 */
final class Block0 extends Block implements BlockInterface
{
    const TOTAL = '0990';

    private $regversion;
    
    public $fieldorder = [
        '0000' => [0 => [1 => 'REG',2=>'COD_VER',3=>'COD_FIN',4=>'DT_INI',5=>'DT_FIN',6=>'NOME',7=>'CNPJ',8=>'CPF',9=>'UF',10=>'IE',11=>'COD_MUN',12=>'IM',13=>'SUFRAMA',14=>'IND_PERFIL',15=>'IND_ATIV']]
        '0001' => [0 => [1 => 'REG',2=>'IND_MOV']]
        '0005' => [0 => [1 => 'REG',2=>'FANTASIA',3=>'CEP',4=>'END',5=>'NUM',6=>'COMPL',7=>'BAIRRO',8=>'FONE',9=>'FAX',10=>'EMAIL']]
        '0015' => [0 => [1 => 'REG',2=>'UF_ST',3=>'IE_ST']]
        '0100' => [0 => [1 => 'REG',2=>'NOME',3=>'CPF',4=>'CRC',5=>'CNPJ',6=>'CEP',7=>'END',8=>'NUM',9=>'COMPL',10=>'BAIRRO',11=>'FONE',12=>'FAX',13=>'EMAIL',14=>'COD_MUN']]
        '0150' => [0 => [1 => 'REG',2=>'COD_PART',3=>'NOME',4=>'COD_PAIS',5=>'CNPJ',6=>'CPF',7=>'IE',8=>'COD_MUN',9=>'SUFRAMA',10=>'END',11=>'NUM',12=>'COMPL',13=>'BAIRRO']]
        '0175' => [0 => [1 => 'REG',2=>'DT_ALT',3=>'NR_CAMPO',4=>'CONT_ANT']]
        '0190' => [0 => [1 => 'REG',2=>'UNID',3=>'DESCR']]
        '0200' => [0 => [1 => 'REG',2=>'COD_ITEM',3=>'DESCR_ITEM',4=>'COD_BARRA',5=>'COD_ANT_ITEM',6=>'UNID_INV',7=>'TIPO_ITEM',8=>'COD_NCM',9=>'EX_IPI',10=>'COD_GEN',11=>'COD_LST',12=>'ALIQ_ICMS',13=>'CEST']]
        '0205' => [0 => [1 => 'REG',2=>'DESCR_ANT_ITEM',3=>'DT_INI',4=>'DT_FIM',5=>'COD_ANT_ITEM']]
        '0206' => [0 => [1 => 'REG',2=>'COD_COMB']]
        '0210' => [0 => [1 => 'REG',2=>'COD_ITEM_COMP',3=>'QTD_COMP',4=>'PERDA']]
        '0220' => [0 => [1 => 'REG',2=>'UNID_CONV',3=>'FAT_CONV']]
        '0300' => [0 => [1 => 'REG',2=>'COD_IND_BEM',3=>'IDENT_MERC',4=>'DESCR_ITEM',5=>'COD_PRNC',6=>'COD_CTA',7=>'NR_PARC']]
        '0305' => [0 => [1 => 'REG',2=>'COD_CCUS',3=>'FUNC',4=>'VIDA_UTIL']]
        '0400' => [0 => [1 => 'REG',2=>'COD_NAT',3=>'DESCR_NAT']]
        '0450' => [0 => [1 => 'REG',2=>'COD_INF',3=>'TXT']]
        '0460' => [0 => [1 => 'REG',2=>'COD_OBS',3=>'TXT']]
        '0500' => [0 => [1 => 'REG',2=>'DT_ALT',3=>'COD_NAT_CC',4=>'IND_CTA',5=>'NIVEL',6=>'COD_CTA',7=>'NOME_CTA']]
        '0600' => [0 => [1 => 'REG',2=>'DT_ALT',3=>'COD_CCUS',4=>'CCUS']]
        '0990' => [0 => [1 => 'REG',2=>'QTD_LIN_0']]
    ];
    
    public $elements = [
        'z0000' => ['class' => Elements\Z0000::class, 'level' => 0, 'type' => 'single'],
        'z0001' => ['class' => Elements\Z0001::class, 'level' => 1, 'type' => 'single'],
        'z0005' => ['class' => Elements\Z0005::class, 'level' => 2, 'type' => 'single'],
        'z0015' => ['class' => Elements\Z0015::class, 'level' => 2, 'type' => 'multiple'],
        'z0100' => ['class' => Elements\Z0100::class, 'level' => 2, 'type' => 'single'],
        'z0150' => ['class' => Elements\Z0150::class, 'level' => 2, 'type' => 'multiple'],
        'z0175' => ['class' => Elements\Z0175::class, 'level' => 3, 'type' => 'multiple'],
        'z0190' => ['class' => Elements\Z0190::class, 'level' => 2, 'type' => 'multiple'],
        'z0200' => ['class' => Elements\Z0200::class, 'level' => 2, 'type' => 'multiple'],
        'z0205' => ['class' => Elements\Z0205::class, 'level' => 3, 'type' => 'multiple'],
        'z0206' => ['class' => Elements\Z0206::class, 'level' => 3, 'type' => 'single'],
        'z0210' => ['class' => Elements\Z0210::class, 'level' => 3, 'type' => 'multiple'],
        'z0220' => ['class' => Elements\Z0220::class, 'level' => 3, 'type' => 'multiple'],
        'z0300' => ['class' => Elements\Z0300::class, 'level' => 2, 'type' => 'multiple'],
        'z0305' => ['class' => Elements\Z0305::class, 'level' => 3, 'type' => 'single'],
        'z0400' => ['class' => Elements\Z0400::class, 'level' => 2, 'type' => 'multiple'],
        'z0450' => ['class' => Elements\Z0450::class, 'level' => 2, 'type' => 'multiple'],
        'z0460' => ['class' => Elements\Z0460::class, 'level' => 2, 'type' => 'multiple'],
        'z0500' => ['class' => Elements\Z0500::class, 'level' => 2, 'type' => 'multiple'],
        'z0600' => ['class' => Elements\Z0600::class, 'level' => 2, 'type' => 'multiple']
    ];
    
    public function __construct($versao='')
    {
        parent::__construct(self::TOTAL);
        
        if ($version!='') {
            switch ($version) {
               case '013': $this->regversion = ['0000'=>0,'0001'=>0,'0005'=>0,'0015'=>0,'0100'=>0,'0150'=>0,'0175'=>0,'0190'=>0,'0200'=>0,'0205'=>0,'0206'=>0,'0210'=>0,'0220'=>0,'0300'=>0,'0305'=>0,'0400'=>0,'0450'=>0,'0460'=>0,'0500'=>0,'0600'=>0,'0990'=>0]
                   break;
               default: $this->regversion = ['0000'=>0,'0001'=>0,'0005'=>0,'0015'=>0,'0100'=>0,'0150'=>0,'0175'=>0,'0190'=>0,'0200'=>0,'0205'=>0,'0206'=>0,'0210'=>0,'0220'=>0,'0300'=>0,'0305'=>0,'0400'=>0,'0450'=>0,'0460'=>0,'0500'=>0,'0600'=>0,'0990'=>0]
                   break;
           }
        }
    }
}
