<?php
session_start();
require "database.php";

if (!empty($_GET['id'])) 
    {  $id = inputVerify($_GET['id']);

        $db = Database::connect();
        $statement = $db->query('SELECT * FROM tips_item where id ='.$id);
        $item = $statement->fetch();
    
    }

//fonction de contrôle de champs (faille xss)
function inputVerify($var){

    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);
    return $var;
}

if (!empty($_POST)) {
    $name = inputVerify($_POST["tips_name"]);
    
    $isUploadSuccess = true;

    if(empty($name)) 
        {
            // $isSuccess = false;
            $name = $item['name'];
        }        
    
    if($isUploadSuccess){
        $db = Database::connect();
            $statement = $db->prepare("UPDATE tips_item set name = ? WHERE id=?");
            $statement->execute(array($name, $id));
            Database::disconnect();
            header("Location: ./galery-tips.php");
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>AWFAPP - Ajouter un tips</title>
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
    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.css">
</head>
<body class="user-forms-inputs">
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
                    <li class="breadcrumb-current-item">Ajouter un tips</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->
        <!-- Content -->
        <div id="content" class="ptn animated fadeIn">
            <div class="row">
                <div class="col-md-12 pln">
                    <!-- Standard Fields -->
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">Modifier la valeur du champp ci-dessous</span>
                        </div>
                        <div class="panel-body pn mt20">
                            <form class="form-horizontal" method="post" action="">
                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-4 control-label">Nom du tips</label>
                                    <div class="col-lg-8">
                                        <div class="">
                                            <input type="text" id="inputStandard" class="form-control" name="tips_name" value="<?php echo $item['name'];?>">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary pull-right" value="Modifier le cours">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<!-- HighCharts Plugin -->
<script src="assets/js/plugins/highcharts/highcharts.js"></script>
<!-- Scroll -->
<script src="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Theme Scripts -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/demo/widgets_sidebar.js"></script>
<script src="assets/js/pages/dashboard_init.js"></script>
<!-- /Scripts -->
</body>
</html>
