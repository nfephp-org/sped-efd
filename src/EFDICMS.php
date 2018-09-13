<?php

namespace NFePHP\EFD;

use NFePHP\EFD\Blocks\BlockInterface;

/**
 * Classe construtora do arquivo EFD ICMS/IPI
 * 
 * Esta classe recebe as classes listadas com o metodo add() e 
 * executa o processo de construção final do arquivo
 */
class EFDICMS
{
    protected $possibles = [
        'block0' => ['class' => Blocks\Block0::class, 'order' => 1],
        'block1' => ['class' => Blocks\Block1::class, 'order' => 2],
        'blockb' => ['class' => Blocks\BlockB::class, 'order' => 3],
        'blockc' => ['class' => Blocks\BlockC::class, 'order' => 4],
        'blockd' => ['class' => Blocks\BlockD::class, 'order' => 5],
        'blocke' => ['class' => Blocks\BlockE::class, 'order' => 6],
        'blockg' => ['class' => Blocks\BlockG::class, 'order' => 7],
        'blockh' => ['class' => Blocks\BlockH::class, 'order' => 8],
        'blockk' => ['class' => Blocks\BlockK::class, 'order' => 9],
        //'block9' => ['class' => Blocks\Block9::class, 'order' => 1], //totalizador
    ];
    
    public function __construct()
    {
        //todo
    }
    
    /**
     * Add 
     * @param BlockInterface $block
     */
    public function add(BlockInterface $block)
    {
        //todo
        $name = strtolower((new \ReflectionClass($block))->getShortName());
        //$name = strtolower(get_class($block));
        if (key_exists($name, $this->possibles)) {
            $this->{$name} = $block->get();
        }    
    }
    
    /**
     * Create a EFD string
     */
    public function get()
    {
        //todo
        $efd = '';
        $keys = array_keys($this->possibles);
        foreach($keys as $key) {
            if (isset($this->$key)) {
                $efd .= $this->$key;
            }
        }
        $efd .= $this->totalize($efd); 
        return $efd;
    }
    
    protected function totalize($efd)
    {
        $tot = '';
        $keys = [];
        $aefd = explode("\n", $efd);
        foreach ($aefd as $element) {
            $param = explode("|", $element);
            if (!empty($param[1])) {
                $key = $param[1];
                if (!empty($keys[$key])) {
                    $keys[$key] += 1;
                } else {
                    $keys[$key] = 1;
                }    
            }
        }
        foreach ($keys as $key => $value) {
            $n = 0;
            if (!empty($key)) {
                $tot .= "|9900|$key|$value|\n";
                $n++;
            }
        }
        $tot .= "|9900|9900|$n|\n" . "|9990|". ($n+2) ."|\n";
        $efd .= $tot;
        $n = count(explode("\n", $efd));
        $tot .= "|9999|$n|\n";
        return $tot;
    }
    
}
