<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C175: OPERAÇÕES COM VEÍCULOS NOVOS (CÓDIGO 01 e 55)
 * Este registro deve ser apresentado pelas empresas do segmento automotivo (montadoras-capítulo 87 da NCM,
 * concessionárias e importadoras) para informar os itens relativos
 * aos veículos novos. Deve ser informado nas operações de
 * entrada e saída (exceto pelos contribuintes emissores de NF-e), exceto quando se tratar de operações de exportação.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C175 extends Element implements ElementInterface
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
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
