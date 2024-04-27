<?php

$titulo = str_replace("#", "-", filter_input(INPUT_POST, 'titulo', FILTER_DEFAULT));
$categoria = str_replace("#", "-", filter_input(INPUT_POST, 'categoria', FILTER_DEFAULT));
$descricao = str_replace("#", "-", filter_input(INPUT_POST, 'descricao', FILTER_DEFAULT));

$text = "$titulo#$categoria#$descricao".PHP_EOL;

$file = fopen("request.log", "a");
fwrite($file, $text);
fclose($file);


