<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1700 extends Element
{
    const REG = '1700';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'COD_DISP' => [
            'type'     => 'string',
            'regex'    => '^0[0-5]$',
            'required' => true,
            'info'     => 'Código dispositivo autorizado: '
            .'00 - Formulário de Segurança – impressor autônomo '
            .'01 - FS-DA – Formulário de Segurança para Impressão de DANFE '
            .'02 – Formulário de segurança - NF-e '
            .'03 - Formulário Contínuo 04 – Blocos '
            .'05 - Jogos Soltos',
            'format'   => ''
        ],
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^.{2}$',
            'required' => true,
            'info'     => 'Código do modelo do dispositivo autorizado, conforme a Tabela 4.1.1',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^.{1,4}$',
            'required' => false,
            'info'     => 'Série do dispositivo autorizado',
            'format'   => ''
        ],
        'SUB' => [
            'type'     => 'string',
            'regex'    => '^.{1,3}$',
            'required' => false,
            'info'     => 'Subsérie do dispositivo autorizado',
            'format'   => ''
        ],
        'NUM_DOC_INI' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,12}$',
            'required' => true,
            'info'     => 'Número do dispositivo autorizado (utilizado) inicial',
            'format'   => ''
        ],
        'NUM_DOC_FIN' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,12}$',
            'required' => true,
            'info'     => 'Número do dispositivo autorizado (utilizado) final',
            'format'   => ''
        ],
        'NUM_AUT' => [
            'type'     => 'string',
            'regex'    => '^\d{1,60}$',
            'required' => true,
            'info'     => 'Número da autorização, conforme dispositivo autorizado',
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
