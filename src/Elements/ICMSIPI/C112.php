<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C112: DOCUMENTO DE ARRECADAÇÃO REFERENCIADO
 * Este registro deve ser apresentado, obrigatoriamente,
 * quando no campo – “Informações Complementares” da nota
 * fiscal - constar a identificação de um documento de arrecadação.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C112 extends Element implements ElementInterface
{
    const REG = 'C112';
    const LEVEL = 4;
    const PARENT = 'C110';

    protected $parameters = [
        'COD_DA' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => true,
            'info' => 'Código do modelo do documento de arrecadação',
            'format' => ''
        ],
        'UF' => [
            'type' => 'string',
            'regex' => '^[A-z]{2}$',
            'required' => true,
            'info' => 'Unidade federada beneficiária do recolhimento',
            'format' => ''
        ],
        'NUM_DA' => [
            'type' => 'Número do documento de arrecadação',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Número do documento de arrecadação',
            'format' => ''
        ],
        'COD_AUT' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => true,
            'info' => 'Código completo da autenticação bancária',
            'format' => ''
        ],
        'VL_DA' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do total do documento de arrecadação',
            'format' => '15v2'
        ],
        'DT_VCTO' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de vencimento do documento de arrecadação',
            'format' => ''
        ],
        'DT_PGTO' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => "Data de pagamento do documento de arrecadação, ou data do vencimento",
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
        $this->postValidation();
    }

    public function postValidation()
    {
        if (!$this->std->num_da xor $this->std->cod_aut) {
            $this->errors[] = "[" . self::REG . "] " .
                "Preencha o número da arrecadação (NUM_DA) ou o Código completo da autenticação bancária (COD_AUT";
        }
        if ($this->std->vl_da <= 0) {
            $this->errors[] = "[" . self::REG . "] " .
                "O valor total da arrecadação (VAL_DA) deve ser maior do que zero '0'";
        }
    }
}
