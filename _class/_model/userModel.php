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


    function testeDeFuncao($user)
    {
        
        $sql = "INSERT INTO user (user_name, user_cpf, user_password) VALUES ('" . $user->getName() . "', '" . $user->getCpf() . "', '" . $user->getPassword() . "')";
        $saida = $this->conectBd->executarMysql($sql);
        return $saida;
    }

    function registerUser($user)
    {
        $cont = "SELECT COUNT(*) as qtd FROM user WHERE name_user='" . $user->getNome() . "'";
        $saida = $this->conectBd->executarMysql($cont);
        $cont = $saida->fetch_array(MYSQLI_ASSOC);

        //echo print_r($cont, true);
        if ($cont['qtd'] == '0') {
            $sql = "INSERT INTO user (name_user) VALUE ('" . $user->getNome() . "')";
            $saida = $this->conectBd->executarMysql($sql);
            return $saida;

        } else {
            return "exist";
        }
    }
}