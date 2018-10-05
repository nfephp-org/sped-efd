<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class G126 extends Element implements ElementInterface
{
    const REG = 'G126';
    const LEVEL = 4;
    const PARENT = 'G!20';

    protected $parameters = [
        'DT_INI' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data inicial do período de apuração ',
            'format' => ''
        ],
        'DT_FIM' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data final do período de apuração ',
            'format' => ''
        ],
        'NUM_PARC' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,3})$',
            'required' => true,
            'info' => 'Número da parcela do ICMS ',
            'format' => ''
        ],
        'VL_PARC_PASS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da parcela de ICMS passível de apropriação - antes da aplicação da ' .
                'totais ' .
                'participação percentual do valor das saídas tributadas/exportação sobre as saídas ',
            'format' => '15v2'
        ],
        'VL_TRIB_OC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor do somatório das saídas tributadas e saídas para exportação no período ' .
                'indicado neste registro ',
            'format' => '15v2'
        ],
        'VL_TOTAL' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total de saídas no período indicado neste registro ',
            'format' => '15v2'
        ],
        'IND_PER_SAI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Índice de participação do valor do somatório das saídas tributadas e saídas para ' .
                'exportação no valor total de saídas (Campo 06 dividido pelo campo 07) ',
            'format' => '15v8'
        ],
        'VL_PARC_APROP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor de outros créditos de ICMS a ser apropriado na apuração (campo 05 vezes o campo ' .
                '08) ',
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
