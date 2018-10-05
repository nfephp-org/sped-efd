<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO G110: ICMS – ATIVO PERMANENTE – CIAP
 *
 * Este registro tem o objetivo de prestar informações sobre o CIAP:
 *
 * a) saldo de ICMS do CIAP,  composto pelo valor do ICMS de bens
 *    ou componentes (somente componentes cujo crédito de ICMS já foi
 *    apropriado) que entraram anteriormente ao período de apuração. (campo 4);
 * b) o somatório das parcelas de ICMS passíveis de apropriação de cada bem ou
 *    componente, inclusive aqueles que foram escriturados no CIAP em período
 *    anterior (campo 5);
 * c) o valor do índice de participação do somatório do valor das saídas
 *    tributadas e saídas para exportação no valor total das saídas (campo 8) -
 *    (o valor é sempre igual ou menor que 1 (um);
 * d) o valor de ICMS a ser apropriado como crédito. Esse valor (campo 9) será
 *    apropriado diretamente no Registro de Apuração do ICMS, como ajuste de
 *    apuração, salvo se a legislação obrigar à emissão de documento fiscal;
 * e) o valor de outras parcelas de ICMS a ser apropriado. Esse valor
 *    (campo 10) será apropriado diretamente no Registro de Apuração do ICMS,
 *    como ajuste de apuração, salvo se a legislação obrigar à emissão
 *    de documento fiscal.
 *
 * Não podem ser informados dois ou mais registros com a mesma combinação de
 * conteúdo nos campos DT_INI e DT_FIN e esta combinação deve ser igual à
 * informada em um registro E100.
 */
class G110 extends Element implements ElementInterface
{
    const REG = 'G110';
    const LEVEL = 2;
    const PARENT = 'G001';

    protected $parameters = [
        'DT_INI'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicial a que a apuração se refere.',
            'format'   => ''
        ],
        'DT_FIN'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicial a que a apuração se refere.',
            'format'   => ''
        ],
        'SALDO_IN_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo inicial de ICMS do CIAP, composto por ICMS  de  bens  que  entraram'
                . ' anteriormente  ao período de apuração (somatório dos campos 05 a 08'
                . ' (VL_IMOB_ICMS_OP + VL_IMOB_ICMS_ST + VL_IMOB_ICMS_FRT + VL_IMOB_ICMS_DIF) '
                .' dos registros G125)',
            'format'   => '15v2'
        ],
        'SOM_PARC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Somatório  das  parcelas  de  ICMS  passível  de'
                . ' apropriação de cada bem (campo 10 (VL_PARC_PASS) do G125)',
            'format'   => '15v2'
        ],
        'VL_TRIB_EXP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do somatório das saídas tributadas e'
                . 'saídas para exportação',
            'format'   => '15v2'
        ],
        'VL_TOTAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de saídas',
            'format'   => '15v2'
        ],
        'IND_PER_SAI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Índice de participação do valor do somatório das '
                . 'saídas  tributadas  e  saídas  para  exportação  no '
                . 'valor  total  de  saídas  (Campo  06 VL_TRIB_EXP dividido  pelo campo 07 VL_TOTAL)',
            'format'   => '15v8'
        ],
        'ICMS_APROP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de ICMS a ser apropriado na apuração do ICMS, '
                . 'correspondente á  multiplicação do campo 05 (SOM_PARC) pelo campo 08 (IND_PER_SAI).',
            'format'   => '15v2'
        ],
        'SOM_ICMS_OC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de outros créditos a ser apropriado na Apuração do ICMS,'
                . ' correspondente ao somatório do campo 09 (VL_PARC_APROP) do registro G126.',
            'format'   => '15v2'
        ]
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }

    /**
     * Transforma o valor com virgula em float para poder fazer os calculos de verificacao
     * @param $vlr
     * @return mixed
     */
    private function strToFloat($vlr)
    {
        return (float)str_replace(',', '.', $this->std->$vlr);
    }

    /**
     * Aqui são colocadas validações adicionais que requerem mais logica
     * e processamento
     * Deve ser usado apenas quando necessário
     * @throws \InvalidArgumentException
     */
    public function postValidation()
    {
        if ($this->strToFloat('vl_trib_exp') > $this->strToFloat('vl_total')) {
            throw new \InvalidArgumentException("[" . self::REG . "] O valor "
                . "informado no campo VL_TRIB_EXP deve ser menor ou igual ao informado "
                . "no campo VL_TOTAL.");
        }
    }
}
