<?php

class User
{
    var $id, $cpf, $name, $password;

    function __construct($id = "", $cpf, $name, $password)
    {
        $this->setId($id);
        $this->setCpf($cpf);
        $this->setName($name);
        $this->setPassword($password);
    }

    function setId(string $id): void
    {
        $this->id = $id;
    }
    function setName(string $name): void
    {
        $this->name = strtoupper($name);
    }
    function setPassword(string $password): void
    {
        $this->password = strtoupper($password);
    }

    function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }




    function getId(string $id): string
    {
        return $this->$id;
    }

    function getName(string $name): string
    {
        return $this->$name;
    }

    function getpassword(string $password): string
    {
        return $this->$password;
    }

    function getCpf(string $cpf): string
    {
        return $this->$cpf;
    }



}