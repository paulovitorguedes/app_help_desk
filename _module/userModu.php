<?php

require_once "../_class/_entity/user.php";
require_once "../_class/_model/userModel.php";

session_start();

//registro deo usuário
if (isset($_POST['register-email'])) {

    $email = filter_input(INPUT_POST, 'register-email', FILTER_VALIDATE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'register-cpf', FILTER_DEFAULT);

    $password = filter_input(INPUT_POST, 'register-senha', FILTER_DEFAULT);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $user = new User($cpf, $email, $password);
    $userModel = new UserModel();

    $qtdEmail = $userModel->selectEmailUser($user);

    //$qtdEmail == 0 Se não houver o email cadastrado
    //$qtdEmail == 1 Se houver o email cadastrado
    if ($qtdEmail) {
        header("Location: ../_vew/userRegistration.php?login=exist");


    } else {
        $result = $userModel->insertUser($user);
        if ($result) {
            header("Location: ../index.php?login=registered");

        } else {
            header("Location: ../index.php?login=noregistered");
        }
    }




//acesso do usuário
} else if (isset($_POST['login-email'])) {

    $email = filter_input(INPUT_POST, 'login-email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'login-senha', FILTER_DEFAULT);
    //$password = password_hash($password, PASSWORD_DEFAULT);

    $user = new User("", $email, $password);
    $userModel = new UserModel();
    $userBD = $userModel->selectUser($user);
    
    // $passwordBD = $userModel->selecPasstUser($user);
    $passwordBD = $userBD["user_password"];

    if (password_verify($password, $passwordBD)) {
        $_SESSION["autentication"] = true;
        $_SESSION["id"] = $userBD["user_id"];
        $_SESSION["perfil"] = $userBD["user_perfil"];
        header("Location: ../_vew/home.php");

    } else {
        $_SESSION["autentication"] = false;
        header("Location: ../index.php?login=erro");
    }
}
