<!doctype html>

<?php require_once('init.php');?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <title>GND | Systems</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../dist/css/dashboard.css" rel="stylesheet">
    <!-- font icon -->
    <link href="../dist/css/elegant-icons-style.css" rel="stylesheet">

    <script language="JavaScript" type="text/javascript">
      function deletar_saporra(cod_fornecedor) {
        if (confirm('Confirma deleção do fornecedor?')) {
          window.location.href = 'delete-fornecedor.php?cod_fornecedor=' + cod_fornecedor;
        }
        return false;
      }
    </script>

  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Cervejaria Karavelle</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="login.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="receitas-ca.php">
                  <span data-feather="file"></span>
                  Receitas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Ingredientes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Fornecedores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Pedidos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Lotes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Relatórios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Administração de acessos
                </a>
              </li>            
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           
          </div>
        
        <!--Consulta MySQL para popular tabela com fornecedores cadastrados-->             
              
        <?php  
              $PDO = db_connect(); 

              $sql = "SELECT * FROM fornecedor";
      
              $stmt = $PDO->prepare($sql);
              $stmt->execute();
              $info = $stmt->fetchAll();
        ?>
        <!--Fim consulta MySQL que popula tabela-->          

        <div class="row">
          <div class="col-md-8">
            <h2>Fornecedores</h2>
          </div>

          <div class="col-md-4">
            <a class="btn btn-large btn-success" href="fornecedor-cadastro.php" role="button">+ Adicionar Fornecedor</a>            
          </div>
        </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                <th>ID</th>
                <th>Nome Fornecedor</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Cidade</th>
                <th class="actions">Ações</th>
                </tr>
              </thead>
            <?php foreach($info as $row): ?>              
                <tbody>
                <tr>
                  <td><?=$row["cod_fornecedor"]?></td>
                  <td><?=$row["razao_social_fornecedor"]?></td>
                  <td><?=$row["telefone_fornecedor"]?></td>
                  <td><?=$row["email_fornecedor"]?></td>
                  <td><?=$row["cidade_fornecedor"]?></td>
                  <td class="actions">

                  <a class="btn btn-large btn-primary"
                  href="Editar-fornecedor.php?cod_fornecedor=<?=$row['cod_fornecedor']?>">Editar</a>

                  
                  <button class="btn btn-large btn-danger" onclick='deletar_saporra(<?=$row["cod_fornecedor"]?>)'>Remover</button>
                  </td>
                </tr>                               
                </tbody>
            <?php endforeach; ?>
            </table>
          </div>
        </main>
      </div>
    </div>

  </body>
</html>
