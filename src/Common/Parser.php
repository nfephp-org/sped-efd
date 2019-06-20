<?php

namespace NFePHP\EFD\Common;

use ForceUTF8\Encoding;
use NFePHP\Common\Strings;

class Parser
{

    public $error = [];
    protected $blocks;
    protected $info = [];
    
    /**
     * Constructor
     * @param string $version
     * @return void
     */
    public function __construct($version = '310')
    {
        $structurefile = __DIR__ . "/../../storage/structure_EFDICMS_{$version}.txt";
        $structure = file_get_contents($structurefile);
        $this->blocks = $this->block($structure, true);
    }
    
    /**
     * Read EFD content file and return as array
     * @param string $contentfile
     * @return array
     * @throws Exception
     */
    public function read($contentfile)
    {
        //cleaning
        $contentfile = str_replace('__', '_', $contentfile);
        $contentfile = str_replace(['| ', ' |'], '|', $contentfile);
        $contentfile = str_replace(['- ', ' -'], '-', $contentfile);
        $contentfile = str_replace('\r', '', $contentfile);
        $contentfile = strtoupper($contentfile);
        $contentfile = Encoding::fixUTF8($contentfile);
        $contentfile = Strings::squashCharacters($contentfile);
        
        $datas = $this->block($contentfile);
        foreach ($datas as $data) {
            foreach ($data as $key => $d) {
                $node = $this->blocks[$key];
                $vars = [];
                if (empty($d)) {
                    continue;
                }
                if (count($node) !== count($d)) {
                    $this->error[] = "Erro de conteúdo da chave $key";
                }
                foreach ($d as $n => $value) {
                    $name = $node[$n];
                    $value = str_replace(',', '.', $value);
                    $value = str_replace(["\r","\t","\n"], "", $value);
                    $value = preg_replace('/(?:\s\s+)/', ' ', $value);
                    $value = preg_replace("/[^a-zA-Z0-9 @,-_.;:\/]/", "", $value);
                    $vars[$name] = trim($value);
                }
            }
            $this->info[] = [$key => $vars];
        }
        return $this->info;
    }

    protected function block($fields, $unique = false)
    {
        $elements = explode("\n", $fields);
        $block = [];
        foreach ($elements as $element) {
            if (empty($element)) {
                continue;
            }
            $arr = explode('|', $element);
            $n = count($arr);
            $fields = array_slice($arr, 1, $n - 2);
            $key = (string) $fields[0];
            if (substr($key, 1, 3) === '990' || substr($key, 0, 1) === '9'
            ) {
                continue;
            }
            array_splice($fields, 0, 1);
            if ($unique) {
                $block[$key] = $fields;
            } else {
                $block[] = [
                    $key => $fields
                ];
            }
        }
        return $block;
    }
}
