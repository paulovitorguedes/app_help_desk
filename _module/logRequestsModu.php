<?php



if (isset($_POST["titulo"])) {
    $titulo = str_replace("#", "-", filter_input(INPUT_POST, 'titulo', FILTER_DEFAULT));
    $categoria = str_replace("#", "-", filter_input(INPUT_POST, 'categoria', FILTER_DEFAULT));
    $descricao = str_replace("#", "-", filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT));

    $text = "$titulo#$categoria#$descricao" . PHP_EOL;

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
    $register = array();
    $file = fopen($fileName, "r");

    if (file_exists($fileName)) {

        while (!feof($file)) {
            $register[] = fgets($file);
        }
    }

    fclose($file);
    return $register;
}






