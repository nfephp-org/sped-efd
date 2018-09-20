<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO H005: TOTAIS DO INVENTÁRIO
 * Este registro deve ser apresentado para discriminar os valores totais dos
 * itens/produtos do inventário realizado em 31 de dezembro de cada exercício,
 * ou nas demais datas estabelecidas pela legislação fiscal ou comercial.
 * O inventário deverá ser apresentado no arquivo da EFD-ICMS/IPI até o
 * segundo mês subsequente ao evento. Ex. Inventário realizado em 31/12/08
 * deverá ser apresentado na EFD-ICMS/IPI de período de referência
 * fevereiro de 2009.
 * A partir de julho de 2012, as empresas que exerçam as atividades descritas
 * na Classificação Nacional de Atividades Econômicas/Fiscal  (CNAE-Fiscal)
 * sob  os  códigos  4681-8/01 e 4681-8/02 deverão  apresentar  este
 * registro, mensalmente, para discriminar os valores itens/produtos do
 * Inventário  realizado ao final do mesmo período de referência do arquivo
 * da EFD-ICMS/IPI.  Informar  como  MOT_INV  o  código  “01”.
 * Exemplo:  o  inventário  realizado  no  final  do  mês  de  janeiro,
 * deverá ser apresentado na escrituração do mês de janeiro.
 *
 * Atribuir valor Zero ao inventário significa escriturar sem estoque.
 */
class H005 extends Element implements ElementInterface
{
    const REG = 'H005';
    const LEVEL = 1;
    const PARENT = 'H001';
    
    protected $parameters = [
        'DT_INV' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data do inventário',
            'format'   => ''
        ],
        'VL_INV' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9.]$',
            'required' => true,
            'info'     => 'Valor total do estoque',
            'format'   => '15v2'
        ],
        'MOT_INV' => [
            'type'     => 'string',
            'regex'    => '^[0-5]{2}$',
            'required' => true,
            'info'     => 'Informe o motivo do Inventário: '
            . '01 – No final no período; '
            . '02 – Na mudança de forma de tributação da mercadoria (ICMS); '
            . '03 – Na solicitação da baixa cadastral, paralisação temporária '
            . 'e outras situações; '
            . '04 – Na alteração de regime de pagamento – condição do contribuinte; '
            . '05 – Por determinação dos fiscos.',
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
        $this->std = $this->standarize($std);
    }
}
