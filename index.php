<?php

$mens_error = null;
if (isset($_GET["login"])) {

    switch ($_GET["login"]) {
        case "erro":
            $mens_error = "Usuário ou senha inválido(s)";
            break;
        case "erro_session":
            $mens_error = "Necessária Autenticação";
            break;
        default:
            $mens_error = "Erro Desconhecido!";
    }
}
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/index_css.css">
    <link rel="stylesheet" href="_css/style.css">

</head>

<body>


    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="_img/logo.png" class="d-inline-block align-top" alt="logo.png">
            App Help Desk
        </a>
    </nav>



    <div class="container">
        <div class="row">

            <div class="card-login">
                <div class="card">

                    <div class="card-header">
                        Login
                    </div>

                    <div class="card-body">
                        <form action="valida_login.php" method="post">

                            <div class="form-group">
                                <input name="email" type="emai" class="form-control" placeholder="E-mail">
                            </div>

                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>

                            <!-- MENSSAGEM DE ERRO DE AUTENTICAÇÃO  -->
                            <div class="text-danger">
                                <span>
                                    <?= $mens_error ?>
                                </span>
                            </div>

                            <!-- BOTÃO SUBMIT ENTRAR -->
                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
</body>

</html>