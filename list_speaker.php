<?php
session_start();
require './database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>AWFAPP - Listes des speakers</title>
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
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/datatables/extensions/Editor/css/dataTables.editor.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">
    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">
    <!-- mCustomScrollbar -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.css">
</head>
<body class="tables-datatables" data-spy="scroll" data-target="#nav-spy" data-offset="300">
    <!-- Body Wrap -->
    <div id="main">
        <!-- Header  -->
        <?php include "./partials/top-header.php" ?>
        <!-- /Header -->
        <!-- Sidebar  -->
        <?php include "./partials/side-header.php"; ?>
        <!-- /Sidebar -->
        <!-- Main Wrapper -->
        <section id="content_wrapper">
            <!-- Content -->
            <section id="content" class="table-layout animated fadeIn">
                <!-- Column Center -->
                <div class="chute chute-center">
                    <!-- Topbar -->
                    <header id="topbar" class="alt">
                        <div class="topbar-left">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-link">
                                    <a href="accueil.php">Accueil</a>
                                </li>
                                <li class="breadcrumb-current-item">Liste des speakers</li>
                            </ol>
                        </div>
                    </header>
                    <!-- /Topbar -->
                    <div class="row mt10">
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy3">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        
                                    </div>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="datatable3" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="va-m sorting_desc">Nom</th>
                                                    <th class="va-m">Fonction</th>
                                                    <th class="va-m">Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th class="va-m sorting_desc">Nom</th>
                                                    <th class="va-m">Date d'ajout</th>
                                                    <th class="va-m">Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    $bdd = Database::connect();

                                                    $speaker = $bdd->query('SELECT * FROM speakers');
                                                    while ($donnees = $speaker->fetch()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $donnees['name']; ?></td>
                                                    <td><?php echo $donnees['fonction']; ?></td>
                                                    <td>
                                                        <a href="update_speaker.php?id=<?php echo $donnees['id']; ?>">
                                                            <button class="btn btn-warning">Modifier</button>
                                                        </a>
                                                        <a href="delete_speaker.php?id=<?php echo $donnees['id']; ?>">
                                                            <button class="btn btn-danger">Supprimer</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                    Database::disconnect();
                                                ?>
                                            </tbody>
                                        </table>
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
    <!-- Datatables JS -->
    <script src="assets/js/plugins/datatables/media/js/jquery.dataTables.js"></script>
    <script src="assets/js/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="assets/js/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
    <script src="assets/js/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <!-- Theme Scripts -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo/widgets_sidebar.js"></script>
    <script src="assets/js/pages/tables-data.js"></script>
    <!-- /Scripts -->
</body>
</html>
