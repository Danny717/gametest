<?php


class Resources
{
    private $resources;
    private $n;
    private $m;
    private $f;
    private $nMin = 0;
    private $nMax = 4;
    private $mMin = 0;
    private $mMax = 65535;
    private $fMin = 0;
    private $fMax = 6;

    public function __construct(array $resources, int $n = 4, int $m = 3000, int $f = 6){
        $this->resources = $resources;
        $this->n = $n;
        $this->m = $m;
        $this->f = $f;
    }

    public function createList(){

    }

    public function resetList(){

    }
}