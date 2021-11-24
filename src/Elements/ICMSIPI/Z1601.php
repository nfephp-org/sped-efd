<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

// REGISTRO 1601: OPERAÇÕES COM INSTRUMENTOS DE PAGAMENTOS ELETRÔNICOS
// (VÁLIDO A PARTIR DE 01/01/2022)
class Z1601 extends Element implements ElementInterface
{
    const REG = '1601';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'COD_PART_IP' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150):
            identificação da instituição que efetuou o pagamento',
            'format'   => ''
        ],
        'COD_PART_IT' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código do participante (campo 02 do Registro 0150):
            identificação do intermediador da transação',
            'format'   => ''
        ],
        'TOT_VS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total bruto das vendas e/ou prestações de
            serviços no campo de incidência do ICMS, incluindo
            operações com imunidade do imposto',
            'format'   => '15v2'
        ],
        'TOT_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total bruto das prestações de serviços no campo
            de incidência do ISS',
            'format'   => '15v2'
        ],
        'TOT_OUTROS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de operações deduzido dos valores dos
            campos TOT_VS e TOT_ISS.',
            'format'   => '15v2'
        ]
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
