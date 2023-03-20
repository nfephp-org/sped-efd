<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class P100 extends Element implements ElementInterface
{
    const REG = 'P100';
    const LEVEL = 3;
    const PARENT = 'P001';

    protected $parameters = [
        'DT_INI' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data inicial a que a apuração se refere ',
            'format' => ''
        ],
        'DT_FIN' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data final a que a apuração se refere ',
            'format' => ''
        ],
        'VL_REC_TOT_EST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Receita Bruta Total do Estabelecimento no Período ',
            'format' => '15v2'
        ],
        'COD_ATIV_ECON' => [
            'type' => 'string',
            'regex' => '^.{8}$',
            'required' => false,
            'info' => 'Código indicador correspondente à atividade sujeita a incidência da Contribuição ' .
                'Previdenciária sobre a Receita Bruta, conforme Tabela 5.1.1. ',
            'format' => ''
        ],
        'VL_REC_ATIV_ESTAB' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Receita Bruta do Estabelecimento, correspondente às atividades/produtos ' .
                'referidos no Campo 05 (COD_ATIV_ECON) ',
            'format' => '15v2'
        ],
        'VL_EXC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor das Exclusões da Receita Bruta informada no Campo 06 ',
            'format' => '15v2'
        ],
        'VL_BC_CONT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Base de Cálculo da Contribuição Previdenciária sobre a Receita Bruta (Campo ' .
                '08 = Campo 06 – Campo 07) ',
            'format' => '15v2'
        ],
        'ALIQ_CONT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota da Contribuição Previdenciária sobre a Receita B ruta ',
            'format' => '8v4'
        ],
        'VL_CONT_APU' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Contribuição Previdenciária Apurada sobre a Receita Bruta ',
            'format' => '15v2'
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código da conta analítica contábil referente à Contribuição Previdenciária sobre a ' .
                'Receita Bruta ',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Informação complementar do registro ',
            'format' => ''
        ],
        'NUM_CAMPO' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Informar o número do campo do registro “P100”, objeto de detalhamento neste registro. ',
            'format' => ''
        ],
        'COD_DET' => [
            'type' => 'string',
            'regex' => '^.{8}$',
            'required' => false,
            'info' => 'Código do tipo de detalhamento, conforme Tabela 5.1.2 ',
            'format' => ''
        ],
        'DET_VALOR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor detalhado referente ao campo 02 deste registro ',
            'format' => '15v2'
        ],
        'INF_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Informação complementar do detalhamento. ',
            'format' => ''
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

    public function postValidation()
    {
        if ($this->values->vl_rec_ativ_estab > $this->values->vl_rec_total_est) {
            $this->errors[] = "[" . self::REG . "] " .
                "O campo VL_REC_ATIV_ESTAB deve ser MENOR ou " .
                "IGUAL ao valor do Campo VL_REC_TOT_EST";
        }
    }
}
