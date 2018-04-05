<?php

namespace NFePHP\EFD\Blocos;

use stdClass;
use NFePHP\EFD\Blocos\BlocoBase;
use NFePHP\EFD\Blocos\BlocoInterface;

/*
 * DT_EST Data do estoque final escriturado que está sendo corrigido
 * COD_ITEM Código do item (campo 02 do Registro 0200)
 * QTD_COR_POS Quantidade de correção positiva de apontamento ocorrido em período de apuração anterior
 * QTD_COR_NEG Quantidade de correção negativa de apontamento ocorrido em período de apuração anterior
 * IND_EST Indicador do tipo de estoque:
 *      0 = Estoque de propriedade do informante e em seu poder;
 *      1 = Estoque de propriedade do informante e em posse de terceiros;
 *      2 = Estoque de propriedade de terceiros e em posse do informante
 * COD_PART Código do participante (campo 02 do Registro 0150):
 *      - proprietário/possuidor que não seja o informante do arquivo
 */

class BlocoK280 extends BlocoBase implements BlocoInterface
{
    const REG = 'K280';
    const MIN = 1;
    const MAX = 1;

    /**
     * @var string
     */
    public $dtEst;
    /**
     * @var string
     */
    public $codItem;
    /**
     * @var string
     */
    public $qtdCorPos;
    /**
     * @var string
     */
    public $qtdCorNeg;
    /**
     * @var string
     */
    public $indEst;
    /**
     * @var string
     */
    public $codPart;

    //abaixo estão os critérios para validação dos dados passados para a classe
    //esses critérios serão usados para tratar, formatar ou apenas validar
    //os dados passados.
    //nome da propriedade => [
    //                        tipo de dados numerico ou caracter,
    //                        comprimento [ minimo, máximo ],
    //                        numero de decimais,
    //                        obrigatório ou não,
    //                        [ conteúdo obrigatório ]
    //                       ]
    protected $parameters = [
        'dtEst'     => ['N', [8, 8], 0, true, []],
        'codItem'   => ['C', [1, 60], 0, true, []],
        'qtdCorPos' => ['N', [1, 999999], 3, false, []],
        'qtdCorNeg' => ['N', [1, 999999], 3, false, []],
        'indEst'    => ['C', [1, 1], 0, true, [0, 1, 2]],
        'codPart'   => ['C', [1, 60], 0, false, []],
    ];

    /**
     * Constructor
     *
     * @param stdClass $std
     */
    public function __construct(stdClass $std)
    {
        parent::__construct($std);
    }

    /**
     * Return data in formated EFD string
     *
     * @return string
     */
    public function __toString()
    {
        return '|' . self::REG . '|' . $this->build(self::REG);
    }
}

