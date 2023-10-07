<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Elemento 0206 do Bloco 0
 * REGISTRO 0206: CÓDIGO DE PRODUTO CONFORME TABELA PUBLICADA PELA ANP
 * Este  registro  tem  por  objetivo  informar  o  código  correspondente
 * ao  produto  constante  na  Tabela  da  Agência Nacional de Petróleo (ANP).
 * Deve ser apresentado apenas pelos contribuintes produtores, importadores,
 * distribuidores e postos de combustíveis.
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0206 extends Element
{
    const REG = '0206';
    const LEVEL = 3;
    const PARENT = '0200';

    protected $parameters = [
        'COD_COMB' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{9}$',
            'required' => true,
            'info'     => 'Código do produto, conforme tabela publicada pela ANP',
            'format'   => ''
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
