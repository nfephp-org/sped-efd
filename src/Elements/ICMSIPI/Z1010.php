<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1010 extends Element implements ElementInterface
{
    const REG = '1010';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'IND_EXP' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg. 1100 - Ocorreu averbação (conclusão) de exportação no período: '
            .'S– Sim '
            .'N - Não',
            'format'   => ''
        ],
        'IND_CCRF' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg 1200 – Existem informações acerca de créditos de ICMS a serem controlados, definidos pela Sefaz: '
            .'S– Sim '
            .'N - Não',
            'format'   => ''
        ],
        'IND_COMB' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg. 1300 – É comércio varejista de combustíveis com movimentação e/ou estoque no período: '
            .'S– Sim '
            .'N - Não',
            'format'   => ''
        ],
        'IND_USINA' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg. 1390 – Usinas de açúcar e/álcool – O estabelecimento é produtor de açúcar e/ou álcool '
            .'carburante com movimentação e/ou estoque no período: '
            .'S – Sim '
            .'N - Não',
            'format'   => ''
        ],
        'IND_VA' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg 1400 – Sendo o registro obrigatório em sua Unidade de Federação, existem informações a serem '
            .'prestadas neste registro: '
            .'S – Sim; '
            .'N - Não',
            'format'   => ''
        ],
        'IND_EE' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg 1500 - A empresa é distribuidora de energia e ocorreu fornecimento de energia elétrica para '
            .'consumidores de outra UF: '
            .'S – Sim; '
            .'N - Não',
            'format'   => ''
        ],
        'IND_CART' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg 1600 - Realizou vendas com Cartão de Crédito ou de débito: '
            .'S– Sim; '
            .'N - Não',
            'format'   => ''
        ],
        'IND_FORM' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg. 1700 – Foram emitidos documentos fiscais em papel no período em unidade da federação que '
            .'exija o controle de utilização de documentos fiscais: '
            .'S – Sim '
            .'N - Não',
            'format'   => ''
        ],
        'IND_AER' => [
            'type'     => 'string',
            'regex'    => '^[S|N]$',
            'required' => true,
            'info'     => 'Reg 1800 – A empresa prestou serviços de transporte aéreo de cargas e de passageiros: '
            .'S– Sim '
            .'N - Não',
            'format'   => ''
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
