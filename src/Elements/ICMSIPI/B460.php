<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class B460 extends Element implements ElementInterface
{
    const REG = 'B460';
    const LEVEL = 2;
    const PARENT = 'B001';

    protected $parameters = [
        'IND_DED' => [
            'type'     => 'string',
            'regex'    => '^[0|1|2|9]$',
            'required' => true,
            'info'     => 'Indicador do tipo de dedução: '
            .'0- Compensação do ISS calculado a maior; '
            .'1- Benefício fiscal por incentivo à cultura; '
            .'2- Decisão administrativa ou judicial; '
            .'9- Outros',
            'format'   => ''
        ],
        'VL_DED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da dedução',
            'format'   => '15v2'
        ],
        'NUM_PROC' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Número do processo ao qual o ajuste está vinculado, se houver',
            'format'   => ''
        ],
        'IND_PROC' => [
            'type'     => 'string',
            'regex'    => '^[0|1|2|9]$',
            'required' => false,
            'info'     => 'Indicador da origem do processo: '
            .'0- Sefin; '
            .'1- Justiça Federal; '
            .'2- Justiça Estadual; '
            .'9- Outros',
            'format'   => ''
        ],
        'PROC' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Descrição do processo que embasou o lançamento',
            'format'   => ''
        ],
        'COD_INF_OBS' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código da observação do lançamento fiscal (campo 02 do Registro 0460)',
            'format'   => ''
        ],
        'IND_OBR' => [
            'type'     => 'string',
            'regex'    => '^[0|1|2]$',
            'required' => true,
            'info'     => 'Indicador da obrigação onde será aplicada a dedução:',
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
