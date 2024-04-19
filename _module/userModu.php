<?php

require_once "../_class/_entity/user.php";
require_once "../_class/_model/userModel.php";

$name = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_DEFAULT);

$password = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
$password = password_hash($password, PASSWORD_DEFAULT);


$user = new User($cpf, $name, $password);
$userModel = new UserModel();
$userModel->testeDeFuncao($user);
echo var_dump($userModel);