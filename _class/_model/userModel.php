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


    function insertUser($user)
    {
        $query = "INSERT INTO user (user_email, user_cpf, user_password) VALUES ('" . $user->getEmail() . "', '" . $user->getCpf() . "', '" . $user->getPassword() . "')";   
        $queryResult = $this->conectBd->executarMysql($query);
        return $queryResult;
    }

    function selectEmailUser($user)
    {
        $query = "SELECT COUNT(*) as qtd FROM user WHERE user_email='" . $user->getEmail() . "'";
        $queryResult = $this->conectBd->executarMysql($query);
        $result = $queryResult->fetch_array(MYSQLI_ASSOC);
        return $result['qtd'];
    }

    function selecPasstUser($user)
    {
        $select = "";
        $query = "SELECT user_password as pass FROM user WHERE user_email='" . $user->getEmail() . "'";
        $queryResult = $this->conectBd->executarMysql($query);
        // echo var_dump($queryResult);
        if ($queryResult->num_rows > 0) {
            $result = $queryResult->fetch_array(MYSQLI_ASSOC);
            $select = $result['pass'];
        }

        return $select;
    }

}