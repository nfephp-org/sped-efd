<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0221 do Bloco 0
 * REGISTRO 0221: CORRELAÇÃO ENTRE CÓDIGOS DE ITENS COMERCIALIZADOS
 *
 * O registro deverá ser informado apenas se o campo TIPO_ITEM do registro 0200 Pai for informado com valor
 * “00 – Mercadoria para Revenda”.
 * A obrigatoriedade, que só poderá ser estabelecida a partir de 2024, e a forma de escrituração deste registro serão
 * definidas pela UF de domicílio do declarante. Os contribuintes obrigados, caso não tenham informado o registro nas
 * EFD de 2023, deverão informar, na EFD de janeiro de 2024, todos os códigos de item inativados ou alterados no
 * exercício de 2023.
 * Este registro tem por objetivo informar a correlação entre os diversos códigos de item, relacionados a uma mesma
 * mercadoria, utilizados nos documentos fiscais de entrada e de saída e nos registros da EFD ICMS-IPI.
 * A correlação será feita sempre em relação ao item “atômico”, ou seja, aquele que representa a menor unidade de
 * comercialização praticada pelo estabelecimento.
 * Nos casos em que os itens são formados pela agregação de mercadorias (kits, cestas básicas etc.), este registro deve
 * ser informado quando aquele item receber um código específico no estoque. A informação do relacionamento entre os
 * componentes de uma mercadoria não sobrepõe a legislação de cada UF na forma de emissão de notas de kits e cestas.

 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0221 extends Element implements ElementInterface
{
    const REG = '0221';
    const LEVEL = 3;
    const PARENT = '0220';

    protected $parameters = [
        'COD_ITEM_ATOMICO' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Informar o código do item atômico contido no item informado no 0200 Pai.',
            'format'   => ''
        ],
        'QTD_CONTIDA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Informar quantos itens atômicos estão contidos no item informado no 0200 Pai.',
            'format'   => '15v6'
        ],
    ];

    /**
     * Constructor
     * @param stdClass $std
     */
    public function __construct(stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
