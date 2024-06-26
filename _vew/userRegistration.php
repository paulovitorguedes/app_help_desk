<?php

$mens_login = null;
if (isset($_GET["login"])) {

    $mens_login = "Email já Cadastrado no sistema";
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
                        Cadastro de Usuário
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <form action="../_module/userModu.php" method="post">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="register-email" type="email" class="form-control"
                                            placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input name="register-cpf" type="text" class="form-control" placeholder="CPF"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label>senha</label>
                                        <input name="register-senha" type="password" class="form-control"
                                            placeholder="Password" required>
                                    </div>

                                    <div class="text-danger">
                                        <span>
                                            <?= $mens_login ?>
                                        </span>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a href="../_module/close_modu.php" class="btn btn-lg btn-warning btn-block"
                                                type="submit">Já tenho login</a>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block"
                                                type="submit">Cadastrar</button>
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