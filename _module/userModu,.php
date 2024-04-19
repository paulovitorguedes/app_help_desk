<?php

require_once "../_class/_entity/user.php";

function includeUser($cpf, $nome, $password)
{
    $user = new User($cpf, $nome, $password);
    
}