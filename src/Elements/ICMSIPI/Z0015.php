<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Elemento 0015 do Bloco 0
 * REGISTRO 0015: DADOS DO CONTRIBUINTE SUBSTITUTO OU RESPONSÁVEL PELO ICMS DESTINO
 * Registro obrigatório para todos os contribuintes substitutos tributários do
 * ICMS, conforme definidos na legislação pertinente.  Deve  ser  gerado  um
 * registro  para  cada  uma  das  inscrições  estaduais  cadastradas  nas
 * unidades  federadas  dos contribuintes substituídos, ainda que não tenha
 * tido movimentação no período, ficando obrigado à apresentação dos registros
 * E200, E300 e respectivos filhos.
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0015 extends Element
{
    const REG = '0015';
    const LEVEL = 2;
    const PARENT = '0005';

    protected $parameters = [
        'UF_ST' => [
            'type'     => 'string',
            'regex'    => '^[A-Z]{2}$',
            'required' => true,
            'info'     => 'Sigla da unidade da federação do contribuinte '
            . 'substituído ou unidade de federação do consumidor final não '
            . 'contribuinte - ICMS Destino EC 87/15.',
            'format'   => ''
        ],
        'IE_ST' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2,14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual do contribuinte substituto na '
            . 'unidade da  federação  do  contribuinte  substituído ou unidade '
            . 'de federação do consumidor final não contribuinte - ICMS Destino '
            . 'EC 87/15.',
            'format'   => ''
        ]
    ];

    /**
     * Constructor
     * @param stdClass $std
     * @param stdClass $vigencia
     */
    public function __construct(stdClass $std, stdClass $vigencia = null)
    {
        parent::__construct(self::REG, $vigencia);
        $this->replaceParams( self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }
}
