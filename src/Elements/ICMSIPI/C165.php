<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C165: OPERAÇÕES COM COMBUSTÍVEIS (CÓDIGO 01).
 * Este registro deve ser apresentado pelas empresas do segmento de combustíveis (distribuidoras, refinarias,
 * revendedoras) em operações de saída. Postos de combustíveis não devem apresentar este registro.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C165 extends Element implements ElementInterface
{
    const REG = 'C165';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^[A-z0-9]{1,60}$',
            'required' => false,
            'info' => 'Código do participante',
            'format' => ''
        ],
        'VEIC_ID' => [
            'type' => 'string',
            'regex' => '^[A-Z]{3}[\d]{1}[\dA-Z]{1}[\d]{2}$',
            'required' => false,
            'info' => 'Placa de identificação do veículo automotor',
            'format' => ''
        ],
        'COD_AUT' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Código da autorização fornecido pela SEFAZ (combustíveis)',
            'format' => ''
        ],
        'NR_PASSE' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Código da autorização fornecido pela SEFAZ (combustíveis)',
            'format' => ''
        ],
        'HORA' => [
            'type' => 'numeric',
            'regex' => '^(?:[01]\d|2[0123])(?:[012345]\d)(?:[012345]\d)$',
            'required' => false,
            'info' => 'Código da autorização fornecido pela SEFAZ (combustíveis)',
            'format' => ''
        ],
        'TEMPER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Temperatura em graus Celsius utilizada para '.
                      'quantificação do volume de combustível',
            'format' => '3v2'
        ],
        'QTD_VOL' => [
            'type' => 'numeric',
            'regex' => '^\d+$',
            'required' => false,
            'info' => 'Quantidade de volumes transportados',
            'format' => ''
        ],
        'PESO_BRT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Peso bruto dos volumes transportados (em Kg)',
            'format' => '10v2'
        ],
        'PESO_LIQ' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Peso líquido dos volumes transportados (em Kg)',
            'format' => '10v2'
        ],
        'NOM_MOT' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => false,
            'info' => 'Nome do motorista',
            'format' => ''
        ],
        'CPF' => [
            'type' => 'string',
            'regex' => '^[0-9]{11}$',
            'required' => false,
            'info' => 'CPF do motorista',
            'format' => ''
        ],
        'UF_ID' => [
            'type' => 'string',
            'regex' => '^[A-z]{2}$',
            'required' => false,
            'info' => 'Sigla da UF da placa do veículo',
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
