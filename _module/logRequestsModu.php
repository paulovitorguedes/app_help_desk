<?php

$text = null;
foreach($_POST as $key) {
    if (isset($_POST[$key])) {
        $text .= $key ."". $_POST[$key] . PHP_EOL;
    }
}

echo $text;


fopen("request.log", "a");

