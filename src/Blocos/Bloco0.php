<?php

namespace NFePHP\EFD\Blocos;

use stdClass;
use NFePHP\EFD\Blocos\BlocoBase;
use NFePHP\EFD\Blocos\BlocoInterface;

/*
 * COD_VER Código da versão do leiaute conforme a tabela indicada no Ato COTEPE.
 * COD_FIN Código da finalidade do arquivo:
 *       0 - Remessa do arquivo original;
 *       1 - Remessa do arquivo substituto.
 * DT_INI Data inicial das informações contidas no arquivo.
 * DT_FIN Data final das informações contidas no arquivo.
 * NOME Nome empresarial da entidade.
 * CNPJ Número de inscrição da entidade no CNPJ.
 * CPF Número de inscrição da entidade no CPF.
 * UF Sigla da unidade da federação da entidade.
 * IE Inscrição Estadual da entidade.
 * COD_MUN Código do município do domicílio fiscal da entidade, conforme a tabela IBGE
 * IM Inscrição Municipal da entidade.
 * SUFRAMA Inscrição da entidade na SUFRAMA
 * IND_PERFIL Perfil de apresentação do arquivo fiscal;
 *      A – Perfil A;
 *      B – Perfil B.;
 *      C – Perfil C.
 * IND_ATIV Indicador de tipo de atividade:
 *      0 – Industrial ou equiparado a industrial;
 *      1 – Outros.
 */

class Bloco0 extends BlocoBase implements BlocoInterface
{
    const REG = '0000';
    const MIN = 1;
    const MAX = 1;
    
    /**
     * @var string
     */
    public $codver;
    /**
     * @var string
     */
    public $codfin;
    /**
     * @var string
     */
    public $dtini;
    /**
     * @var string
     */
    public $dtfin;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $cnpj;
    /**
     * @var string
     */
    public $cpf;
    /**
     * @var string
     */
    public $uf;
    /**
     * @var string
     */
    public $ie;
    /**
     * @var string
     */
    public $codmun;
    /**
     * @var string
     */
    public $im;
    /**
     * @var string
     */
    public $suframa;
    /**
     * @var string
     */
    public $indperfil;
    /**
     * @var string
     */
    public $indativ;
    
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
        'codver'    => ['C', [3, 3], 0, true, []],
        'codfin'    => ['N', [1, 1], 0, true, [0, 1]],
        'dtini'     => ['N', [8, 8], 0, true, []],
        'dtfin'     => ['N', [8, 8], 0, true, []],
        'name'      => ['C', [1, 100], 0, true, []],
        'cnpj'      => ['N', [14, 14], 0, false, []],
        'cpf'       => ['N', [11, 11], 0, false, []],
        'uf'        => ['C', [2, 2], 0, true, []],
        'ie'        => ['C', [12, 14], 0, true, []],
        'codmun'    => ['N', [7, 7], 0, true, []],
        'im'        => ['C', [1, 99], 0, false, []],
        'suframa'   => ['C', [9, 9], 0, false, []],
        'indperfil' => ['C', [1, 1], 0, true, ['A', 'B', 'C']],
        'indativ'   => ['N', [1, 1], 0, true, [0, 1]]
    ];
    
    /**
     * Constructor
     * @param stdClass $std
     */
    public function __construct(stdClass $std)
    {
        parent::__construct($std);
    }
    
    /**
     * Return data in formated EFD string
     * @return string
     */
    public function __toString()
    {
        return '|' . self::REG . '|' . $this->build(self::REG);
    }
}
