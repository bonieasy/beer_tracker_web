<!DOCTYPE html>

<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="/img/favicon.png">

        <title>Registre-se</title>

        <!-- Bootstrap CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="/css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="/css/signin.css" rel="stylesheet"/>

</head>

<body>

    <form class="form-register">
        
        <div class="form-group">
            <h1 class="h2 mb-3 font-weight-normal">Cadastro de Usuários</h1>
        </div>

        <!-- Imput do nome completo -->
        <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="Nome" class="form-control" id="nome-completo" placeholder="Insira o seu nome completo">
        </div>

        <!-- Imput do nome de usuário -->
        <div class="form-group">
            <label for="username">Nome de Usuário</label>
            <input type="Usuario" class="form-control" id="ImputUsuario" placeholder="Insira o seu nome de usuário">
        </div>

        <!-- Imput do email de cadastro -->
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
        </div>

        <!-- Imput da senha -->
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="ImputPassword" placeholder="Senha">
        </div>

        <!-- Método de agrupamento dos botões -->
        <div class="btn-group btn-group-justified">
            <!-- Botão para registrar -->
            <a href="#" class="btn btn-info btn-lg btn-block">Registrar</a>
            <!-- Botão para cancelar -->
            <a href="/php/login.php" class="btn btn-danger btn-lg btn-block">Cancelar</a> 
        </div>
    </form>
        
</body>
</html>