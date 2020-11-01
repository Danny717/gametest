<?php

require_once 'tic-tac-toe/Field.php';
class User
{
    public $symbol;
    public Field $field;
    public array $turns;

    public function __construct(Field $field, $symbol = 'X'){
        $this->field = $field;
        $this->symbol = $symbol;
        $this->turns = $_SESSION['turns'];
    }

    public function turn($coords){

        //print_r(($coords)); die;
        $this->field->turns[$this->symbol] = $coords;
    }
}