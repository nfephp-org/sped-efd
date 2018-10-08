<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1100 extends Element implements ElementInterface
{
    const REG = '1100';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'IND_DOC' => [
            'type'     => 'integer',
            'regex'    => '^[0|1|2]$',
            'required' => true,
            'info'     => 'Informe o tipo de documento: '
            .'0 – Declaração de Exportação; '
            .'1 – Declaração Simplificada de Exportação; '
            .'2 – Declaração Única de Exportação.',
            'format'   => ''
        ],
        'NRO_DE' => [
            'type'     => 'string',
            'regex'    => '^.{1,14}$',
            'required' => true,
            'info'     => 'Número da declaração',
            'format'   => ''
        ],
        'DT_DE' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da declaração (DDMMAAAA)',
            'format'   => ''
        ],
        'NAT_EXP' => [
            'type'     => 'integer',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Preencher com: 0 - Exportação Direta 1 - Exportação Indireta',
            'format'   => ''
        ],
        'NRO_RE' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,12}$',
            'required' => false,
            'info'     => 'No do registro de Exportação',
            'format'   => ''
        ],
        'DT_RE' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info'     => 'Data do Registro de Exportação (DDMMAAAA)',
            'format'   => ''
        ],
        'CHC_EMB' => [
            'type'     => 'string',
            'regex'    => '^.{1,18}$',
            'required' => false,
            'info'     => 'No do conhecimento de embarque',
            'format'   => ''
        ],
        'DT_CHC' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info'     => 'Data do conhecimento de embarque (DDMMAAAA)',
            'format'   => ''
        ],
        'DT_AVB' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da averbação da Declaração de exportação (ddmmaaaa)',
            'format'   => ''
        ],
        'TP_CHC' => [
            'type'     => 'integer',
            'regex'    => '^0[1-9]|1[0-9]|9[1-3]|20|99$',
            'required' => true,
            'info'     => 'Informação do tipo de conhecimento de embarque:'
            .'01 – AWB; '
            .'02 – MAWB; '
            .'03 – HAWB; '
            .'04 – COMAT; '
            .'06 – R. EXPRESSAS; '
            .'07 – ETIQ. REXPRESSAS; '
            .'08 – HR. EXPRESSAS; '
            .'09 – AV7; '
            .'10 – BL; '
            .'11 – MBL; '
            .'12 – HBL; '
            .'13 – CRT; '
            .'14 – DSIC; '
            .'16 – COMAT BL; '
            .'17 – RWB; '
            .'18 – HRWB; '
            .'19 – TIF/DTA; '
            .'20 – CP2;'
            .'91 – NÂO IATA; '
            .'92 – MNAO IATA; '
            .'93 – HNAO IATA; '
            .'99 – OUTROS.',
            'format'   => ''
        ],
        'PAIS' => [
            'type'     => 'string',
            'regex'    => '^\d{1,3}$',
            'required' => true,
            'info'     => 'Código do país de destino da mercadoria (Preencher conforme tabela do SISCOMEX)',
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
        $this->postValidation();
    }

    public function postValidation()
    {
        /*
         * Campo 06 (NRO_RE) Preenchimento: este campo deve ser preenchido se o campo IND_DOC for “0” (zero).
         */
        if ($this->std->ind_doc == 0 && empty($this->std->nro_re)) {
            throw new \InvalidArgumentException("[" . self::REG . "] Este campo deve ser preenchido se o campo IND_DOC for “0” (zero).");
        }
    }
}
