<?php

namespace NFePHP\EFD\Blocos;

use stdClass;
use InvalidArgumentException;

class BlocoBase
{
    /**
     * @var stdClass
     */
    protected $std;
    
    /**
     * @var array
     */
    protected $parameters = [];
    
    /**
     * @var array
     */
    public $errors = [];
    
    /**
     * Base Constructor
     * @param stdClass $std
     */
    public function __construct(stdClass $std = null)
    {
        if (!empty($std)) {
            $this->std = $this->standardizeParams($this->parameters, $std);
            $this->loadProperties();
        }
    }
    
    /**
     * Load all properties from $this->std, from __construct method
     */
    protected function loadProperties()
    {
        $properties = array_keys(get_object_vars($this));
        foreach ($properties as $key) {
            $q = strtolower($key);
            if (isset($this->std->$q)) {
                $this->$key = $this->std->$q;
            }
        }
    }

    /**
     * Standardize parameters
     * @param array $parameters
     * @param stdClass $dados
     * @return stdClass
     */
    protected static function standardizeParams($parameters, stdClass $dados)
    {
        $properties = get_object_vars($dados);
        foreach ($properties as $key => $value) {
            $keyList[strtoupper($key)] = gettype($value);
        }
        foreach ($parameters as $key => $type) {
            if (!key_exists(strtoupper($key), $keyList)) {
                //nesse caso a classe não contem a propriedade então
                //ela deve ser criada pois todos os parametros devem
                //ser definidos
                $dados->{$key} = $value;
            }
        }
        return self::propertiesToLower($dados);
    }
    
    /**
     * Change properties names of stdClass to lower case
     * @param stdClass $dados
     * @return stdClass
     */
    protected static function propertiesToLower(stdClass $dados)
    {
        $properties = get_object_vars($dados);
        $clone = new stdClass();
        foreach ($properties as $key => $value) {
            $nk = strtolower($key);
            $clone->{$nk} = $value;
        }
        return $clone;
    }
    
    /**
     * String builder block
     * @param string $reg
     * @return string
     */
    protected function build($reg)
    {
        $register = '';
        foreach ($this->parameters as $key => $format) {
            $register .= $this->formatEFD(
                $reg,
                $key,
                $this->$key,
                $format
            ) . '|';
        }
        return $register;
    }

    /**
     * Format, add, and valid
     * @param string $reg
     * @param string $key
     * @param string $value
     * @param array $format
     * @return string
     */
    protected function formatEFD($reg, $key, $value, $format)
    {
        $type = $format[0];
        $min = $format[1][0];
        $max = $format[1][1];
        $decimals = $format[2];
        $required = $format[3];
        $content = $format[4];
        if ($type == 'C') {
            $value = $this->formatCharacter(
                $reg,
                $key,
                $value,
                $min,
                $max,
                $required,
                $content
            );
        } else {
            $value = $this->formatNumber(
                $reg,
                $key,
                $value,
                $min,
                $max,
                $decimals,
                $required,
                $content
            );
        }
        return $value;
    }
    
    /**
     * Format when value is Alphanumeric string
     * @param string $reg
     * @param string $key
     * @param string $value
     * @param int $min
     * @param int $max
     * @param bool $required
     * @param array $content
     * @return string
     */
    protected function formatCharacter(
        $reg,
        $key,
        $value,
        $min,
        $max,
        $required,
        $content
    ) {
        $value = trim($value);
        if ($required) {
            $value = str_pad($value, $min, ' ', STR_PAD_RIGHT);
        }
        $value = substr($value, 0, $max);
        if (!empty($content)) {
            if (!in_array($value, $content)) {
                $this->erro($reg, $key, $value);
            }
        }
        return $value;
    }
    
    /**
     * Format when value is numeric (int, float or numeric string)
     * @param string $reg
     * @param string $key
     * @param string $value
     * @param int $min
     * @param int $max
     * @param int $decimals
     * @param bool $required
     * @param array $content
     * @return string
     */
    protected function formatNumber(
        $reg,
        $key,
        $value,
        $min,
        $max,
        $decimals,
        $required,
        $content
    ) {
        $value = trim($value);
        $value = preg_replace("/[^0-9,.]/", "", $value);
        if ($decimals > 0) {
            $number = (float) $value;
            $value = number_format($number, $decimals, ',', '');
        }
        if ($required || !empty($value)) {
            $value = str_pad($value, $min, '0', STR_PAD_LEFT);
        }
        $value = substr($value, 0, $max);
        if (!empty($content)) {
            if (!in_array($value, $content)) {
                $this->erro($reg, $key, $value);
            }
        }
        return $value;
    }
    
    protected function erro($reg, $key, $value)
    {
        $msg =  "Bloco $reg : " .
            "[$key] = $value ! Valor informado difere dos esperados.";
        $this->errors[] = $msg;
    }
}
