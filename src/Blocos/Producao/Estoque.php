<?php

namespace NFePHP\EFD\Blocos\Producao;

/**
 * REGISTRO K200: ESTOQUE ESCRITURADO
 *
 * Este registro tem o objetivo de informar o estoque final escriturado do período
 * de apuração informado no Registro K100, por tipo de estoque e por participante,
 * nos casos em que couber, das mercadorias de tipos
 *               00 – Mercadoria para revenda,
 *               01 – Matéria-Prima,
 *               02 - Embalagem,
 *               03 – Produtos em Processo,
 *               04 – Produto Acabado,
 *               05 – Subproduto,
 *               06 – Produto Intermediário
 *             e 10 – Outros Insumos – campo TIPO_ITEM do Registro 0200.
 * A quantidade em estoque deve ser expressa, obrigatoriamente, na unidade de medida
 * de controle de estoque constante no campo 06 do registro 0200 –UNID_INV.
 * A chave deste registro são os campos: DT_EST, COD_ITEM, IND_EST e COD_PART
 * (este, quando houver). O estoque escriturado informado no Registro K200 deve
 * refletir a quantidade existente na data final do período de apuração informado no
 * Registro K100, estoque este derivado dos apontamentos de estoque
 *      inicial
 *      entrada
 *      produção
 *      consumo
 *      saída
 *      movimentação interna
 * Considerando isso, o estoque escriturado informado no K200 é resultante da seguinte fórmula:
 *      Estoque final = estoque inicial
 *                      + entradas/produção/movimentação interna
 *                      - Saída / consumo /movimentação interna.
 *
 *  N.      Campo       Descrição                   Tipo    Tam     Dec     Obrig.
 *  1       REG         Texto fixo contendo "K200"
 *  2       DT_EST
 *  3       COD_ITEM
 *  4       QTD
 *  5       IND_EST
 *  6       COD_PART
 *
 * Observações:
 *      Nível hierárquico - 3
 *      Ocorrência – 1:N
 *
 * Campo 01 (REG) - Valor Válido: [K200]
 *
 * Campo 02 (DT_EST) – Validação: a data do estoque deve ser igual à data final
 * do período de apuração – campo DT_FIN do Registro K100.
 *
 * Campo 03 (COD_ITEM) – Validação: o código do item deverá existir no campo COD_ITEM do
 * Registro 0200. Somente podem ser informados nesse campo valores de COD_ITEM cujos
 * tipos sejam iguais a 00, 01, 02, 03, 04, 05, 06 e 10 – campo TIPO_ITEM do Registro 0200.
 *
 * Campo 05 (IND_EST) - Valores Válidos: [0, 1, 2]
 * Validação: se preenchido com valor ‘1’ (posse de terceiros) ou ‘2’ (propriedade de terceiros),
 * o campo COD_PART será obrigatório.
 *
 * Campo 06 (COD_PART) – Preenchimento: obrigatório quando o IND_EST for “1” ou “2”.
 * Validação: o valor fornecido deve constar no campo COD_PART do registro 0150.
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class Estoque extends BlocoAbstract
{
    /**
     * Data formatada ddmmyyyy
     * @var string
     */
    protected $dtFim;
    /**
     * Codigo do item
     * @var string
     */
    protected $codigo;
    /**
     * Quantidade do item na unidade de estoque
     * formato 3 decimais separados por virgula
     * @var string
     */
    protected $qtd;
    /**
     * Indicador do tipo de estoque
     * 0 Estoque de propriedade do informante e em seu poder;
     * 1 Estoque de propriedade do informante e em posse de terceiros;
     * 2 Estoque de propriedade de terceiros e em posse do informante
     * @var int
     */
    protected $indicador;
    /**
     * Código do participante (campo 02 do Registro 0150):
     * proprietário/possuidor que não seja o informante do arquivo
     * @var string
     */
    protected $participante;

    /**
     * Carga, validação e formatação dos dados
     */
    protected function validate()
    {
        $this->loadProperties($this);
    }
    
    /**
     * Construtor do campo
     * @return string
     */
    protected function create()
    {
        $k200 = "|K200|"
                . "$this->dtFim|"
                . "$this->codigo|"
                . "$this->qtd|"
                . "$this->indicador|"
                . "$this->participante|";
        return $k200;
    }
}
