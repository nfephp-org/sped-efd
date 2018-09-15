<?php

namespace NFePHP\EFD\Blocks;

use \stdClass;
use NFePHP\Common\Strings;

abstract class ElementBase
{

    public $std;
    protected $parameters;
    private $reg;

    public function __construct($reg)
    {
        $this->reg = $reg;
    }

    public function postValidation()
    {
        return true;
    }

    /**
     * Valida e ajusta os dados de entrada para os padões estabelecidos
     * @param \stdClass $std
     */
    protected function standarize(\stdClass $std)
    {
        if (empty($this->parameters)) {
            throw new Exception('Parametros não estabelecidos na classe');
        }
        $errors = [];
        //passa todos as variáveis do stdClass para minusculo
        $arr = array_change_key_case(get_object_vars($std), CASE_LOWER);
        $std = json_decode(json_encode($arr));
        //paga as chaves dos parametros e passa para minusculo
        $stdParam = json_decode(json_encode($this->parameters));
        $this->parameters = array_change_key_case(get_object_vars($stdParam), CASE_LOWER);
        $paramKeys = array_keys($this->parameters);
        //passa os paramatros com as chaves modificadas para um stdClass
        $stdParam = json_decode(json_encode($this->parameters));
        $newstd = new \stdClass();
        foreach ($paramKeys as $key) {
            if (!key_exists($key, $arr)) {
                $newstd->$key = null;
            } else {
                //se o valor para o parametro foi passado, então validar
                $resp = $this->isFieldInError(
                    $std->$key,
                    $stdParam->$key,
                    strtoupper($key),
                    $this->reg
                );
                if ($resp) {
                    $errors[] = $resp;
                }
                //e formatar o dado passado
                $formated = $this->formater(
                    $std->$key,
                    $stdParam->$key->format,
                    strtoupper($key)
                );
                //Strings::replaceUnacceptableCharacters()
                $newstd->$key = $formated;
            }
        }
        //se algum erro for detectado disparar um Exception
        if (!empty($errors)) {
            throw new \InvalidArgumentException(implode("\n", $errors));
        }
        return $newstd;
    }

    /**
     * Verifica os campos comrelação ao tipo e seu regex
     * @param string|integer\float $input
     * @param \stdClass $param
     * @param string $fieldname
     * @return string|boolean
     */
    protected function isFieldInError($input, $param, $fieldname, $element)
    {
        $type = $param->type;
        $regex = $param->regex;
        if (empty($regex)) {
            return false;
        }
        switch ($type) {
            case 'integer':
                if (!is_integer($input)) {
                    return "$element campo: $fieldname deve ser um valor numérico inteiro.";
                }
                break;
            case 'numeric':
                if (!is_numeric($input)) {
                    return "$element campo: $fieldname deve ser um numero.";
                }
                break;
            case 'string':
                if (!is_string($input)) {
                    return "$element campo: $fieldname deve ser uma string.";
                }
                break;
        }
        $input = (string) $input;
        if ($regex === 'email') {
            if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
                return "$element campo: $fieldname Esse email [$input] está incorreto.";
            }
            return false;
        }
        if (!preg_match("/$regex/", $input)) {
            return "$element campo: $fieldname valor incorreto [$input]. (validação: $regex)";
        }
        return false;
    }

    /**
     * Formata os campos float
     * @param string|integer|float $value
     * @param string $format
     * @return string|integer
     * @throws \InvalidArgumentException
     */
    protected function formater($value, $format = null, $fieldname = '')
    {
        if (empty($value)) {
            return $value;
        }
        if (!is_numeric($value)) {
            //se não é numerico então permitir apenas ASCII
            return Strings::toASCII($value);
        }
        if (empty($format)) {
            return $value;
        }
        $n = explode('v', $format);
        $mdec = strpos($n[1], '-');
        $p = explode('.', $value);
        $ndec = !empty($p[1]) ? strlen($p[1]) : 0; //decimal digits
        $nint = strlen($p[0]); //integer digits
        if ($nint > $n[0]) {
            throw new \InvalidArgumentException("O [$fieldname] é maior "
            . "que o permitido [$format].");
        }
        if ($mdec !== false) {
            //is multi decimal
            $mm = explode('-', $n[1]);
            $decmin = $mm[0];
            $decmax = $mm[1];
            //verificar a quantidade de decimais informada
            //se maior ou igual ao minimo e menor ou igual ao maximo
            if ($ndec >= $decmin && $ndec <= $decmax) {
                //deixa como está
                return $value;
            }
            //se menor que o minimo, formata para o minimo
            if ($ndec < $decmin) {
                return number_format($value, $decmin, '.', '');
            }
            //se maior que o maximo, formata para o maximo
            if ($ndec > $decmax) {
                return number_format($value, $decmax, '.', '');
            }
        }
        return number_format($value, $n[1], '.', '');
    }

    /**
     * Construtor do elemento
     * @param type $reg
     * @return string
     */
    protected function build()
    {
        $register = '';
        foreach ($this->parameters as $key => $params) {
            $register .= $this->std->$key . '|';
        }
        return $register;
    }

    /**
     * Retorna o elemento formatado em uma string
     * @return string
     */
    public function __toString()
    {
        return '|' . $this->reg . '|' . $this->build();
    }
}
