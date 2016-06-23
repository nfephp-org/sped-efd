<?php

namespace NFePHP\EFD\Factory;

/**
 *  BLOCO K – CONTROLE DA PRODUÇÃO E DO ESTOQUE
 *  Este bloco se destina a prestar informações da produção e do estoque escriturado
 *  pelos estabelecimentos industriais ou a eles equiparados pela legislação federal
 *  e pelos atacadistas, podendo, a critério do Fisco, ser exigido de estabelecimento
 *  de contribuintes de outros setores (conforme Convênio s/número, de 1970).
 * 
 *  Conforme Guia Prático EFD-ICMS/IPI – Versão 2.0.16 Atualização: 13/03/2015
 */

use NFePHP\EFD\Factory\Bloco;

class Producao extends Bloco
{
    public $bloco = 'K';
    public $K001 = ''; //ABERTURA DO BLOCO K
    public $aK100 = array(); //PERÍODO DE APURAÇÃO DO ICMS/IPI
    public $aK200 = array(); //ESTOQUE ESCRITURADO
    public $aK220 = array(); //OUTRAS MOVIMENTAÇÕES INTERNAS ENTRE MERCADORIAS
    public $aK230 = array(); //ITENS PRODUZIDOS
    public $aK235 = array(); //INSUMOS CONSUMIDOS
    public $aK250 = array(); //INDUSTRIALIZAÇÃO EFETUADA POR TERCEIROS – ITENS PRODUZIDOS
    public $aK255 = array(); //INDUSTRIALIZAÇÃO EM TERCEIROS – INSUMOS CONSUMIDOS
    
    private $bList = array('aK100', 'aK200', 'aK220', 'aK230', 'aK235', 'aK250', 'aK255');
    private $dtIni = '';
    private $dtFin = '';
    
    /**
     * setK001
     * REGISTRO K001: ABERTURA DO BLOCO K
     *   Este registro tem o objetivo de informar o período de apuração do ICMS
     *   ou do IPI, prevalecendo os períodos mais curtos. Contribuintes com mais
     *   de um período de apuração no mês declaram um registro K100 para cada
     *   período no mesmo arquivo. Não podem ser informados dois ou mais registros
     *   com os mesmos campos DT_INI e DT_FIN.
     *   N. Campo           Descrição         tipo Tam dec Obrig
     *   01  REG   Texto fixo contendo "K001"   C  004  -    O
     *   02 IND_MOV                             C  001  -    O
     *   Indicador de movimento:
     *         0- Bloco com dados informados;
     *         1- Bloco sem dados informados
     *   Observações:
     *      Nível hierárquico - 1
     *      Ocorrência – um por Arquivo
     *   Campo 01 - Valor Válido: [K001]
     *   Campo 02 - Valores Válidos: [0,1]
     *   Validação: se preenchido com ”1” (um), devem ser informados os registros
     *   K001 e K990 (encerramento do bloco), significando que não há informação
     *   do controle da produção e do estoque. Se preenchido com ”0” (zero),
     *   então deve ser informado pelo menos um registro K100 e seus respectivos
     *   registros filhos, além do registro K990 (encerramento do bloco).
     *
     * @param bool $comDados
     */
    public function abertura($comDados = true)
    {
        $this->K001 = "|K001|0|\n";
        if (! $comDados) {
            $this->K001 = "|K001|1|\n";
        }
    }
    
    /**
     * setK100
     * REGISTRO K100 – PERÍODO DE APURAÇÃO DO ICMS/IPI
     *   Este registro tem o objetivo de informar o período de apuração do ICMS
     *   ou do IPI, prevalecendo os períodos mais curtos. Contribuintes com mais
     *   de um período de apuração no mês declaram um registro K100 para cada
     *   período no mesmo arquivo.
     *   Não podem ser informados dois ou mais registros com os mesmos 
     *   campos DT_INI e DT_FIN.
     *   No Campo Descrição Tipo Tam Dec Obrig.
     *      01 REG Texto fixo contendo "K100" C 004 - O
     *      02 DT_INI Data inicial a que a apuração se refere N 008 - O
     *      03 DT_FIN Data final a que a apuração se refere N 008 - O
     *      Formato YYYYMMDD
     * Observações:
     *      Nível hierárquico - 2
     *      Ocorrência – Vários
     * Campo 01 - Valor Válido: [K100]
     * Campo 02 - Validação: a data inicial deve estar compreendida no período
     *            informado nos campos DT_INI e DT_FIN do Registro 0000;
     * Campo 03 - Validação: a data final deve estar compreendida no período
     *            informado nos campos DT_INI e DT_FIN do Registro 0000;
     * @param string $dtIni
     * @param string $dtFin
     */
    public function periodo($dtIni = '', $dtFin = '')
    {
        $this->dtIni = $dtIni;
        $this->dtFin = $dtFin;
        $this->aK100[] = "|K100|$dtIni|$dtFin|\n";
    }
    
    /**
     * setK200
     *  REGISTRO K200 – ESTOQUE ESCRITURADO
     *    Este registro tem o objetivo de informar o estoque final escriturado 
     *    do período de apuração informado no Registro K100, por tipo de estoque,
     *    das mercadorias de tipos 00, 01, 02, 03, 04, 05 e 10 – campo TIPO_ITEM
     *    do Registro 0200.
     *  A unidade de medida é, obrigatoriamente, a de controle de estoque 
     *  constante no campo 06 do registro 0200 – UNID_INV.
     *  A chave deste registro são os campos: DT_EST, COD_ITEM, IND_EST e COD_PART (quando houver).
     *   No Campo Descrição Tipo Tam Dec Obrig.
     *   01 REG Texto fixo contendo "K200" C 4 - O
     *   02 DT_EST Data do estoque final N 8 - O  YYYYMMDD = $dtFim de K100
     *   03 COD_ITEM Código do item (campo 02 do Registro 0200) C 60 - O
     *   04 QTD Quantidade em estoque N 17 3 O
     *   05 IND_EST Indicador do tipo de estoque:  C 1 - O
     *          0 = Estoque de propriedade do informante e em seu poder;
     *          1 = Estoque de propriedade do informante e em posse de terceiros;
     *          2 = Estoque de propriedade de terceiros e em posse do informante
     *   06 COD_PART Código do participante (campo 02 do Registro 0150): 60 - O
     *      - proprietário/possuidor que não seja o informante do arquivo
     *   Observações:
     *       Nível hierárquico - 3
     *       Ocorrência – Vários
     *   Campo 01 - Valor Válido: [K200]
     *   Campo 02 – Validação: a data do estoque deve ser igual à data final 
     *              do período de apuração – campo DT_FIN do Registro K100.
     *   Campo 03 – Validação: o código do item deverá existir no campo 
     *              COD_ITEM do Registro 0200.
     *   Campo 05 - Valores Válidos: [0, 1, 2] - Validação: se preenchido com 
     *              valor ‘1’ (posse de terceiros) ou ‘2’ (propriedade de terceiros),
     *              o campo COD_PART será obrigatório.
     *   Campo 06 – Preenchimento: obrigatório quando o IND_EST for “1” ou “2”.
     *              Validação: o valor fornecido deve constar no campo COD_PART 
     *              do registro 0150
     * @param array $aDados
     * 
     * array(
     *     array('YYYYMMDD', 'prodcod', 'qtdade', '0 ou 1 ou 2', 'vazio ou CNPJ do proprietario'),
     *     array(....
     *     .
     *     .
     *     .
     * );
     */
    public function estoque($aDados = array())
    {
        $this->aK200 = $this->zIncludeData('K200', $aDados);
    }
    
    /**
     * setK220
     *    REGISTRO K220 – OUTRAS MOVIMENTAÇÕES INTERNAS ENTRE MERCADORIAS
     *    Este registro tem o objetivo de informar a movimentação interna 
     *    entre mercadorias, que não se enquadre nas movimentações internas 
     *    já informadas nos Registros K230 e K235: 
     *                  produção acabada 
     *                  e consumo no processo produtivo, respectivamente.
     *    A unidade de medida é, obrigatoriamente, aquela constante no 
     *    campo 06 do registro 0200: UNID_INV. A quantidade movimentada deve 
     *    ser expressa na unidade de medida do item de origem. 
     *    Exemplo: reclassificação de um produto em outro código em função 
     *    do cliente a que se destina.
     *    A chave deste registro são os campos: DT_MOV, COD_ITEM_ORI e COD_ITEM_DEST.
     *    No Campo Descrição Tipo Tam
     *    01 REG Texto fixo contendo "K220" C 4
     *    02 DT_MOV Data da movimentação interna N 8
     *    03 COD_ITEM_ORI Código do item de origem (campo 02 do Registro 0200) C 60
     *    04 COD_ITEM_DEST Código do item de destino (campo 02 do Registro 0200) C 60
     *    05 QTD Quantidade movimentada N 17 3
     * Observações:
     *    Nível hierárquico - 3
     *    Ocorrência – Vários
     * Campo 01 - Valor Válido: [K220]
     * Campo 02: Validação: a data deve estar compreendida no período informado
     *           nos campos DT_INI e DT_FIN do Registro K100;
     * Campo 03: Validação: o código do item de origem deverá existir no 
     *           campo COD_ITEM do Registro 0200
     * Campo 04: Validação: o código do item de destino deverá existir no 
     *           campo COD_ITEM do Registro 0200. O valor informado deve ser 
     *           diferente do COD_ITEM_ORI.
     * Campo 05: Preenchimento: informar a quantidade movimentada do item de 
     *           origem codificado no campo 03.
     * 
     * @param array $aDados
     */
    public function movimento($aDados = array())
    {
        $this->aK220 = $this->zIncludeData('K220', $aDados);
    }

    /**
     * setK230
     *  REGISTRO K230 – ITENS PRODUZIDOS
     *  Este registro tem o objetivo de informar a produção acabada de 
     *  produto em processo (tipo 03 – campo TIPO_ITEM do registro 0200) e
     *  produto acabado (tipo 04 – campo TIPO_ITEM do registro 0200).
     *  Deverá existir mesmo que a quantidade de produção acabada seja igual 
     *  a zero, nas situações em que exista o consumo de item componente/insumo
     *  no registro filho K235.
     *  A unidade de medida é, obrigatoriamente, a de controle de estoque 
     *  constante no campo 06 do registro 0200: UNID_INV.
     *  Quando houver identificação da ordem de produção, a chave deste 
     *  registro são os campos: COD_DOC_OP e COD_ITEM.
     *  Nos casos em que a ordem de produção não for identificada, o campo 
     *  chave passa a ser COD_ITEM.
     *  No Campo Descrição Tipo Tam Dec Obrig
     *  01 REG Texto fixo contendo "K230" C 4
     *  02 DT_INI_OP Data de início da ordem de produção N 8
     *  03 DT_FIN_OP Data de conclusão da ordem de produção N 8
     *  04 COD_DOC_OP Código de identificação da ordem de produção C 30
     *  05 COD_ITEM Código do item produzido (campo 02 do Registro 0200) C 60
     *  06 QTD_ENC Quantidade de produção acabada N 17 3
     *  Observações:
     *     Nível hierárquico - 3
     *     Ocorrência – Vários
     * Campo 01 - Valor Válido: [K230]
     * Campo 02 - Preenchimento: a data de início deverá ser informada se 
     *            existir ordem de produção, ainda que iniciada em período de 
     *            apuração cujo registro K100 correspondente esteja em um 
     *            arquivo relativo a um mês anterior.
     *   Validação: obrigatório se informado o campo COD_DOC_OP. O valor 
     *   informado deve ser menor ou igual a DT_FIN do registro 0000.
     * Campo 03 - Preenchimento: informar a data de conclusão da ordem de 
     *            produção. Ficará em branco, caso a ordem de produção não seja 
     *            concluída até a data de encerramento do período de apuração.
     *   Validação: Se preenchido, DT_FIN_OP deve ser menor ou igual a DT_FIN 
     *   do registro K100 e maior ou igual a DT_INI_OP
     * Campo 04 – Preenchimento: informar o código da ordem de produção.;
     * Campo 05 – Validação: o código do item produzido deverá existir no campo
     *            COD_ITEM do Registro 0200;
     * @param array $aDados
     */
    public function producaoItens($aDados = array())
    {
        $this->aK230 = $this->zIncludeData('K230', $aDados);
    }
    
    /**
     * setK235 
     *    REGISTRO K235 – INSUMOS CONSUMIDOS
     * Este registro tem o objetivo de informar o consumo de mercadoria 
     * no processo produtivo, vinculado ao produto resultante informado no 
     * campo COD_ITEM do Registro K230. 
     * A unidade de medida é, obrigatoriamente, a de controle de estoque 
     * constante no campo 06 do registro 0200: UNID_INV.
     * A chave deste registro são os campos DT_SAÍDA e COD_ITEM.
     * No Campo Descrição Tipo Tam Dec Obrig
     * 01 REG Texto fixo contendo "K235" C 4
     * 02 DT_SAÍDA Data de saída do estoque para alocação ao produto N 8
     * 03 COD_ITEM Código do item componente/insumo (campo 02 do Registro 0200) C 60
     * 04 COD_INS_SUBST Código do insumo que foi substituído, caso ocorra a
     *                  substituição (campo 02 do Registro 0210) C 60
     * 05 QTD Quantidade consumida do item 17 3
     * Observações:
     *    Nível hierárquico - 4
     *    Ocorrência - 1:N
     * Campo 01 - Valor Válido: [K235]
     * Campo 02 - Validação: a data deve estar compreendida no período da 
     *            ordem de produção, se existente, campos DT_INI_OP e DT_FIN_OP 
     *            do Registro K230. Se DT_FIN_OP do Registro K230 estiver 
     *            em branco, o campo DT_SAÍDA deverá ser maior que o campo 
     *            DT_INI_OP do Registro K230 e menor ou igual a 
     *            DT_FIN do Registro 0000.
     * Campo 03 – Validações:
     *     a) o código do item componente/insumo deverá existir no campo 
     *        COD_ITEM do Registro 0200;
     *     b) caso o campo COD_INS_SUBST esteja em branco, o código do item 
     *        componente/insumo deve existir também no Registro 0210 para o 
     *        mesmo produto resultante – K230/0200;
     *     c) o código do item componente/insumo deve ser diferente do 
     *        código do produto resultante (COD_ITEM do Registro K230);
     * Campo 05 – Preenchimento: informar o código do item componente/insumo 
     *            que estava previsto para ser consumido no Registro 0210 e 
     *            que foi substituído pelo COD_ITEM deste registro;
     *            Validação: o código do insumo substituído deve existir no 
     *            Registro 0210 para o mesmo produto resultante – K230/0200.
     * @param array $aDados
     */
    public function producaoInsumos($aDados = array())
    {
        $this->aK235 = $this->zIncludeData('K235', $aDados);
    }
    
    /**
     * setK250
     *    REGISTRO K250 – INDUSTRIALIZAÇÃO EFETUADA POR TERCEIROS – ITENS PRODUZIDOS
     * Este registro tem o objetivo de informar os produtos que foram 
     * industrializados por terceiros e sua quantidade.
     * A unidade de medida é, obrigatoriamente, a de controle de estoque
     * constante no campo 06 do registro 0200: UNID_INV.
     * A chave deste registro são os campos DT_PROD e COD_ITEM.
     * No Campo  Descrição Tipo Tam Dec Obrig. 
     * 01 REG Texto fixo contendo "K250" C 4 - O
     * 02 DT_PROD Data do reconhecimento da produção ocorrida no terceiro N 8 - O
     * 03 COD_ITEM Código do item produzido (campo 02 do Registro 0200) C 60 - O
     * 04 QTD Quantidade produzida N 17 3 O
     * Observações:
     *      Nível hierárquico - 3
     *      Ocorrência – Vários
     * Campo 01 - Valor Válido: [K250]
     * Campo 02 - Validação: a data deve estar compreendida no período informado
     *            nos campos DT_INI e DT_FIN do Registro K100;
     * Campo 03 – Validações: 
     *   a) o código do item produzido deverá existir no campo COD_ITEM do 
     *      Registro 0200;
     *   b) o TIPO_ITEM do Registro 0200 deve ser igual a 03 ou 04;
     * Campo 04 - Preenchimento: a quantidade produzida deve considerar a 
     *            quantidade que retornou do terceiro e a variação de estoque ocorrida.
     * @param array $aDados
     */
    public function industrializacaoItens($aDados = array())
    {
        $this->aK250 = $this->zIncludeData('K250', $aDados);
    }
    
    /**
     * setK255
     *   REGISTRO K255 – INDUSTRIALIZAÇÃO EM TERCEIROS – INSUMOS CONSUMIDOS
     * Este registro tem o objetivo de informar a quantidade de consumo do 
     * insumo que foi remetido para ser industrializado em terceiro, vinculado
     * ao produto resultante informado no campo COD_ITEM do Registro K250.
     * A unidade de medida é, obrigatoriamente, a de controle de estoque 
     * constante no campo 06 do registro 0200: UNID_INV.
     * A chave deste registro são os campos DT_CONS e COD_ITEM deste Registro.
     * No Campo Descrição Tipo Tam Dec Obrig
     * 01 REG Texto fixo contendo "K255" C 4 
     * 02 DT_CONS Data do reconhecimento do consumo do insumo referente ao 
     *            produto informado no campo 04 do Registro K250 N 8
     * 03 COD_ITEM Código do insumo (campo 02 do Registro 0200) C 60
     * 04 COD_INS_SUBST Código do insumo que foi substituído, caso ocorra 
     *                  a substituição (campo 02 do Registro 0210) C 60
     * 05 QTD Quantidade de consumo do insumo. N 17 3
     *  Observações:
     *     Nível hierárquico - 4
     *     Ocorrência - 1:N
     * Campo 01 - Valor Válido: [K255]
     * Campo 02 - Validação: a data deve estar compreendida no período informado
     *            nos campos DT_INI e DT_FIN do Registro K100;
     * Campo 03 – Validações:
     *    a) o código do insumo deverá existir no campo COD_ITEM do Registro 0200;
     *    b) caso o campo COD_INS_SUBST esteja em branco, o código do item 
     *       componente/insumo deve existir também no Registro 0210 para o mesmo
     *       produto resultante – K250/0200;
     *    c) O código do insumo deve ser diferente do código do produto 
     *       resultante (COD_ITEM do Registro K250);
     * Campo 04 - Preenchimento: a quantidade de consumo do insumo deve refletir
     *            a quantidade consumida para se ter a produção acabada informada
     *            no campo QTD do Registro K250;
     * Campo 05 – Preenchimento: informar o código do item componente/insumo 
     *            que estava previsto para ser consumido no Registro 0210 e que
     *            foi substituído pelo COD_ITEM deste registro;
     *            Validação: o código do insumo substituído deve existir no 
     *            Registro 0210 para o mesmo produto resultante – K250/0200.
     * @param array $aDados
     */
    public function industrializacaoInsumos($aDados = array())
    {
        $this->aK255 = $this->zIncludeData('K255', $aDados);
    }
    
    public function encerramento()
    {
        
    }
}
