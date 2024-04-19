<?php

class User
{
    private $id;
    private $name;
    private $cpf;
    private $password;

    function __construct($cpf, $name, $password, $id = "")
    {
        $this->setId($id);
        $this->setCpf($cpf);
        $this->setName($name);
        $this->setPassword($password);
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
    public function setName(string $name): void
    {
        $this->name = strtoupper($name);
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }




    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getCpf()
    {
        return $this->cpf;
    }



}