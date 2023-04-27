<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0450 do Bloco 0
 *
 * Este registro tem por objetivo codificar todas as informações complementares
 * dos documentos fiscais exigidas pela legislação fiscal. Estas informações
 * constam no campo “Dados Adicionais” dos documentos fiscais.
 *
 * Esta codificação e suas descrições são livremente criadas e mantidas pelo
 * contribuinte e não podem ser informados dois ou mais registros com o mesmo
 * conteúdo no campo COD_INF.
 *
 * Deverão constar todas as informações complementares de interesse do fisco
 * existentes nos documentos fiscais. Exemplo: nos casos de documentos fiscais
 * de entradas de devolução, informar o documento fiscal referenciado.
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0450 extends Element implements ElementInterface
{
    const REG = '0450';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [
        'COD_INF' => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => true,
            'info'     => 'Código da informação complementar do documento fiscal.',
            'format'   => ''
        ],
        'TXT' => [
            'type'     => 'string',
            'regex'    => '^.{1,255}$',
            'required' => true,
            'info'     => 'Texto livre da informação complementar existente no documento fiscal',
            'format'   => ''
        ]
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
