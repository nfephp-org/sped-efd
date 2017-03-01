<?php

namespace NFePHP\EFD;

use stdClass;
use NFePHP\EFD\Blocos;
use InvalidArgumentException;

class Bloco
{
    /**
     * Class map
     * @var array
     */
    private static $available = [
        'b000'       => Blocos\Bloco0::class,
        'b001'       => Blocos\Bloco1::class,
        'b005'       => Blocos\Bloco5::class,
        'b100'       => Blocos\Bloco100::class,
        'b150'       => Blocos\Bloco150::class,
        'b190'       => Blocos\Bloco190::class,
        'b200'       => Blocos\Bloco200::class,
        'b400'       => Blocos\Bloco400::class,
        'b460'       => Blocos\Bloco460::class,
        'b990'       => Blocos\Bloco990::class,
        'c001'       => Blocos\BlocoC001::class,
        'c100'       => Blocos\BlocoC100::class,
        'c120'       => Blocos\BlocoC120::class,
        'c140'       => Blocos\BlocoC140::class,
        'c141'       => Blocos\BlocoC141::class,
        'c170'       => Blocos\BlocoC170::class,
        'c190'       => Blocos\BlocoC190::class,
        'c195'       => Blocos\BlocoC195::class,
        'c990'       => Blocos\BlocoC990::class,
        
    ];
    
    /**
     * Call and load classes for each block
     * @param string $name
     * @param stdClass $arguments
     * @return \NFePHP\EFD\className
     * @throws InvalidArgumentException
     */
    public static function __callStatic($name, stdClass $arguments)
    {
        $className = self::$available[strtolower($name)];
        if (empty($className)) {
            throw new InvalidArgumentException(
                'Este bloco não foi encontrado.'
            );
        }
        return new $className($arguments[0]);
    }
}
