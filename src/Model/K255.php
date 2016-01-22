<?php
/**
 * Created by PhpStorm.
 * User: administrador
 * Date: 08/12/15
 * Time: 16:23
 */

namespace NFePHP\EFD\Model;


class K255
{
        protected $inicial = 'K255';
        protected $data_consumo = ''; //* 02 DT_CONS Data do reconhecimento do consumo do insumo referente ao  produto informado no campo 04 do Registro K250 N 8
        protected $cod_item = ''; //* 03 COD_ITEM Código do insumo (campo 02 do Registro 0200) C 60
        protected $cod_substituto = ''; //* 04 COD_INS_SUBST Código do insumo que foi substituído, caso ocorra a substituição (campo 02 do Registro 0210) C 60
        protected $qtdade = ''; //* 05 QTD Quantidade de consumo do insumo. N 17 3

        public function __construct($data_consumo = '', $cod_item = '', $cod_substituto = '', $qtdade = '')
        {
            $this->data_consumo = $data_consumo;
            $this->cod_item = substr(trim($cod_item), 0, 60);
            $this->cod_substituto = substr(trim($cod_substituto), 0, 60);
            $this->qtdade = $qtdade;

            return $this->getK255();
        }

        public function getK255()
        {
            return "$this->inicial|$this->data_consumo|$this->cod_item|$this->cod_substituto|$this->qtdade|\n";
        }
}
