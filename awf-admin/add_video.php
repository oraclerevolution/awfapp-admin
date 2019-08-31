<?php
session_start();
require "database.php";

//creation de variable
$tips = $fichier = $theque = $imageError = "";

//fonction de contrôle de champs (faille xss)
function inputVerify($var){

    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);

    return $var;
}

if (!empty($_POST)) {
    $name = inputVerify($_POST["video_name"]);
    $theque = inputVerify($_POST["theque"]);
    $fichier = inputVerify($_FILES["video"]["name"]);

    $imagePath = './videos/' . basename($fichier);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    
    $isUploadSuccess = true;

    if (($imageExtension != "3gp" && $imageExtension != "mp4" && $imageExtension != "3GP" && $imageExtension != "MP4" && $imageExtension != "mkv" && $imageExtension != "MKV" )) {
        $imageError = "Les fichiers autorises sont: .3gp, .mp4, .mkv";
        $isUploadSuccess = false;
    }
    if (file_exists($imagePath)) {
        $imageError = "Le fichier existe déjà, pensez à renommer le fichier";
        $isUploadSuccess = false;
    }
    if (($_FILES["video"]["size"] > 8388608)) {
        $imageError = "Le fichier ne doit pas depasser les 500GB";
        $isUploadSuccess = false;
    }
    if ($isUploadSuccess) {
        if (!move_uploaded_file($_FILES["video"]["tmp_name"], $imagePath)) {
            $imageError = "Il y a eu une erreur lors de l'upload";
            $isUploadSuccess = false;
        }
    }         
    
    if($isUploadSuccess){
        $db = Database::connect();
        $statement = $db->prepare("INSERT INTO theque_items (name, file_name, id_theque) VALUES (?, ?, ?)");
        $statement->execute(array($name, $fichier, $theque));
        Database::disconnect();
        header("Location: ./galery-theque.php");
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>AWFAPP - Ajouter une thèque</title>
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
                    <li class="breadcrumb-current-item">Ajouter une nouvelle vidéo</li>
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
                            <span class="panel-title">Remplissez les champs ci-dessous</span>
                        </div>
                        <div class="panel-body pn mt20">
                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-4 control-label">Nom de la vidéo</label>
                                    <div class="col-lg-8">
                                        <div class="">
                                            <input type="text" id="inputStandard" class="form-control" name="video_name" placeholder="Mot de bienvenue du DG de Orange ...">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputStandard" class="col-lg-4 control-label">Choisissez la thèque</label>
                                    <div class="col-lg-8">
                                        <div class="">
                                            <select class="form-control" name="theque">
                                                <option value="">---- Choisissez une thèque ----</option>
                                                <?php
                                                    $bdd = Database::connect();
                                                    $alltheque = $bdd->query('SELECT * FROM theque');
                                                    while ($retour = $alltheque->fetch()) {
                                                ?>
                                                <option value="<?php echo $retour['id'] ?>"><?php echo $retour['name'] ?></option>
                                                <?php
                                                    }
                                                    Database::disconnect();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label" for="textArea2">Choisissez la video</label>
                                    <div class="col-lg-8">
                                        <input type="file" name="video">
                                    </div>
                                </div>
                                <p style="color:red"><?php echo $imageError; ?></p>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary pull-right" value="Ajouter une video">
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
