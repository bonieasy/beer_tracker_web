<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>GND | Cervejaria</title>

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet" />


</head>

<body class="login-img3-body">


    <div class="container">

        <form class="login-form">
            <!-- caixa de login -->
            <div class="login-wrap">
                <!-- Alinha os itens da caixa de login -->
                <p class="login-img"><i class="icon_lock_alt"></i></p> <!-- icone de cadeado -->
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" placeholder="Usuário" name="userid" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Senha" name="pswrd">
                </div>
                <label class="checkbox">
                    <!-- inicio da checkbox -->
                    <input type="checkbox" value="remember-me"> Lembrar de mim
                    <span class="pull-right"> <a href="#"> Esqueci minha senha</a></span>
                </label> <!-- fim da checkbox -->
                <button class="btn btn-primary btn-lg btn-block" type="button" onclick="check(this.form)">Entrar</button> <!-- Botão para acessar -->
            </div>
        </form>


    </div>


</body>
</html>
