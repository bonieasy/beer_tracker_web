<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="/img/favicon.png">

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
    <link href="/css/signin.css" rel="stylesheet"/>

</head>


<body class="text-center">

    <form class="form-signin" action="get-login.php" method="post">
      <img class="mb-4" src="http://mysafetywill.com/SafetyWill4Survey/image/security2.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Informações de login</h1>

      <!-- Inserindo o usuário -->
      <label for="inputUsuario" class="sr-only">Usuário</label>
      <input type="usuario" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>

      <!-- Inserindo a senha do usuário -->
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">

        <!-- Opções lembrar-me e esqueci a senha -->
        <label>
          <input type="checkbox" value="Lembrar-me"><span class="pull-left">Lembrar-me</span>
          <span class="pull-right"> <a href="#"> Esqueci minha senha</a></span>
        </label>
      </div>

        <div class="btn-group btn-group-justified">
            <!-- Botão para acessar -->
            <a href="#" class="btn btn-info btn-lg btn-block">Entrar</a>
            <!-- Botão para acessar -->
            <a href="#" class="btn btn-info btn-lg btn-block active">Registrar</a> 
        </div>
      
      <label><p><p class="mt-5 mb-3 text-muted">&copy; GND Systems 2018</p></label></p>

    </form>
</body>

</html>
