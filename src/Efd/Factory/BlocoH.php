<?php

namespace NFePHP\Efd\Factory;

use NFePHP\Efd\Factory\Bloco;

class BlocoH extends Bloco
{

    public $bloco = 'H';
    public $H001 = ''; //ABERTURA DO BLOCO H
    public $aH005 = array(); //TOTAIS DO INVENTÁRIO
    public $aH010 = array(); //INVENTÁRIO
    public $aH020 = array(); //Informação complementar do Inventário
    
    private $bList = array('aH005', 'aH010', 'aH020');
    private $dtIni = '';
    private $dtFin = '';
    
    /**
     * setH001
     *    REGISTRO H001: ABERTURA DO BLOCO H
     * Este registro deve ser gerado para abertura do bloco H, indicando se há 
     * registros de informações no bloco.
     * Obrigatoriamente deverá ser informado “0” no campo IND_MOV no período 
     * de referência fevereiro de cada ano, relativamente a 31/12 do ano anterior.
     *  01 REG Texto fixo contendo "H001"  C 004 - O
     *  02 IND_MOV Indicador de movimento: C 001* - O
     *          0- Bloco com dados informados;
     *          1- Bloco sem dados informados
     * Nível hierárquico - 1
     *      Ocorrência – um por Arquivo
     * Campo 01 - Valor Válido: [H001]
     * Campo 02 - Valores Válidos: [0,1]
     *             Validação: se preenchido com ”1” (um), devem ser informados 
     *             os registros H001 e H990 (encerramento do bloco), significando
     *             que não há escrituração de inventário. Se preenchido com ”0”
     *             (zero), então deve ser informado pelo menos um registro além
     *             do registro H990 (encerramento do bloco).
     * @param type $comDados
     */
    public function setH001($comDados = true)
    {
        $this->k001 = "|H001|0|\n";
        if (! $comDados) {
            $this->k001 = "|H001|1|\n";
        }
    }
    
    /**
     * setH005
     *    REGISTRO H005: TOTAIS DO INVENTÁRIO
     * Este registro deve ser apresentado para discriminar os valores totais dos
     * itens/produtos do inventário realizado em 31 de dezembro de cada exercício,
     * ou nas demais datas estabelecidas pela legislação fiscal ou comercial.
     * A partir de julho de 2012, as empresas que exerçam as atividades descritas
     * na Classificação Nacional de Atividades Econômicas /Fiscal (CNAE-Fiscal)
     * sob os códigos 4681-8/01 e 4681-8/02 deverão apresentar este registro,
     * mensalmente, para discriminar os valores itens/produtos do Inventário 
     * realizado ao final de cada mês. Informar como MOT_INV o código “01”.
     * O inventário deverá ser apresentado no arquivo da EFD-ICMS/IPI, 
     * no segundo mês subsequente ao evento. Ex. inventário realizado em 31/12/08
     * deverá ser apresentado na EFD-ICMS/IPI de período de referência 
     * fevereiro de 2009. Atribuir valor Zero ao inventário significa
     * escriturar sem estoque.
     *   N Campo Descrição Tipo Tam Dec Obrig
     *   01 REG Texto fixo contendo "H005" C 004 - O
     *   02 DT_INV Data do inventário N 008* - O
     *   03 VL_INV Valor total do estoque N - 02 O
     *   04 MOT_INV Informe o motivo do Inventário: C 002* - O
     *     01 – No final no período;
     *     02 – Na mudança de forma de tributação da mercadoria (ICMS);
     *     03 – Na solicitação da baixa cadastral, paralisação temporária e outras situações;
     *     04 – Na alteração de regime de pagamento – condição do contribuinte;
     *     05 – Por determinação dos fiscos.
     *
     * Observações:
     *    Nível hierárquico - 2
     *    Ocorrência – 1:N
     * Campo 01 - Valor Válido: [H005]
     * Campo 02 - Preenchimento: informar a data do inventário no formato 
     *            “ddmmaaaa”, sem separadores de formatação.
     *            Validação: o valor informado no campo deve ser menor ou igual
     *            ao valor no campo DT_FIN do registro 0000. O inventário
     *            (MOT_INV = 1) não pode ser apresentado após o 2o. mês 
     *            subsequente à data informada no campo 02 (DT_INV).
     * Campo 03 - Validação: deve ser igual à soma do campo VL_ITEM do 
     *            registro H010. Se não houver registro H010, o valor neste 
     *            campo deve ser “0” (zero).
     * Campo 04 – Valores Válidos: [ 01, 02, 03, 04, 05]
     *            Preenchimento: Informe o motivo do Inventário:
     *         01 - No final no período - quando se tratar do estoque final
     *              mensal ou outra periodicidade. Deverá ser informado pela 
     *              empresa que está obrigada a inventário periódico ou que 
     *              espontaneamente queira apresentá-lo;
     *         02 – Na mudança de forma de tributação da mercadoria - 
     *              quando, por exigência da legislação ou por regime especial,
     *              houver alteração da forma de tributação da mercadoria.
     *              Neste caso, se a legislação determinar, o inventário pode 
     *              ser parcial.
     *              Exemplo: mercadoria no sistema de tributação por conta corrente
     *                       fiscal (crédito e débito) e a legislação passa a cobrar
     *                       o ICMS por substituição tributária;
     *        03 - Na solicitação de baixa cadastral – por ocasião da solicitação
     *             da baixa cadastral, paralisação temporária e outras situações.
     *        04 - Na alteração de regime de pagamento – condição do contribuinte
     *             – quando o contribuinte muda de condição, alterando o regime 
     *             de pagamento.
     *             Exemplo: Mudança da condição “Normal” por inclusão no 
     *                      “Simples Nacional” ou inclusão em “Regime Especial”;
     *        05 - Por solicitação da fiscalização - quando se tratar de solicitação
     *             específica da fiscalização. 
     * @param array $aDados
     */
    public function setH005($aDados = array())
    {
        $this->zIncludeData('H005', $aDados);
    }

    /**
     * setH010
     *     REGISTRO H010: INVENTÁRIO.
     * Este registro deve ser informado para discriminar os itens existentes no 
     * estoque. Este registro não pode ser fornecido se o campo 03 (VL_INV) do 
     * registro H005 for igual a “0” (zero).
     * N Campo Descrição Tipo Tam Dec Obrig
     * 01 REG Texto fixo contendo "H010" C 004 - O
     * 02 COD_ITEM Código do item (campo 02 do Registro 0200) C 060 - O
     * 03 UNID Unidade do item C 006 - O
     * 04 QTD Quantidade do item N - 03 O
     * 05 VL_UNIT Valor unitário do item N - 06 O
     * 06 VL_ITEM Valor do item N - 02 O
     * 07 IND_PROP Indicador de propriedade/posse do item: C 001* - O
     *     0- Item de propriedade do informante e em seu poder;
     *     1- Item de propriedade do informante em posse de terceiros;
     *     2- Item de propriedade de terceiros em posse do informante
     * 08 COD_PART Código do participante (campo 02 do Registro 0150): C 060 - OC - 
     *             proprietário/possuidor que não seja o informante do arquivo
     * 09 TXT_COMP L Descrição complementar. C - - OC
     * 10 COD_CTA Código da conta analítica contábil debitada/creditada C - - OC
     * Observações:
     *    Nível hierárquico - 3
     *    Ocorrência - 1:N
     * Campo 01 - Valor Válido: [H010]
     * Campo 02 - Validação: o valor informado no campo deve existir no campo 
     *            COD_ITEM do registro 0200.
     * Campo 03 - Validação: o valor deve ser informado no registro 0200, 
     *            campo UNID_INV.
     * Campo 07 - Valores Válidos: [0, 1, 2]
     *            Validação: se preenchido com valor ‘1’ (posse de terceiros) 
     *            ou ‘2’ (propriedade de terceiros), o campo COD_PART será
     *            obrigatório.
     * Campo 08 – Preenchimento obrigatório quando o indicador de propriedade 
     *            do item do campo 07 for “1” ou “2”.
     *            Validação: o valor fornecido deve constar no campo COD_PART 
     *            do registro 0150.
     * Campo 10 - Preenchimento: informar o código da conta analítica contábil 
     *            correspondente. Deve ser a conta credora ou devedora principal,
     *            podendo ser informada a conta sintética (nível acima da conta analítica).
     *            Nas situações de um mesmo código de item possuir mais de uma 
     *            destinação deve ser informada a conta referente ao item de 
     *            maior relevância. Este campo é obrigatório somente para os 
     *            perfis A e B.
     * @param type $aDados
     */
    public function setH010($aDados = array())
    {
        $this->zIncludeData('H010', $aDados);
    }
    
    /**
     * setH020
     *     REGISTRO H020: Informação complementar do Inventário.
     * Este registro deve ser preenchido para complementar as informações do 
     * inventário, quando o campo MOT_INV do registro H005 for de “02” a “05”.
     * Não informar, se o campo 03 (VL_INV) do registro H005 for igual a “0” (zero).
     * No caso de mudança da forma de tributação do ICMS da mercadoria (MOT_INV=2 do H005),
     * somente deverá ser gerado esse registro para os itens que sofreram 
     * alteração da tributação do ICMS.
     * N Campo Descrição Tipo Tam Dec Obrig
     * 01 REG Texto fixo contendo "H020" C 004 - O
     * 02 CST_ICMS Código da Situação Tributária referente ao ICMS, conforme a 
     *             Tabela indicada no item 4.3.1 N 003* - O
     * 03 BC_ICMS Informe a base de cálculo do ICMS N - 02 O
     * 04 VL_ICMS Informe o valor do ICMS a ser debitado ou creditado N 02 O
     * 
     * Obs.:Registro válido a partir de julho/2012.
     * Nível hierárquico - 4
     * Ocorrência – 1:N
     * Campo 02 - Preenchimento: informar o código CST (sob o enfoque do declarante)
     *            aplicável ao item, válido na data do levantamento do estoque. 
     *            Se MOT_INV = 2 ou 4 (campo 04 do registro H005), informar o 
     *            CST aplicável ao item, após a alteração.
     * Campo 03: Preenchimento: informar a base de cálculo aplicável ao item 
     *           (valor unitário). Se MOT_INV = 2 ou 4 (campo 04 do registro H005),
     *           informar a base de cálculo aplicável ao item (valor unitário),
     *           após a alteração.
     * Campo 04: Preenchimento: informar o ICMS aplicável ao item (valor unitário),
     *           utilizando a alíquota interna. Se MOT_INV = 2 ou 4 (campo 04 do 
     *           registro H005), informar o ICMS aplicável ao item (valor unitário),
     *           após a alteração.
     * @param type $aDados
     */
    public function setH020($aDados = array())
    {
        $this->zIncludeData('H010', $aDados);
    }
}
