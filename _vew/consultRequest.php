<?php

require_once "../_module/validateSessionModu.php";
require_once "../_module/logRequestsModu.php";

$register = searchFileLog();
$cardHtml = "";

foreach ($register as $values) {

    $cardHtml .= '<div class="card mb-3 bg-light">
                    <div class="card-body">
                        <h5 class="card-title">' . $values[0] . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted">' . $values[1] . '</h6>
                        <p class="card-text">' . $values[2] . '</p>
                    </div>
                </div>';
}

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
        <a class="navbar-brand" href="#">
            <img src="../_img/logo.png" class="d-inline-block align-top" alt="logo.png">
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

            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consulta de chamado
                    </div>

                    <div class="card-body">

                        <!-- Cards dos chamados HTML -->
                        <?= $cardHtml ?>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>