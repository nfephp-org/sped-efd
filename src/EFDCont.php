<?php

namespace NFePHP\EFD;

class EFDCont
{
    protected $possible = [
        'BO' => Blocks\Cont0::class,
        'BA' => Blocks\ContA::class,
        'BC' => Blocks\ContC::class,
        'BD' => Blocks\ContD::class,
        'BF' => Blocks\ContF::class,
        'BI' => Blocks\ContI::class,
        'BM' => Blocks\ContM::class,
        'BP' => Blocks\ContP::class,
        'B1' => Blocks\Cont1::class,
        'B9' => Blocks\Cont9::class, //totalizador
    ];
    
    public function __construct()
    {
        
    }
    
    /**
     * Add 
     * @param BlockInterface $block
     */
    public function add(BlockInterface $block)
    {
        
    }
    
    /**
     * Create a EFD string
     */
    public function __toString()
    {
        
    }
}
