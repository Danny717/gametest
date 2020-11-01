<?php
require_once "tic-tac-toe/Field.php";
require_once "tic-tac-toe/User.php";
session_start();
//print_r($_REQUEST); die;
//echo 111;
//die;
$data = json_decode(file_get_contents('php://input'));
//print_r($data);  die;
$field = new Field();
//print_r($field); die;
$user = new User($field,$data->symbol);
//print_r($user); die;
$user->turn($data->coords);
print_r($user->turns); die;

