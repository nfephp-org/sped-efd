<?php

namespace NFePHP\EFD\Blocks\ElementsICMS;

use NFePHP\EFD\Blocks\ElementBase;
use NFePHP\EFD\Blocks\ElementInterface;
use \stdClass;

/**
 * Elemento 0000 do Bloco 0 OBRIGATÓRIO [1:1]
 * REGISTRO 0000: ABERTURA DO ARQUIVO DIGITAL E IDENTIFICAÇÃO DA ENTIDADE
 * Este Registro é obrigatório e corresponde ao primeiro registro do arquivo.
 * Obs.:  Nos  casos  de  EFD-ICMS/IPI  apresentadas  por  estabelecimentos
 * situados  em  outra  UF  e  que  possuam  Inscrição Estadual  nos  termos
 * do  Convênio  ICMS  nº  113/04  (serviços  de  comunicação  definidos
 * pela  Anatel),  deve-se  observar  o seguinte procedimento para preenchimento
 * do registro 0000:
 *   1) Informar o campo UF da unidade federada do tomador de serviços;
 *   2) Informar no campo IE a inscrição estadual na unidade federada do tomador
 *      de serviços;
 *   3) Informar no campo COD_MUN o código de município correspondente à capital
 *      do estado do tomador de serviços.
 *
 * https://www.confaz.fazenda.gov.br/legislacao/atos/2008/AC009_08
 */
class B0000 extends ElementBase implements ElementInterface
{
    const REG = '0000';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [
        'cod_ver' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{3}$',
            'required' => true,
            'info'     => 'Código da versão do leiaute conforme a tabela indicada '
            . 'no Ato COTEPE.',
            'format'   => ''
        ],
        'cod_fin' => [
            'type'     => 'integer',
            'regex'    => '^[0-1]{1}$',
            'required' => true,
            'info'     => 'Código da finalidade do arquivo: '
            . '0 - Remessa do arquivo original;  '
            . '1 - Remessa do arquivo substituto.',
            'format'   => ''
        ],
        'dt_ini'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicial das informações contidas no arquivo.',
            'format'   => ''
        ],
        'dt_fin'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data final das informações contidas no arquivo.',
            'format'   => ''
        ],
        'nome'      => [
            'type'     => 'string',
            'regex'    => '^.{2,100}$',
            'required' => true,
            'info'     => 'Nome empresarial da entidade.',
            'format'   => ''
        ],
        'cnpj'      => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => false,
            'info'     => 'Número de inscrição da entidade no CNPJ.',
            'format'   => ''
        ],
        'cpf'       => [
            'type'     => 'string',
            'regex'    => '^[0-9]{11}$',
            'required' => false,
            'info'     => 'Número de inscrição da entidade no CPF.',
            'format'   => ''
        ],
        'uf'        => [
            'type'     => 'string',
            'regex'    => '^[A-Z]{2}$',
            'required' => true,
            'info'     => 'Sigla da unidade da federação da entidade.',
            'format'   => ''
        ],
        'ie'        => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2,14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual da entidade.',
            'format'   => ''
        ],
        'cod_mun'    => [
            'type'     => 'integer',
            'regex'    => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código  do  município  do  domicílio  fiscal  da  '
            . 'entidade, conforme a tabela IBGE',
            'format'   => ''
        ],
        'im'        => [
            'type'     => 'string',
            'regex'    => '^[A-Za-z0-9]{1,15}$',
            'required' => false,
            'info'     => 'Inscrição Municipal da entidade.',
            'format'   => ''
        ],
        'suframa'   => [
            'type'     => 'string',
            'regex'    => '^[0-9]{8,9}$',
            'required' => false,
            'info'     => 'Inscrição da entidade na SUFRAMA',
            'format'   => ''
        ],
        'ind_perfil' => [
            'type'     => 'string',
            'regex'    => '^(A|B|C)',
            'required' => true,
            'info'     => 'Perfil de apresentação do arquivo fiscal; '
            . 'A – Perfil A; B – Perfil B.; C – Perfil C.',
            'format'   => ''
        ],
        'ind_ativ'   => [
            'type'     => 'integer',
            'regex'    => '^[0-1]{1}$',
            'required' => true,
            'info'     => 'Indicador de tipo de atividade: '
            . '0 – Industrial ou equiparado a industrial; 1 – Outros.',
            'format'   => ''
        ]
    ];
    
    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std, self::REG);
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
        if (!$this->std->cnpj xor $this->std->cpf) {
            throw new \InvalidArgumentException("[" . self::REG . "] Deve ser "
                . "informado apenas o CNPJ ou o CPF nunca os dois.");
        }
    }
}
