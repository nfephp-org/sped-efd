<?php

namespace NFePHP\EFD\Tests;

use NFePHP\EFD\Elements\ICMSIPI\Z0001;
use PHPUnit\Framework\TestCase;
use stdClass;

class Z0001Test extends TestCase
{
    public function testZ0001()
    {
        $std = new stdClass();
        $std->ind_mov = 1;
        $b1 = new Z0001($std);
        $resp = "{$b1}";
        $expected = '|0001|1|';
        $this->assertEquals($expected, $resp);
    }

    public function testZ0001FailWithString()
    {
        $std = new stdClass();
        $std->ind_mov = 'A';
        $z1 = new Z0001($std);
        $this->assertEquals('[0001] campo: IND_MOV deve ser um numero.', $z1->errors[0]);
    }

    public function testZ0001FailWithNotValidNumber()
    {
        $std = new stdClass();
        $std->ind_mov = 2;
        $z1 = new Z0001($std);
        $this->assertEquals('[0001] campo: IND_MOV valor incorreto [2]. (validação: ^[0-1]{1}$)', $z1->errors[0]);

    }
}
