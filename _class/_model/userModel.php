<?php

require ("intraconection.php");
require_once (realpath("../_class/_entity/user.php"));

class UserModel
{

    private $conectBd;
    function __construct()
    {
        $this->conectBd = new Connection();
    }


    function insertUser($user) :bool
    {
        $query = "SELECT COUNT(*) as qtd FROM user WHERE user_cpf='" . $user->getCpf() . "'";
        $queryResult = $this->conectBd->executarMysql($query);
        $result = $queryResult->fetch_array(MYSQLI_ASSOC);
        $insert = false;
        if ($result["qtd"] == 0) {
            $query = "INSERT INTO user (user_email, user_cpf, user_password) VALUES ('" . $user->getEmail() . "', '" . $user->getCpf() . "', '" . $user->getPassword() . "')";
            $queryResult = $this->conectBd->executarMysql($query);
            $insert = true;
        }
        return $insert;
    }

}