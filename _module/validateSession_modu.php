<?php

session_start();

if (!isset($_SESSION["autentication"]) || !$_SESSION["autentication"]) {
    header("Location: index.php?login=erro_session");
}