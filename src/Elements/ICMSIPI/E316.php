<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E316 extends Element implements ElementInterface
{
    const REG = 'E316';
    const LEVEL = 4;
    const PARENT = 'E310';

    protected $parameters = [
        'COD_OR' => [
            'type'     => 'string',
            'regex'    => '^00([3-6]|0)|090$',
            'required' => true,
            'info'     => 'Código da obrigação recolhida ou a recolher, conforme a Tabela 5.4',
            'format'   => ''
        ],
        'VL_OR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da obrigação recolhida ou a recolher',
            'format'   => '15v2'
        ],
        'DT_VCTO' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data de vencimento da obrigação',
            'format'   => ''
        ],
        'COD_REC' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => true,
            'info'     => 'Código de receita referente à obrigação, próprio da unidade da '
            .'federação da origem/destino, conforme legislação estadual.',
            'format'   => ''
        ],
        'NUM_PROC' => [
            'type'     => 'string',
            'regex'    => '^.{1,15}$',
            'required' => false,
            'info'     => 'Número do processo ou auto de infração ao qual a obrigação está vinculada, se houver',
            'format'   => ''
        ],
        'IND_PROC' => [
            'type'     => 'string',
            'regex'    => '^[0|1|2|9]$',
            'required' => false,
            'info'     => 'Indicador da origem do processo: '
            .'0- SEFAZ; '
            .'1- Justiça Federal; '
            .'2- Justiça Estadual; '
            .'9- Outros',
            'format'   => ''
        ],
        'PROC' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Descrição resumida do processo que embasou o lançamento',
            'format'   => ''
        ],
        'TXT_COMPL' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Descrição complementar das obrigações recolhidas ou a recolher',
            'format'   => ''
        ],
        'MES_REF' => [
            'type'     => 'integer',
            'regex'    => '^(\d{6})$',
            'required' => true,
            'info'     => 'Informe o mês de referência no formato “mmaaaa”',
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
         * Campo 06 (NUM_PROC) Validação: se este campo estiver preenchido, os campos IND_PROC e PROC deverão
         * estar preenchidos. Se este campo não estiver preenchido, os campos IND_PROC e PROC não deverão estar
         * preenchidos.
         */
        if (!empty($this->std->num_proc) && (empty($this->std->ind_proc) || empty($this->std->proc))) {
            $this->errors[] = "[" . self::REG . "] Se o campo NUM_PROC estiver preenchido, "
            . "os campos IND_PROC e PROC deverão estar preenchidos.";
        }
        if (empty($this->std->num_proc) && (!empty($this->std->ind_proc) || !empty($this->std->proc))) {
            $this->errors[] = "[" . self::REG . "] Se o campo NUM_PROC não estiver preenchido, "
            . "os campos IND_PROC e PROC não deverão estar preenchidos.";
        }
    }
}
