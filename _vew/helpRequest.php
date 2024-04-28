<?php

// require_once $_SERVER["DOCUMENT_ROOT"]."/GitHub/app_help_desk/_module/validateSessionModu.php";
require_once "../_module/validateSessionModu.php";

$mens = ".";
$class = "class='text-warning'";
if (isset($_GET["mens"])) {
    if ($_GET["mens"] = "success") {
        $mens = "Chamado registrado com sucesso!";
        $class = "class='text-success'";
    } else {
        $mens = "Falha de registro do chamado!";
        $class = "class='text-ganger'";
    }
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
            <img src="../_img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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

            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Abertura de chamado
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="../_module/logRequestsModu.php">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" class="form-control" name="titulo" placeholder="Título">
                                    </div>

                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <select class="form-control" name="categoria">
                                            <option>Criação Usuário</option>
                                            <option>Impressora</option>
                                            <option>Hardware</option>
                                            <option>Software</option>
                                            <option>Rede</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea class="form-control" name="descricao" rows="3"></textarea>
                                    </div>

                                    <div <?= $class ?>>
                                        <span>
                                            <?= $mens ?>
                                        </span>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a href="home.php" class="btn btn-lg btn-warning btn-block"
                                                type="submit">Voltar</a>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>