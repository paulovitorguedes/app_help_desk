<?php

class User
{
    private $id;
    private $email;
    private $cpf;
    private $password;

    function __construct($cpf, $email, $password, $id = "")
    {
        $this->setId($id);
        $this->setCpf($cpf);
        $this->setName($email);
        $this->setPassword($password);
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
    public function setName(string $email): void
    {
        $this->email = mb_strtolower($email);
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

    public function getEmail()
    {
        return $this->email;
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