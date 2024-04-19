<?php

require_once "intraconection.php";

class UsserModel
{

    private $conectBd;
    function __construct()
    {
        $this->conectBd = new Connection();
    }

    function registerUser($user)
    {
        
    }
}