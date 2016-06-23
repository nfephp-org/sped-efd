<?php

namespace NFePHP\EFD\Blocos\Producao;

/*
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

class Estoque
{
    protected $k200;
    
    protected function validate()
    {
        $this->loadProperties($this);
    }
    
    protected function create()
    {
        return $this;
    }
}
