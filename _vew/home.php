<?php

//Valida session do usuário
require_once "../_module/validateSessionModu.php";
?>


<html>


<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../_css/style.css">

</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="../_img/logo.png" class="d-inline-block align-top" alt="logo.pmg">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../_module/closeModu.php">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="helpRequest.php">
                                    <img id="img_edita" src="../_img/formulario_abrir_chamado.png"
                                        alt="formulario_abrir_chamado.png">
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consultRequest.php">
                                    <img id="img_consulta" src="../_img/formulario_consultar_chamado.png"
                                        alt="formulario_consultar_chamado.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>