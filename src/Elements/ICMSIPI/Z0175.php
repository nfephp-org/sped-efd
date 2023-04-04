<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Elemento 0175 do Bloco 0
 * REGISTRO 0175: ALTERAÇÃO DA TABELA DE CADASTRO DE PARTICIPANTE
 * Este registro é de preenchimento obrigatório quando houver, dentro do período,
 * alteração nos dados informados no registro 0150, campos: NOME, COD_PAIS, CNPJ,
 * CPF, COD_MUN, SUFRAMA, END, NUM, COMPL e BAIRRO.
 * Não pode ser utilizado, em um mesmo arquivo, um mesmo código para representar
 * um participante diferente do referenciado anteriormente por tal código.
 * Os dados informados neste registro serão considerados até as 24:00 horas do
 * dia anterior à data de alteração.
 * Quando houver mudança de INSCRIÇÃO ESTADUAL, deve ser criado novo participante
 * e este registro não deve ser informado.
 * ATENÇÃO: Para mudança de endereço, este registro só deve ser informado quando
 * houver emissão ou recebimento, no mesmo mês, de duas ou mais Notas Fiscais
 * para endereços diferentes do mesmo participante.
 * Se a mudança de endereço implicar alteração de inscrição estadual, deverá ser
 * informado um registro 0150 para este novo participante e, portanto,
 * não deve ser informado o registro 0175.
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0175 extends Element
{
    const REG = '0175';
    const LEVEL = 0;
    const PARENT = '0150';

    protected $parameters = [
        'DT_ALT' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data de alteração do cadastro',
            'format'   => ''
        ],
        'NR_CAMPO' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',//03, 04, 05, 06, 08, 09, 10, 11, 12, 13
            'required' => true,
            'info'     => 'Número do campo alterado (campos 03 a 13, exceto 07)',
            'format'   => ''
        ],
        'CONT_ANT' => [
            'type'     => 'string',
            'regex'    => '^.{3,100}$',
            'required' => true,
            'info'     => 'Conteúdo anterior do campo.',
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
