<?php

require_once "validateSessionModu.php";

if (isset($_POST["titulo"])) {
    $titulo = str_replace("#", "-", filter_input(INPUT_POST, 'titulo', FILTER_DEFAULT));
    $categoria = str_replace("#", "-", filter_input(INPUT_POST, 'categoria', FILTER_DEFAULT));
    $descricao = str_replace("#", "-", filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT));

    $text = "$titulo#$categoria#$descricao#{$_SESSION['id']}" . PHP_EOL;

    $file = fopen("request.log", "a");
    $write = fwrite($file, $text);
    fclose($file);

    if ($write) {
        header("Location: ../_vew/helpRequest.php?mens=success");
    } else {
        header("Location: ../_vew/helpRequest.php?mens=error");
    }
}

function searchFileLog(): array
{
    $fileName = realpath("../_module/request.log");
    $registers = array();
    $register = array();
    $file = fopen($fileName, "r");

    while (!feof($file)) {
        $registers[] = fgets($file);
    }

    if ($_SESSION["perfil"] == 1) {

        foreach ($registers as $values) {
            $a = explode("#", $values);
            if(count($a) < 3) continue;
            $register[] = $a;
        }

    } else {
        foreach ($registers as $key) {
            $a = explode("#", $key);
            if(count($a) < 3) continue;

            if ($_SESSION["id"] == (int)$a[3]) {
                $register[] = $a;
            }
        }
    }

    fclose($file);
    return $register;
}






