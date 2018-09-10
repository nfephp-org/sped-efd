<?php

namespace NFePHP\EFD;

use NFePHP\EFD\Blocks\BlockInterface;

class EFDICMS
{
    protected $b0;
    protected $b1;
    protected $bb;
    protected $bc;
    protected $bd;
    protected $be;
    protected $bg;
    protected $bh;
    protected $bk;
    protected $b9;

    protected $possible = [
        'BO' => Blocks\Block0::class,
        'B1' => Blocks\Block1::class,
        'BB' => Blocks\BlockB::class,
        'BC' => Blocks\BlockC::class,
        'BD' => Blocks\BlockD::class,
        'BE' => Blocks\BlockE::class,
        'BG' => Blocks\BlockG::class,
        'BH' => Blocks\BlockH::class,
        'BK' => Blocks\BlockK::class,
        'B9' => Blocks\Block9::class, //totalizador
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
