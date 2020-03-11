<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;
use NFePHP\Common\Keys;

class G130 extends Element implements ElementInterface
{
    const REG = 'G130';
    const LEVEL = 4;
    const PARENT = 'G100';

    protected $parameters = [
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => true,
            'info' => 'Indicador do emitente do documento fiscal ' .
                ' 0- Emissão própria ' .
                ' 1- Terceiros ',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => true,
            'info' => 'Código do participante  ' .
                ' - do emitente do documento ou do remetente das mercadorias, no caso de entradas ' .
                ' - do adquirente, no caso de saídas ',
            'format' => ''
        ],
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => true,
            'info' => 'Código do modelo de documento fiscal, conforme tabela 4.1.1 ',
            'format' => ''
        ],
        'SERIE' => [
            'type' => 'string',
            'regex' => '^.{0,3}$',
            'required' => false,
            'info' => 'Série do documento fiscal ',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,9})$',
            'required' => true,
            'info' => 'Número de documento fiscal ',
            'format' => ''
        ],
        'CHV_NFE_CTE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Chave do documento fiscal eletrônico ',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da emissão do documento fiscal ',
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
        if (!empty($this->std->chv_nfe_cte) and !Keys::isValid($this->std->chv_nfe_cte)) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Dígito verificador incorreto no campo chave do " .
                " campo CHV_NFE_CTE");
        }
    }
}
