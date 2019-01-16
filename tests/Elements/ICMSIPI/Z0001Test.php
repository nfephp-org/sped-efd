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
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testZ0001FailWithString()
    {
        $std = new stdClass();
        $std->ind_mov = 'A';
        $b1 = new Z0001($std);
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testZ0001FailWithNotValidNumber()
    {
        $std = new stdClass();
        $std->ind_mov = 2;
        $b1 = new Z0001($std);
    }
}

