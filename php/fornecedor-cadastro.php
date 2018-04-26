<!DOCTYPE html>
<?php require_once('init.php');?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Creative - Bootstrap 3 Responsive Admin Template" name="description">
    <meta content="GeeksLabs" name="author">
    <meta content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal" name="keyword">
    <link href="../img/favicon.png" rel="shortcut icon">
    <title>GND | Cervejaria</title><!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"><!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet"><!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"><!-- date picker -->
    <!-- color picker -->
    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet"><!-- HTML5 shim and Respond.js IE8 support of HTML5 -->

</head>
<body>
    <!-- container section start -->
    <section class="" id="container">
        <!--header start-->
        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
                    <i class="icon_menu"></i>
                </div>
            </div><!--inicio logo-->
            <a class="logo" href="index.html">GND <span class="lite">Systems</span></a> <!--logo fim-->
            <div class="nav search-row" id="top_menu"></div>
            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="profile-ava"><img alt="" src="../img/boni.jpg"></span> <span class="username">Ariele Bonifácio</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu extended logout">
                            <li style="list-style: none; display: inline">
                                <div class="log-arrow-up"></div>
                            </li>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Meu Perfil</a>
                            </li>

                            <li>
                                <a href="login.php"><i class="fa-sign-out"></i> Sair</a>
                            </li>
                        </ul>
                    </li><!-- user login dropdown end -->
                </ul><!-- notificatoin dropdown end-->
            </div>
        </header><!--header end-->
        <!--sidebar start-->
        <aside>
            <div class="nav-collapse" id="sidebar">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a class="" href="index.html"><i class="icon_house_alt"></i> <span>Home</span></a>
                    </li><!-- Menu e sub menu que abre ao clicar -->
                    <li class="sub-menu">
                        <a class="" href="receitas.php"><i aria-hidden="true" class="fa fa-beer"></i> <span>Receitas</span> <span class="menu-arrow arrow_carrot-right"></span></a>
                        <ul class="sub">
                            <li>
                                <a class="" href="cadastro-receita.php">Nova Receita</a>
                            </li><!-- Chama a tela de nova receita -->
                            <li>
                                <a class="" href="view-recipe.html">Visualizar</a>
                            </li>
                        </ul>
                    </li><!-- Menu e sub menu que abre ao clicar -->
                    <li class="menu">
                        <a class="" href="javascript:;"><i aria-hidden="true" class="fa fa-users"></i> <span>Clientes</span></a>
                    </li>
                    <li><!-- Menu e sub menu que abre ao clicar --></li>
                    <li class="menu">
                        <a class="" href="javascript:;"><i aria-hidden="true" class="fa fa-list-ul"></i> <span>Pedidos</span></a>
                    </li>
                    <li class="menu">
                        <a class="" href="javascript:;"><i class="icon_table"></i> <span>Lotes</span></a>
                    </li>
                    <li class="menu">
                        <a class="" href="javascript:;"><i class="icon_documents_alt"></i> <span>Relatórios</span></a>
                    </li>
                </ul><!-- sidebar menu end-->
            </div>
        </aside><!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Nova Receita</h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i><a href="index.html">Home</a>
                            </li>
                            <li><i class="fa fa-list-alt"></i>Novo Fornecedor</li>
                        </ol>
                    </div>
                </div><!--painel de cadastro inicio -->
                <!-- Titulo do painel -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Novo Fornecedor
                            </header>
                            <!--Fim titulo painel -->

                            <!-- Conteúdo do painel -->
                            <form action="fornecedor-function.php" method="POST">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Razão Social</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="razao_social">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <!--Campo CNPJ-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">CNPJ</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>
                                    <!--Campo CNPJ-->   
                                        <br>
                                        <br>

                                
                                <div class="container">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">CEP</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>
                                </div>
                        
                                <br>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Endereço</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>

                                        <br>    
                                        <br>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Cidade</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>

                                        <br>    
                                        <br>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Estado</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>

                                        <br>    
                                        <br>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">País</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>

                                        <br>    
                                        <br>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telefone</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>

                                        <br>    
                                        <br>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="cnpj">                                            
                                        </div>                                        
                                    </div>



                                </div>                           
                        </section>                        
                    </div>                    
                </div>                             

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit">Salvar Fornecedor</button> <button class="btn btn-default" type="button">Cancelar</button>
                    </div>
                </div>
                
            </section><!--main content end-->
            
            <div class="text-center">
                <div class="credits">
                    <a href="http://fatecid.com.br/v2014/index.php">GND Systems</a> by <a href="http://fatecid.com.br/v2014/index.php">GND</a>
                </div>
            </div>
            </form>
        </section><!-- container section end -->

        <script src="../assets/ckeditor/ckeditor.js" type="text/javascript">
        </script> <!-- custom form component script for this page-->

    </section>
</body>
</html>