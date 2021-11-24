<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class G125 extends Element implements ElementInterface
{
    const REG = 'G125';
    const LEVEL = 3;
    const PARENT = 'G100';

    protected $parameters = [
        'COD_IND_BEM' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => true,
            'info' => 'Código individualizado do bem ou componente adotado no controle patrimonial do ' .
                'estabelecimento informante ',
            'format' => ''
        ],
        'DT_MOV' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da movimentação ou do saldo inicial ',
            'format' => ''
        ],
        'TIPO_MOV' => [
            'type' => 'string',
            'regex' => '^(SI|ST|IM|IA|CI|MC|BA|AT|PE|OT)$',
            'required' => true,
            'info' => 'Tipo de movimentação do bem ou componente ' .
                ' SI = Saldo inicial de bens imobilizados ' .
                ' IM = Imobilização de bem individual ' .
                ' IA = Imobilização em Andamento - Componente ' .
                ' CI = Conclusão de Imobilização em Andamento – Bem Resultante ' .
                ' MC = Imobilização oriunda do Ativo Circulante ' .
                ' BA = Baixa do bem - Fim do período de apropriação ' .
                ' AT = Alienação ou Transferência ' .
                ' PE = Perecimento, Extravio ou Deterioração ' .
                ' OT = Outras Saídas do Imobilizado ',
            'format' => ''
        ],
        'VL_IMOB_ICMS_OP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS da Operação Própria na entrada do bem ou componente ',
            'format' => '15v2'
        ],
        'VL_IMOB_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS da Oper. por Sub. Tributária na entrada do bem ou componente ',
            'format' => '15v2'
        ],
        'VL_IMOB_ICMS_FRT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS sobre Frete do Conhecimento de Transporte na entrada do bem ou componente ',
            'format' => '15v2'
        ],
        'VL_IMOB_ICMS_DIF' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS - Diferencial de Alíquota, conforme Doc. de Arrecadação, na entrada do ' .
                'bem ou componente ',
            'format' => '15v2'
        ],
        'NUM_PARC' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,3})$',
            'required' => false,
            'info' => 'Número da parcela do ICMS ',
            'format' => ''
        ],
        'VL_PARC_PASS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da parcela de ICMS passível de apropriação (antes da aplicação da ' .
                'totais) ' .
                'participação percentual do valor das saídas tributadas/exportação sobre as saídas ',
            'format' => '15v2'
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
