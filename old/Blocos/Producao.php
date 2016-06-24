<?php

namespace NFePHP\EFD\Blocos;

/**
 * BLOCO K: CONTROLE DA PRODUÇÃO E DO ESTOQUE
 *
 * Este bloco se destina a prestar informações mensais da produção e respectivo consumo de insumos, bem como do
 * estoque escriturado, relativos aos estabelecimentos industriais ou a eles equiparados pela legislação federal
 * e pelos atacadistas, podendo, a critério do Fisco, ser exigido de estabelecimento de
 * contribuintes de outros setores (conforme § 4o do art. 63 do Convênio s/número, de 1970). O bloco K entrará
 * em vigor na EFD a partir de 2016.
 *
 *
 * REGISTRO K001: ABERTURA DO BLOCO K
 * Este registro deve ser gerado para abertura do bloco K, indicando se há registros de informações no bloco.
 *
 * Contem:
 *
 * Estoque
 * EstoqueMovimentacao
 * IndustrializacaoItem
 * IndustrializacaoInsumos
 * PeriodoApuracao
 * ProducaoInsumos
 * ProducaoItem
 *
 * REGISTRO K990: ENCERRAMENTO DO BLOCO K
 */

use NFePHP\EFD\Blocos\Basic\Factory;
use ArrayObject;

class Producao extends Factory
{
    /**
     * Array com o conjunto de dados de um bloco
     * @var array
     */
    protected $bloco = null;
    /**
     * Identificação do Bloco a que essa classe pertence
     * @var string
     */
    protected $group = null;
    /**
     * REGISTRO K100: PERÍODO DE APURAÇÃO DO ICMS/IPI
     * @var array
     */
    protected $periodoApuracao = null;
    /**
     * REGISTRO K200: ESTOQUE ESCRITURADO
     * @var array
     */
    protected $estoque = null;
    /**
     * REGISTRO K220: OUTRAS MOVIMENTAÇÕES INTERNAS ENTRE MERCADORIAS
     * @var array
     */
    protected $estoqueMovimentacao = null;
    /**
     * REGISTRO K230: ITENS PRODUZIDOS
     * @var array
     */
    protected $producaoItem = null;
    /**
     * REGISTRO K235: INSUMOS CONSUMIDOS
     * @var array
     */
    protected $producaoInsumos = null;
    /**
     * REGISTRO K250: INDUSTRIALIZAÇÃO EFETUADA POR TERCEIROS – ITENS PRODUZIDOS
     * @var array
     */
    protected $industrializacaoItem = null;
    /**
     * REGISTRO K255: INDUSTRIALIZAÇÃO EM TERCEIROS – INSUMOS CONSUMIDOS
     * @var array
     */
    protected $industrializacaoInsumos = null;

    /**
     * Construtor
     * Instancia as propriedades da classe
     */
    public function __construct()
    {
        $this->bloco = [];
        $this->estoque = [];
        $this->estoqueMovimentacao = [];
        $this->industrializacaoInsumos = [];
        $this->industrializacaoItem = [];
        $this->periodoApuracao = [];
        $this->producaoInsumos = [];
        $this->producaoItem = [];
        $this->group = get_class();
        parent::__construct();
    }
    
    /**
     * renderiza o bloco
     */
    public function render()
    {
        $nK200 = count($this->estoque);
        $nK220 = count($this->estoqueMovimentacao);
        $nK230 = count($this->producaoItem);
        $nK235 = count($this->producaoInsumos);
        $nK250 = count($this->industrializacaoItem);
        $nK255 = count($this->industrializacaoInsumos);
        $soma = $nK200 + $nK220 + $nK230 + $nK235 + $nK250 + $nK255;
        //REGISTRO K001: ABERTURA DO BLOCO K
        $indicador = ($soma > 0) ? '1' : '0';
        $this->bloco[] = "|K001|$indicador|";
        $this->bloco = array_merge($this->bloco, $this->periodoApuracao);
        $this->bloco = array_merge($this->bloco, $this->estoque);
        $this->bloco = array_merge($this->bloco, $this->estoqueMovimentacao);
        $this->bloco = array_merge($this->bloco, $this->producaoItem);
        $this->bloco = array_merge($this->bloco, $this->producaoInsumos);
        $this->bloco = array_merge($this->bloco, $this->industrializacaoItem);
        $this->bloco = array_merge($this->bloco, $this->industrializacaoInsumos);
        //REGISTRO K990: ENCERRAMENTO DO BLOCO K
        $this->bloco[] = "|K990|".($soma + 3)."|";
        return $this->bloco;
    }
}
