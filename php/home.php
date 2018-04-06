<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Menu</title>

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css">
    <link href="/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/fullcalendar.css">
    <link href="/css/widgets.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet" />
    <link href="/css/xcharts.min.css" rel=" stylesheet">
    <link href="/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>
    <!-- container section start -->
    <section id="container" class="">


        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--inicio logo-->
            <a href="index.html" class="logo">GND <span class="lite">Systems</span></a>
            <!--fim logo-->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">



                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/img/boni.jpg">
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
                                <a href="login.html"><i class="icon_key_alt"></i> Sair</a>
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
                </ul>

                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--Titulo2-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- define a largura da barra branca (bredcrumb) -->
                        <h3 class="page-header"><i class="fa fa-home"></i> Home</h3>
                        <!-- nome da tela -->
                        <ol class="breadcrumb">
                            <!-- barra branca que contem o texto 'home' -->
                            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        </ol>
                    </div>
                </div>
                <!-- Dashboard tela principal (quadrados da hora) -->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box blue-bg">
                            <i class="fa fa-truck"></i>
                            <div class="count">6.674</div>
                            <div class="title">Pedidos entregues</div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box brown-bg">
                            <i class="fa fa-history custom"></i>
                            <div class="count">2.323</div>
                            <div class="title">Pedidos em Produção</div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box dark-bg">
                            <i class="fa fa-group custom"></i>
                            <div class="count">450</div>
                            <div class="title">Clientes Cadastrados</div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box green-bg">
                            <i class="fa fa-cubes"></i>
                            <div class="count">7</div>
                            <div class="title">Tipos de Cervejas</div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->
                    <!--/.row-->
                </div>




                </div>


                </div>

                </div>

            </section>

            <div class="text-center">
                <div class="credits">

                    <a href="http://fatecid.com.br/v2014/index.php">GND Systems</a> by <a href="http://fatecid.com.br/v2014/index.php">GND</a>
                </div>
            </div>

        </section>

        <!-- container section start -->
        <!-- charts scripts -->
        <script src="/assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <!-- Full Google Calendar - Calendar -->
        <script src="/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
        <!-- custom select -->
        <script src="/assets/chart-master/Chart.js"></script>


</body>

</html>
