<?php

require_once "../_class/_entity/user.php";
require_once "../_class/_model/userModel.php";

session_start();

//
if (isset($_POST['register-email'])) {

    $email = filter_input(INPUT_POST, 'register-email', FILTER_VALIDATE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'register-cpf', FILTER_DEFAULT);

    $password = filter_input(INPUT_POST, 'register-senha', FILTER_DEFAULT);
    $password = password_hash($password, PASSWORD_DEFAULT);


    $user = new User($cpf, $email, $password);
    $userModel = new UserModel();
    $result = $userModel->insertUser($user);
    if ($result) {
        header("Location: ../index.php?login=registered");
    }




} else if (isset($_POST['login-email'])) {

    $email = filter_input(INPUT_POST, 'login-email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'login-senha', FILTER_DEFAULT);
    //$password = password_hash($password, PASSWORD_DEFAULT);

    $user = new User("", $email, $password);
    $userModel = new UserModel();
    $passwordBD = $userModel->selectUser($user);
 
    if(password_verify($password, $passwordBD)) {
        $_SESSION["autentication"] = true;
        header("Location: ../_vew/home.php");
   
    } else {
        $_SESSION["autentication"] = false;
        header("Location: ../index.php?login=erro");
    }
}
