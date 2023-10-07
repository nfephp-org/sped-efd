<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Elemento 0210 do Bloco 0
 * REGISTRO 0210: CONSUMO ESPECÍFICO PADRONIZADO
 * Até  dezembro  de  2017,  este  registro  deve  ser  apresentado,  caso
 * exista  produção  e/ou  consumo  nos  Registros K230/K235 e K250/K255.
 * A partir de janeiro de 2018, a obrigatoriedade da apresentação deste registro
 * ficará a critério de cada UF, caso exista produção e consumo nos
 * Registros K230/K235 e K250/K255.
 * Deve  ser  informado  o  consumo  específico  padronizado  esperado  e
 * a  perda  normal  percentual  esperada  de  um insumo/componente para se
 * produzir uma unidade de produto resultante, segundo as técnicas de produção
 * de sua atividade e o projeto do produto resultante, referentes aos produtos
 * que foram fabricados pelo próprio estabelecimento ou por terceiro.
 * Este registro somente deve existir quando o conteúdo do campo 7 - TIPO_ITEM
 * do Registro 0200 for igual a 03 (produto em processo) ou 04 (produto acabado).
 * Se existirem insumos interdependentes (insumos em que o aumento da
 * participação de um resulta em diminuição da participação de outro ou outros)
 * deverá ser eleito um insumo de cada grupamento interdependente para
 * informação do total de consumo específico padrão ou perda normal percentual
 * do conjunto de insumos que representa (na unidade do insumo eleito).
 * Os demais insumos do grupamento interdependente serão considerados substitutos
 * e deverão ser informados somente nos Registros K235 ou K255 com a informação
 * do insumo substituído.
 * A unidade de medida é, obrigatoriamente, a de controle de estoque constante
 * no registro 0200 – campo UNID_INV.
 * Validação do Registro: Não podem ser informados dois ou mais registros com o
 * mesmo campo COD_ITEM do Registro  0200 e o mesmo campo COD_ITEM_COMP.
 * Somente  devem  ser  apresentados  itens  referenciados  nos  demais blocos.
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0210 extends Element
{
    const REG = '0210';
    const LEVEL = 3;
    const PARENT = '0200';

    protected $parameters = [
        'COD_ITEM_COMP' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código  do  item  componente/insumo  (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'QTD_COMP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade do item componente/insumo para se produzir'
                . ' uma unidade do item composto/resultante',
            'format'   => '15v6'
        ],
        'PERDA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Perda/quebra normal percentual do insumo/componente '
                . 'para se produzir uma unidade do item composto/resultante',
            'format'   => '15v4'
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
