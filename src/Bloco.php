<?php

namespace SpedPHP;

class Bloco
{
    public $buffer = '';
    private $bList = array();
    
    /**
     * render
     * Renderiza os dados carregados do bloco K e faz a montagem completa do bloco
     * e inclui o registro K990 para finalizar
     * 
     *   REGISTRO K990: ENCERRAMENTO DO BLOCO K
     *      Este registro destina-se a identificar o encerramento do bloco K e 
     *      a informar a quantidade de linhas (registros) existentes no bloco.
     *      No Campo Descrição Tipo Tam
     *      01 REG Texto fixo contendo "K990" C 004 - O
     *      02 QTD_LIN_H Quantidade total de linhas do Bloco K N 
     *   Observações:
     *      Nível hierárquico - 1
     *      Ocorrência –um por arquivo
     *   Campo 01 - Valor Válido: [K990]
     *   Campo 02 - Preenchimento: a quantidade de linhas a ser informada deve
     *              considerar também os próprios registros de abertura e 
     *              encerramento do bloco.
     *   Validação: o número de linhas (registros) existentes no bloco K 
     *              é igual ao valor informado no campo QTD_LIN_K
     * @param string $bloco 0,1,9,C,D,E,G,H ou K
     */
    public function render($bloco = '')
    {
        $bIni = $bloco.'001';
        $bFin = $bloco.'990';
        $iCount = 0;
        $this->buffer = $this->$bIni."\n";
        $iCount++;
        //para cada array listado na lista de blocos
        foreach ($this->bList as $aBlock) {
            //estas matrizes são matrizes com as linhas
            foreach ($this->$aBlock as $kBlock) {
                $this->buffer = $kBlock."\n";
                $iCount++;
            }
        }
        //adiciona a linha de fechamento ao total de linhas
        $iCount++;
        $fechamento = "|$bFin|$iCount|n";
        $this->buffer .= $fechamento;
    }
    
    
    /**
     * get
     * Retorna o bloco montado em texto
     * @return string
     */
    public function get()
    {
        return $this->buffer;
    }
    
    /**
     * save
     * Salva o bloco em um aquivo
     * @param type $filename
     */
    public function save($filename = '')
    {
        file_put_contents($filename, $this->buffer);
    }
    
    /**
     * zIncludeData
     * Inclui os dados passados no respectivo bloco de dados
     * @param string $bloco
     * @param array $aDados  array(array())
     */
    protected function zIncludeData($bloco = '', $aDados = array())
    {
        $matriz = array();
        foreach ($aDados as $dado) {
            $conjunto =  "|$bloco";
            foreach ($dado as $duni) {
                $conjunto .=  "|$duni";
            }
            $conjunto .= "|\n";
            $matriz[] = $conjunto;
        }
        return $matriz;
    }
}
