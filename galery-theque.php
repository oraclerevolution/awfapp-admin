<?php
session_start();
require "database.php";
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>AWFAPP - Lister les theques</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
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
    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">
    <!-- mCustomScrollbar -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.css">
</head>
<body class="basic-gallery">
<!-- Body Wrap -->
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
                    <li class="breadcrumb-current-item">Liste des thèques</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->
        <section id="content" class="table-layout animated fadeIn">
            <div class="chute chute-center">
                <div id="mixitup-container">
                    <?php
                        $bdd = Database::connect();

                        $theques = $bdd->query('SELECT * FROM theque');
                        while ($retour = $theques->fetch()) {
                    ?>
                    <div class="mix label1 folder1">
                        <div class="panel p6 pbn">
                            <div class="of-h">
                                <img src="images/<?php echo $retour['photo']; ?>" class="img-responsive" alt="">
                                <div class="row table-layout">
                                    <div class="col-xs-8 va-m pln">
                                        <h6><a href="theques-items.php?id=<?php echo $retour['id']; ?>" style="color:black;text-decoration: none;"><?php echo $retour['name']; ?></a></h6>
                                    </div>
                                    <div class="col-xs-4 text-right va-m prn">
                                        <span class="fa fa-circle fs10 text-info ml10"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        Database::disconnect();
                    ?>
                    <div class="gap"></div>
                    <div class="gap"></div>
                    <div class="gap"></div>
                    <div class="gap"></div>
                </div>
            </div>
        </section>
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
<!-- Mixitup -->
<script src="assets/js/plugins/mixitup/jquery.mixitup.min.js"></script>
<!-- Summernote -->
<!-- HighCharts Plugin -->
<script src="assets/js/plugins/highcharts/highcharts.js"></script>
<!-- Highlight JS -->
<!-- Date/Month - Pickers -->
<!-- Magnific Popup Plugin -->
<script src="assets/js/plugins/magnific/jquery.magnific-popup.js"></script>
<!-- FullCalendar Plugin -->
<!-- Plugins -->
<script src="assets/js/plugins/fileupload/fileupload.js"></script>
<!-- Theme Scripts -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/demo/widgets_sidebar.js"></script>
<script src="assets/js/pages/basic-gallery.js"></script>
<!-- /Scripts -->
</body>
</html>
