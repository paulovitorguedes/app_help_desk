<?php

session_start();

//USUARIOS DO SISTEMA
$users = array(
    array("email" => "adm@teste.com.br", "password" => "123456"),
    array("email" => "user@teste.com.br", "password" => "abcd")
);

// var_dump($users);

foreach ($users as ["email" => $user, "password" => $pass]) {
    if ($_POST["email"] == $user && $_POST["senha"] == $pass) {
        $_SESSION["autentication"] = true;
        header("Location: ../_vew/home.php");
        break;

    } else {
        $_SESSION["autentication"] = false;
        header("Location: ../index.php?login=erro");
    }
}





