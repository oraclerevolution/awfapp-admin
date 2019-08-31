<?php
session_start();
require './database.php';
require './securite.php';

$bd = Database::connect();
$inscrits = $bd->query("SELECT * FROM users");
$articles = $bd->query("SELECT * FROM actualites");
$nbreInscrits = $inscrits->rowCount();
$nbreArticles = $articles->rowCount();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>AWFAPP - Accueil</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme" />
    <meta name="description" content="AWFAPP - L'application administrative de gestion de l'application AWFAPP">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="assets/skin/css/angular-material.min.css">
    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/icomoon/icomoon.css">
    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/animatedsvgicons/css/codropsicons.css">
    <!-- Magnific popup -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/magnific/magnific-popup.css">
    <!-- c3charts -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/c3charts/c3.min.css">
    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">
    <!-- mCustomScrollbar -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.css">
</head>
<body class="dashboard-page with-customizer">
    <!-- Body Wrap  -->
    <div id="main">
        <!-- Header  -->
        <?php include "./partials/top-header.php"; ?>
        <!-- /Header -->
        <!-- Sidebar  -->
        <?php include "./partials/side-header.php"; ?>
        <!-- /Sidebar -->
        <!-- Main Wrapper -->
        <section id="content_wrapper">
            <!-- Topbar -->
            <header id="topbar" class="alt">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-link">
                            <a href="accueil.php">Accueil</a>
                        </li>
                        <li class="breadcrumb-current-item">Tableau de bord</li>
                    </ol>
                </div>
            </header>
            <!-- /Topbar -->
            <!-- Content -->
            <section id="content" class="table-layout animated fadeIn">
                <!-- Column Center -->
                <div class="chute chute-center">
                    <!-- AllCP Info -->
                    <div class="allcp-panels fade-onload">
                        <!-- Quick Links -->
                        <div class="row quick-links">
                            <div class="greeting-field">Bienvenue, <span><?php echo "admin " . $_SESSION['username']; ?></span>!</div>
                            <div class="col-sm-6 col-md-3 col-xl-3">
                                <div class="panel panel-tile info-block">
                                    <div class="panel-body">
                                        <div class="info-block-top">
                                            <i class="icon-tool"></i>
                                            <div class="title">Articles publiés</div>
                                        </div>
                                        <div class="info-block-middle text-center">
                                            <h2><?php echo $nbreArticles; ?></h2>
                                        </div>
                                        <div class="info-block-bottom text-center">
                                            <h6>Answered</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-xl-3">
                                <div class="panel panel-tile info-block">
                                    <div class="panel-body">
                                        <div class="info-block-top">
                                            <i class="icon-social"></i>
                                            <div class="title">Utilisateurs</div>
                                        </div>
                                        <div class="info-block-middle text-center">
                                            <h2><?php echo $nbreInscrits;  ?></h2>
                                        </div>
                                        <div class="info-block-bottom text-center">
                                            <h6>Users</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6 col-md-3 col-xl-3">
                                <div class="panel panel-tile info-block">
                                    <div class="panel-body">
                                        <div class="info-block-top">
                                            <i class="icon-transport"></i>
                                            <div class="title">Projects Launched</div>
                                        </div>
                                        <div class="info-block-middle text-center">
                                            <h2>1678%</h2>
                                        </div>
                                        <div class="info-block-bottom text-center">
                                            <h6>Projects</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-xl-3">
                                <div class="panel panel-tile info-block">
                                    <div class="panel-body">
                                        <div class="info-block-top">
                                            <i class="icon-check"></i>
                                            <div class="title">Sales</div>
                                        </div>
                                        <div class="info-block-middle text-center">
                                            <h2>5627%</h2>
                                        </div>
                                        <div class="info-block-bottom text-center">
                                            <h6>Orders</h6>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row mt10">
                            <div class="col-xs-12">
                                <!-- Basic Column Chart -->
                                    <div class="panel mt10" id="pchart1">
                                        <div class="panel-heading">
                                            <span class="panel-title pn"> Statistique d'utilisation de l'application AWFAPP</span>
                                        </div>
                                        <div class="panel-body mt20 bg-light dark">
                                            <div id="high-column2" style="width: 100%; height: 430px; margin: 0 auto"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /Column Center -->
            </section>
            <!-- /Content -->

            <!-- Header -->
            <?php include "./partials/footer.php"; ?>
            <!-- /Header -->
        </section>
        <!-- /Main Wrapper -->
    </div>
    <!-- /Body Wrap  -->
    <!-- Scripts -->
    <!-- jQuery -->
    <script src="assets/js/jquery/jquery-1.12.3.min.js"></script>
    <script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
    <!-- AnimatedSVGIcons -->
    <script src="assets/fonts/animatedsvgicons/js/snap.svg-min.js"></script>
    <script src="assets/fonts/animatedsvgicons/js/svgicons-config.js"></script>
    <script src="assets/fonts/animatedsvgicons/js/svgicons.js"></script>
    <script src="assets/fonts/animatedsvgicons/js/svgicons-init.js"></script>
    <!-- Scroll -->
    <script src="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- HighCharts Plugin -->
    <script src="assets/js/plugins/highcharts/highcharts.js"></script>
    <!-- Magnific Popup Plugin -->
    <script src="assets/js/plugins/magnific/jquery.magnific-popup.js"></script>
    <!-- Plugins -->
    <script src="assets/js/plugins/c3charts/d3.min.js"></script>
    <script src="assets/js/plugins/c3charts/c3.min.js"></script>
    <script src="assets/js/plugins/circles/circles.js"></script>
    <!-- Jvectormap JS -->
    <script src="assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
    <script src="assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>
    <script src="assets/js/plugins/jvectormap/assets/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Theme Scripts -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo/widgets_sidebar.js"></script>
    <script src="assets/js/pages/dashboard1.js"></script>
    <script src="assets/js/demo/widgets.js"></script>
    <!-- /Scripts -->
</body>
</html>
