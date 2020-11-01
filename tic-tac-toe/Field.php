<?php


class Field
{
    private $width = 3;
    private $height = 3;
    public array $turns = [];
    public array $figures = ['X','O'];

    /*public function __construct(){

    }*/

    public function clear(){
        $this->turns = [];
    }
}