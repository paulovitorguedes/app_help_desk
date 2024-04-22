<?php

require_once "../_class/_entity/user.php";
require_once "../_class/_model/userModel.php";


if (isset($_POST['register-email'])) {

    $email = filter_input(INPUT_POST, 'register-email', FILTER_VALIDATE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'register-cpf', FILTER_DEFAULT);

    $password = filter_input(INPUT_POST, 'register-senha', FILTER_DEFAULT);
    $password = password_hash($password, PASSWORD_DEFAULT);


    $user = new User($cpf, $email, $password);
    $userModel = new UserModel();
    $result = $userModel->insertUser($user);
    if($result) {
        header("Location: ../index.php?login=registered");
    }
}


