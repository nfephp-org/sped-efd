<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0190 do Bloco 0
 * REGISTRO 0190: IDENTIFICAÇÃO DAS UNIDADES DE MEDIDA
 * Este  registro tem por objetivo descrever as unidades de medidas
 * utilizadas no arquivo digital. Não podem ser informados dois ou mais
 * registros com  o  mesmo  código  de  unidade  de  medida.
 *  Somente  devem  constar  as  unidades  de medidas informadas em qualquer
 * outro registro.
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0190 extends Element implements ElementInterface
{
    const REG = '0190';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => true,
            'info'     => 'Código da unidade de medida.',
            'format'   => ''
        ],
        'DESCR' => [
            'type'     => 'string',
            'regex'    => '^.{1,255}$',
            'required' => true,
            'info'     => 'Descrição da unidade de medida.',
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
        $this->postValidation();
    }
    
    /**
     * Aqui são colocadas validações adicionais que requerem mais logica
     * e processamento
     * Deve ser usado apenas quando necessário
     * @throws \InvalidArgumentException
     */
    public function postValidation()
    {
        if ($this->std->unid === $this->std->descr) {
            throw new \InvalidArgumentException("[" . self::REG . "] Os campos UNID e DESCR não podem ser iguais.");
        }
    }
}
