<?php

namespace NFePHP\EFD;


abstract class EFD
{
    protected $possible = [];
    
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
        $name = strtolower((new \ReflectionClass($block))->getShortName());
        if (key_exists($name, $this->possibles)) {
            $this->{$name} = $block->get();
        }    
    }
    
    /**
     * Create a EFD string
     */
    public function get()
    {
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
        $n = 0;
        foreach ($keys as $key => $value) {
            if (!empty($key)) {
                $tot .= "|9900|$key|$value|\n";
                $n++;
            }
        }
        $n++;
        $tot .= "|9900|9900|$n|\n" . "|9990|". ($n+2) ."|\n";
        $efd .= $tot;
        $n = count(explode("\n", $efd));
        $tot .= "|9999|$n|\n";
        return $tot;
    }
}
