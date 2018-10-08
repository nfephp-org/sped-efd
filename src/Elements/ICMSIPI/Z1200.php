<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1200 extends Element implements ElementInterface
{
    const REG = '1200';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'COD_AJ_APUR' => [
            'type'     => 'string',
            'regex'    => '^\d{3}9\d{4}$',
            'required' => true,
            'info'     => 'Código de ajuste, conforme informado na Tabela indicada no item 5.1.1.',
            'format'   => ''
        ],
        'SLD_CRED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo de créditos fiscais de períodos anteriores',
            'format'   => '15v2'
        ],
        'CRED_APR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Total de crédito apropriado no mês',
            'format'   => '15v2'
        ],
        'CRED_RECEB' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Total de créditos recebidos por transferência',
            'format'   => '15v2'
        ],
        'CRED_UTIL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Total de créditos utilizados no período',
            'format'   => '15v2'
        ],
        'SLD_CRED_FIM' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo de crédito fiscal acumulado a transportar para o período seguinte',
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
        $this->postValidation();
    }

    public function postValidation()
    {
        /*
         * Campo 07 (SLD_CRED_FIM) Validação: O valor desse campo deve ser igual à soma dos valores dos campos
         * SLD_CRED, CRED_APR e CRED_RECEB, diminuída do valor do campo CRED_UTIL.
         */
        $somatorio = $this->values->sld_cred
                    + $this->values->cred_apr
                    - $this->values->cred_receb
                    - $this->values->cred_util;

        if ($this->std->sld_cred_fim != number_format($somatorio, 2, ',', '')) {
            throw new \InvalidArgumentException("[" . self::REG . "] O valor do campo SLD_CRED_FIM "
            ."deve ser igual à soma dos valores dos campos SLD_CRED, CRED_APR e CRED_RECEB, diminuída "
            ."do valor do campo CRED_UTIL.");
        }
    }
}
