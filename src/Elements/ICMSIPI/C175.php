<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C175: OPERAÇÕES COM VEÍCULOS NOVOS (CÓDIGO 01 e 55)
 * Este registro deve ser apresentado pelas empresas do segmento automotivo (montadoras-capítulo 87 da NCM,
 * concessionárias e importadoras) para informar os itens relativos
 * aos veículos novos. Deve ser informado nas operações de
 * entrada e saída (exceto pelos contribuintes emissores de NF-e), exceto quando se tratar de operações de exportação.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C175 extends Element
{
    const REG = 'C175';
    const LEVEL = 4;
    const PARENT = 'C170';

    protected $parameters = [
        'IND_VEIC_OPER' => [
            'type' => 'string',
            'regex' => '^(0|1|2|3|9)$',
            'required' => true,
            'info' => 'Indicador do tipo de operação com veículo',
            'format' => ''
        ],
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'CNPJ da Concessionária',
            'format' => ''
        ],
        'UF' => [
            'type' => 'string',
            'regex' => '^AC|AL|AM|AP|BA|CE|DF|ES|GO|MA|MG|MS|MT|PA|PB|PE|PI|PR|RJ|RN|RO|RR|RS|SC|SE|SP|TO$',
            'required' => false,
            'info' => 'Sigla da unidade da federação da Concessionária',
            'format' => ''
        ],
        'CHASSI_VEIC' => [
            'type' => 'string',
            'regex' => '^.{17}$',
            'required' => false,
            'info' => 'Chassi do veículo',
            'format' => ''
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
