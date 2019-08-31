<?php
session_start();
require './database.php';
$username = $motDePasse = $usernameError = $motDePasseError = "";

function inputVerify($var){

    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);

    return $var;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = inputVerify($_POST['username']);
    $motDePasse = inputVerify($_POST['password']);

    if (empty($username)) {
        $usernameError = "Vous n'avez pas entré de nom d'utilisateur";
    }

    if (empty($motDePasse)) {
        $motDePasseError = "Vérifiez que vous avez saisi un mot de passe";
    }

    if(!empty($_POST['username']) and !empty($_POST['password']) )
    {
        $db = Database::connect();
        $req=$db->prepare("SELECT * from admin where username=? AND  password=?");
        $req->execute(array($username,$motDePasse));


        $userHasBeenFound = $req->rowCount();
        if ($userHasBeenFound) {
            $user = $req->fetch(PDO::FETCH_OBJ);
            $_SESSION['id'] = $user->id;
            $_SESSION['username'] = $user->username;
            $_SESSION['image'] = $user->photo;
            $_SESSION['NIV0'] = 1 ;
        }
        if ($userHasBeenFound) {
            header('Location: accueil.php');


        }
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>MicroOffice - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="AdminK - A Responsive HTML5 Admin UI Framework">
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
<body class="utility-page sb-l-c sb-r-c">
<!-- Body Wrap -->
<div id="main" class="animated fadeIn">
    <!-- Main Wrapper -->
    <section id="content_wrapper">
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>
        <!-- Content -->
        <section id="content">
            <!-- Login Form -->
            <div class="allcp-form theme-primary mw320" id="login">
                <div class="bg-primary mw600 text-center mb20 br3 pt15 pb10">
                    <!-- <img src="assets/img/logo.png" alt=""/> -->
                    <div class="logo-widget">
                        <a class="logo-image mtn" href="index.html">
                            <!-- <img src="assets/img/logo.png" alt="" class="img-responsive"> -->
                        </a>
                        <div class="logo-slogan mtn">
                            <div>AWFAPP administration<span class="text-info"></span></div>
                        </div>
                    </div>
                </div>
                <div class="panel mw320">
                    <form method="post" action="index.php" id="form-login">
                        <div class="panel-body pn mv10">
                            <div class="section">
                                <label for="username" class="field prepend-icon">
                                    <input type="text" name="username" id="username" class="gui-input"
                                           placeholder="Nom d'utilisateur">
                                    <span class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </label>
                                <p style="color:red"><?php echo $usernameError; ?></p>
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input"
                                           placeholder="Entrez le mot de passe">
                                    <span class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </label>
                                <p style="color:red"><?php echo $motDePasseError; ?></p>
                            </div>
                            <!-- /section -->
                            <div class="section">
                                <button type="submit" class="btn btn-bordered btn-primary pull-right">Connexion</button>
                            </div>
                            <!-- /section -->
                        </div>
                        <!-- /Form -->
                    </form>
                </div>
                <!-- /Panel -->
            </div>
            <!-- /Spec Form -->
        </section>
        <!-- /Content -->
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
<!-- CanvasBG JS -->
<script src="assets/js/plugins/canvasbg/canvasbg.js"></script>
<!-- Theme Scripts -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/demo/widgets_sidebar.js"></script>
<script src="assets/js/pages/dashboard_init.js"></script>
<!-- /Scripts -->
</body>
</html>
