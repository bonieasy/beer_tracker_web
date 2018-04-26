<!DOCTYPE html>

<?php require_once('init.php');?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="../img/favicon.png">

    <title>GND Systems</title>

    <!-- Bootstrap CSS -->    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">GND <span class="lite">Systems</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">             
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                    <!-- user login dropdown start-->
                     <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="../img/boni.jpg">
                            </span>
                            <span class="username">Ariele Bonifácio</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Meu Perfil</a>
                            </li>                            
                            <li>
                                <a href="login.php"><i class="fa-sign-out"></i> Sair</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

     <!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu">
					<li class="active">
						<a class="" href="index.html">
							<i class="icon_house_alt"></i>
							<span>Home</span>
						</a>
					</li>
					<!-- Menu e sub menu que abre ao clicar -->
					<li class="sub-menu">
						<a href="javascript:;" class="">
							<i class="fa fa-beer" aria-hidden="true"></i>
							<span>Receitas</span>
							<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
							<li><a class="" href="new-recipe.html">Nova Receita</a></li>
							<!-- Chama a tela de nova receita -->
							<li><a class="" href="view-recipe.html">Visualizar Receitas</a></li>
						</ul>
					</li>
					<!-- Menu e sub menu que abre ao clicar -->

					<li class="sub-menu">
						<a href="javascript:;" class="">
							<i class="fa fa-users" aria-hidden="true"></i>
							<span>Clientes</span>
							<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
							<li><a class="" href="new-customer.html">Novo Cliente</a></li>
							<li><a class="" href="view-recipe.html">Visualizar Clientes</a></li>
						</ul>
					</li>

						<!-- Menu e sub menu -->
						<li class="sub-menu">
							<a href="javascript:;" class="">
								<i class="fa fa-list-ul" aria-hidden="true"></i>					
								<span>Pedidos</span>							
								<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
							<li><a class="" href="view-recipe.html">Todos os pedidos</a></li>
							<li><a class="" href="view-recipe.html">Sei lá</a></li>
						</ul>
					</li>
								
								
						<li class="menu">
							<a href="javascript:;" class="">
								<i class="icon_table"></i>
								<span>Lotes</span>
							</a>
						</li>

						<!-- Menu e sub menu Relatórios -->

						<li class="sub-menu">
							<a href="javascript:;" class="">
								<i class="icon_documents_alt"></i>
								<span>Relatórios</span>
							<span class="menu-arrow arrow_carrot-right"></span>
						</a>
						<ul class="sub">
							<li><a class="" href="reports.html">Dashboad</a></li>
							<li><a class="" href="view-recipe.html">Vendas</a></li>
						</ul>
					</li>

				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->

          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Fornecedores Disponíveis</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-files-o"></i>Todas as Receitas</li>
					</ol>
				</div>
			</div>
              <!-- Form validations --> 

              <!--Consulta MySQL para popular tabela fornecedores cadastradas-->             
              
              <?php  
                        $PDO = db_connect(); 

                        $sql = "SELECT * FROM fornecedor";
                
                        $stmt = $PDO->prepare($sql);
                        $stmt->execute();
                        $info = $stmt->fetchAll();
                ?>
            <!--Fim consulta MySQL-->

			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Fornecedores
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Nome Fornecedor</th>
                                  <th>Telefone</th>
                                  <th>E-mail</th>
                                  <th>Ingrediente</th>
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
				                    <button class="btn btn-large btn-success" onclick="RemoveTableRow(this)" type="button">Visualizar</button>
                                    <button class="btn btn-large btn-primary" onclick="RemoveTableRow(this)" type="button">Editar</button>
                                    <button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>
                                  </td>
                                </tr>                               
                              </tbody>
                <?php endforeach; ?>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>
			  
			  
          </section>
      </section>
      <!--main content end-->
      <div class="text-center">
        <div class="credits">
           
            <a href="http://fatecid.com.br/v2014/index.php">GND Systems</a> by <a href="http://fatecid.com.br/v2014/index.php">GND</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
   


  </body>
</html>
