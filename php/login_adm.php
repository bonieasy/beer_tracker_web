<!DOCTYPE html>

<?php require_once('init.php');?>

<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="/img/favicon.png">

        <title>Administração | Login</title>

        <!-- Bootstrap CSS -->
        <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="/dist/css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="/dist/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="/dist/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="/dist/css/signin.css" rel="stylesheet"/>

</head>

<body>

      <div class="admin" "table-scrol">  
      <h1 class="h2 mb-3 font-weight-normal" align="center">Administração de Acessos</h1> 

        <br>
  <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    
    
      <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
          <thead>  
    
          <tr>  
    
              <th>ID</th>  
              <th>Nome</th>  
              <th>Usuário</th>  
              <th>Email</th>  
              <th>Editar</th>  
          </tr>  
          </thead>  
    
          <?php  
          $PDO = db_connect(); 
          $view_users_query="select * from usuario"; //Seleciona a query com todos os usuarios.  
          $run=$PDO->query($view_users_query);
          if (is_array($run) || is_object($run))
			{
				foreach($run as $usuario) {
                echo ('	<tr id="tr-click">
                <td id="codUsuario">'. $usuario["cod_usuario"] .'</td>
                <td>'. $usuario["nome_usuario"] .'</td>
                <td>'. $usuario["login_usuario"] .'</td>
                <td>'. $usuario["email_usuario"] .'</td>
                <td class="center">
					<button type="button" class="btn-update-login">
					<img class="img-btn" src="/img/edit.svg" alt="Edit" height="20" width="20">
                    </button>
                    
                    <button type="button" id="btn-delete-login" class="btn-delete-login">
                    <img class="img-btn" src="/img/rubbish-bin.svg" alt="Delete" height="20" width="20">
					</button>
                </td>
                ');
                }
            }
          ?>
    
      </table>  
          </div>  
  </div>

<!--===============================================================================================-->
	<script src="/javascript/modal.js"></script>

</body>
</html>