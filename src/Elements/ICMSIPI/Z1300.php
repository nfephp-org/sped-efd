<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1300 extends Element implements ElementInterface
{
    const REG = '1300';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do Produto, constante do registro 0200',
            'format'   => ''
        ],
        'DT_FECH' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data do fechamento da movimentação',
            'format'   => ''
        ],
        'ESTQ_ABERT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Estoque no início do dia, em litros',
            'format'   => '15v3'
        ],
        'VOL_ENTR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Volume Recebido no dia (em litros)',
            'format'   => '15v3'
        ],
        'VOL_DISP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Volume Disponível (04 + 05), em litros',
            'format'   => '15v3'
        ],
        'VOL_SAIDAS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Volume Total das Saídas, em litros',
            'format'   => '15v3'
        ],
        'ESTQ_ESCR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Estoque Escritural (06 – 07), litros',
            'format'   => '15v3'
        ],
        'VAL_AJ_PERDA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da Perda, em litros',
            'format'   => '15v3'
        ],
        'VAL_AJ_GANHO' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ganho, em litros',
            'format'   => '15v3'
        ],
        'FECH_FISICO' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Estoque de Fechamento, em litros',
            'format'   => '15v3'
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
         * Campo 06 (VOL_DISP) Preenchimento: informar o volume disponível, que corresponde à soma dos campos ESTQ_ABERT e VOL_ENTR.
         */
        $somatorio = $this->values->estq_abert + $this->values->vol_entr;
        if ($this->std->vol_disp != number_format($somatorio, 3, ',', '')) {
            throw new \InvalidArgumentException("[" . self::REG . "] Informar o volume disponível, que corresponde à soma dos campos "
            ."ESTQ_ABERT e VOL_ENTR.");
        }

        /*
         * Campo 08 (ESTQ_ESCR) Preenchimento: informar o estoque escritural, que corresponde ao valor constante no campo VOL_DISP
         * menos o valor constante no campo VOL_SAIDAS.
         */
        $diferenca = $this->values->vol_disp - $this->values->vol_saidas;
        if ($this->std->estq_escr != number_format($diferenca, 3, ',', '')) {
            throw new \InvalidArgumentException("[" . self::REG . "] Informar o estoque escritural, que corresponde ao valor "
            ."constante no campo VOL_DISP menos o valor constante no campo VOL_SAIDAS.");
        }
    }
}
