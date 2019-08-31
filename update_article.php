<?php
session_start();
require './database.php';

$imageError = $titre = $article = $image = "";
if (!empty($_GET['id'])) 
    {  $id = inputVerify($_GET['id']);

        $db = Database::connect();
        $statement = $db->query('SELECT * FROM actualites where id ='.$id);
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
    $titre = inputVerify($_POST["titre"]);
    $article = inputVerify($_POST["content"]);
    $image = inputVerify($_FILES["img_back"]["name"]);

    $imagePath = './images/' . basename($image);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    
    $isUploadSuccess = true;

        if(empty($titre)) {
            $titre = $item['title'];
        }

        if(empty($article)) {
            $article = $item['article'];
        }

        if(empty($photo)) {
            $photo = $item['photo'];
        }

    if (($imageExtension != "jpg" && $imageExtension != "JPG" && $imageExtension != "png" && $imageExtension != "PNG" && $imageExtension != "jpeg" && $imageExtension != "JPEG")) {
        $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png";
        $isUploadSuccess = false;
    }
    if (($_FILES["img_back"]["size"] > 500000)) {
        $imageError = "Le fichier ne doit pas depasser les 500KB";
        $isUploadSuccess = false;
    }
    if ($isUploadSuccess) {
        if (!move_uploaded_file($_FILES["img_back"]["tmp_name"], $imagePath)) {
            $imageError = "Il y a eu une erreur lors de l'upload";
            $isUploadSuccess = false;
        }
    }         
    
    if($isUploadSuccess){
        $db = Database::connect();
            $statement = $db->prepare("UPDATE actualites set title = ?, article = ?, photo = ? WHERE id=?");
            $statement->execute(array($titre, $article, $image, $id));
            Database::disconnect();
            header("Location: ./list_article.php");
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>AWFAPP - Ajouter des articles</title>
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
    <!-- X-edit CSS -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/xeditable/css/bootstrap-editable.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/xeditable/inputs/address/address.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js-bootstrap.css">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/summernote/summernote.css">
    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">
    <!-- mCustomScrollbar -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.css">
</head>
<body class="user-forms-editors" data-spy="scroll" data-target="#nav-spy" data-offset="300">
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
                                <li class="breadcrumb-current-item">Modifier un article</li>
                            </ol>
                        </div>
                    </header>
                    <!-- /Topbar -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Markdown Editor -->
                            <h4 class="micro-header">Rédigez le texte dans l'espace ci-dessous</h4>
                            <div class="panel">
                                <div class="panel-body pn">
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <label>Modifier le titre de l'article</label><br>
                                        <input type="text" value="<?php echo $item['title']; ?>" name="titre" class="form-control">

                                        <br>

                                        <textarea id="markdown-editor" name="content" rows="10">
                                            <?php echo $item['article']; ?>
                                        </textarea>

                                        <label>Choisissez une image: <input type="file" value="<?= $item['photo']; ?>" name="img_back"></label>
                                        <p style="color: red"><?php echo $imageError; ?></p>
                                        <br>

                                        <button type="submit" class="btn btn-default">Publier</button>
                                    </form>
                                </div>
                                <div class="panel-body bg-success" style="min-height: 190px;">
                                    <div id="md-footer" class="fs15">
                                        
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
    <!-- Summernote -->
    <script src="assets/js/plugins/summernote/summernote.min.js"></script>
    <!-- HighCharts Plugin -->
    <script src="assets/js/plugins/highcharts/highcharts.js"></script>
    <!-- Typeahead JS -->
    <script src="assets/js/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js"></script>
    <!-- MarkDown JS -->
    <script src="assets/js/plugins/markdown/markdown.js"></script>
    <script src="assets/js/plugins/markdown/to-markdown.js"></script>
    <script src="assets/js/plugins/markdown/bootstrap-markdown.js"></script>
    <!-- X-edit CSS -->
    <script src="assets/js/plugins/moment/moment.min.js"></script>
    <script src="assets/js/plugins/xeditable/js/bootstrap-editable.min.js"></script>
    <script src="assets/js/plugins/xeditable/inputs/address/address.js"></script>
    <script src="assets/js/plugins/xeditable/inputs/typeaheadjs/lib/typeahead.js"></script>
    <script src="assets/js/plugins/xeditable/inputs/typeaheadjs/typeaheadjs.js"></script>
    <!-- Theme Scripts -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo/widgets_sidebar.js"></script>
    <script src="assets/js/pages/user-forms-editors.js"></script>
    <!-- /Scripts -->
</body>
</html>
