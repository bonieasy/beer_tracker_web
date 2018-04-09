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
    <title>GND Systems</title><!-- Bootstrap CSS -->
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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="profile-ava"><img alt="" src="../img/boni.jpg"></span> <span class="username">Ariele Bonif�cio</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu extended logout">
                            <li style="list-style: none; display: inline">
                                <div class="log-arrow-up"></div>
                            </li>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> Meu Perfil</a>
                            </li>

                            <li>
                                <a href="login.html"><i class="fa-sign-out"></i> Sair</a>
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
                        <a class="" href="javascript:;"><i aria-hidden="true" class="fa fa-beer"></i> <span>Receitas</span> <span class="menu-arrow arrow_carrot-right"></span></a>
                        <ul class="sub">
                            <li>
                                <a class="" href="new-recipe.html">Nova Receita</a>
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
                        <a class="" href="javascript:;"><i class="icon_documents_alt"></i> <span>Relat�rios</span></a>
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
                                <i class="fa fa-home"></i><a href="home.html">Home</a>
                            </li>
                            <li><i class="icon_document_alt"></i>Receita</li>
                            <li><i class="fa fa-file-text-o"></i>Nova Receita</li>
                        </ol>
                    </div>
                </div><!--painel de cadastro inicio -->
                <!-- Titulo do painel -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Nova Receita
                            </header><!--Fim titulo painel -->
                            <!-- Conte�do do painel -->
                            <form action="cadastrar_receita.php" method="POST">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome da receita</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="nome_receita">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Descrição</label>
                                        <div class="col-sm-10">
                                            <input class="form-control round-input" type="text" name="comentario_receita">
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div><!-- Titulo do painel de ingredientes -->
                <!-- painel teste inicio -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Ingredientes
                            </header><!--Fim titulo painel -->
                            <!-- Conte�do do painel -->
                            <div class="panel-body">
                                <!--dropdown inicio-->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipos Malte</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="ingred1" name="ingred1">
                                            <option value="1">
                                                Cevada
                                            </option>
                                            <option value="2">
                                                Trigo
                                            </option>
                                            <option value="2">
                                                Arroz
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipos Lupulo</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="ingred2" name="ingred2">
                                            <option value="1">
                                                Lupulo 1
                                            </option>
                                            <option value="2">
                                                Lupulo 2
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipos leveduras</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="ingred3" name="ingred3">
                                            <option value="1">
                                                Saccharomyces cerevisiae
                                            </option>
                                            <option value="2">
                                                Saccharomyces uvarum
                                            </option>
                                            <option value="3">
                                                Brettanomyces sp
                                            </option>
                                            <option value="4">
                                                Saccharomyces bayanus
                                            </option>
                                        </select>
                                    </div>
                                </div><!-- dropdow fim -->
                            </div>
                        </section>
                    </div>
                </div><!-- Painel com os ingredientes -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Ind�ces
                            </header>
                            <div class="panel-body">
                                <table>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <label class="col-sm-2 control-label">Original Gravity</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="OG"> <span class="input-group-btn"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <label class="col-sm-2 control-label">Final Gravity</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="FG"> <span class="input-group-btn"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <label class="col-sm-2 control-label">International Bitter Units</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="IBU"> <span class="input-group-btn"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <label class="col-sm-2 control-label">Alcohol by Volume</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="ABV"> <span class="input-group-btn"></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </section>
                    </div>
                </div><!-- Painel com tempos -->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Tempos
                            </header>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-lg-30">
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <label class="col-sm-2 control-label">Brassagem</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="brassagem"> <span class="input-group-btn"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <label class="col-sm-2 control-label">Fervura</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="fervura"> <span class="input-group-btn"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <label class="col-sm-2 control-label">Fermenta��o</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="fermentacao"> <span class="input-group-btn"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <label class="col-sm-2 control-label">Rampa Ativa</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="rampa"> <span class="input-group-btn"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Rampa
                            </header>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-lg-30">
                                        <table>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <label class="col-sm-2 control-label">Varia��o</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="variacao"> <span class="input-group-btn"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <label class="col-sm-2 control-label">Temperatura</label> <span class="input-group-btn"></span> <input class="form-control input-number" data-ride="spinner" id="spinner" type="number" value="0" name="temperatura"> <span class="input-group-btn"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit">Salvar Receita</button> <button class="btn btn-default" type="button">Cancelar</button>
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

        <script src="/assets/ckeditor/ckeditor.js" type="text/javascript">
        </script> <!-- custom form component script for this page-->

    </section>
</body>
</html>