<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C195: OBSERVAÇÕES DO LANÇAMENTO FISCAL (CÓDIGO 01, 1B, 04, 55 E 65)
 * Este registro deve ser informado quando, em decorrência da legislação estadual,
 * houver ajustes nos documentos
 * fiscais, informações sobre diferencial de alíquota, antecipação de imposto e outras situações.
 * Estas informações equivalem às
 * observações que são lançadas na coluna “Observações” dos Livros Fiscais previstos no Convênio SN/70 – SINIEF, art. 63, I
 * a IV.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C195 extends Element implements ElementInterface
{
    const REG = 'C195';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'COD_OBS' => [
            'type' => 'string',
            'regex' => '^.{1,6}$',
            'required' => true,
            'info' => 'Código da observação do lançamento fiscal',
            'format' => ''
        ],
        'TXT_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição complementar do código de observação.',
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
}
