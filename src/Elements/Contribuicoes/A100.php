<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class A100 extends Element implements ElementInterface
{
    const REG = 'A100';
    const LEVEL = 2;
    const PARENT = 'A000';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador do tipo de operação:',
            'format' => ''
        ],
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^.{1}$',
            'required' => false,
            'info' => 'Indicador do emitente do documento fiscal: 0 - Emissão Própria; 1 - Emissão de Terceiros',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do participante (campo 02 do Registro 0150):
             - do emitente do documento, no caso de emissão de terceiros; 
             - do adquirente, no caso de serviços prestados.',
            'format' => ''
        ],
        'COD_SIT' => [
            'type' => 'numeric',
            'regex' => '^(00|02)$',
            'required' => false,
            'info' => 'Código da situação do documento fiscal: 00 – Documento regular 02 – Documento cancelado',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Série do documento fiscal',
            'format' => ''
        ],
        'SUB' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Subsérie do documento fiscal',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Número do documento fiscal ou documento internacional equivalente',
            'format' => ''
        ],
        'CHV_NFSE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Chave/Código de Verificação da nota fiscal de serviço eletrônica',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da emissão do documento fiscal',
            'format' => ''
        ],
        'DT_EXE_SERV' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de Execução / Conclusão do Serviço',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do documento',
            'format' => '15v2'
        ],
        'IND_PGTO' => [
            'type' => 'string',
            'regex' => '^(0|1|9)$',
            'required' => false,
            'info' => 'Indicador do tipo de pagamento: 0- À vista; 1- A prazo; 9- Sem pagamento.',
            'format' => ''
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do desconto',
            'format' => '15v2'
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS/PASEP',
            'format' => '15v2'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do PIS',
            'format' => '15v2'
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da COFINS',
            'format' => '15v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total da COFINS',
            'format' => '15v2'
        ],
        'VL_PIS_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do PIS retido na fonte',
            'format' => '15v2'
        ],
        'VL_COFINS_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total da COFINS retido na fonte.',
            'format' => '15v2'
        ],
        'VL_ISS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ISS',
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
        $this->postValidation();
    }

    public function postValidation()
    {
        if ($this->std->chv_nfse and !Keys::isValid($this->std->chv_nfse)) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Dígito verificador incorreto no campo campo chave da " .
                "nota fiscal de serviço eletronica (CHAVE_NFSE)");
        }
    }
}
