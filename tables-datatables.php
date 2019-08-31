<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>MicroOffice - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme" />
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
        <header class="navbar navbar-fixed-top bg-dark">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown dropdown-fuse hidden-xs">
                    <div class="navbar-btn btn-group phn">
                        <button class="btn-hover-effects dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false">
                        <span class="fa fa-chevron-down"></span>
                    </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </li>
                <li class="hidden-xs">
                    <div class="navbar-btn btn-group">
                        <button class="btn-hover-effects navbar-fullscreen toggle-active btn si-icons si-icons-default">
                        <span class="fa fa-arrows-alt"></span>
                    </button>
                    </div>
                </li>
            </ul>
            <form class="navbar-form navbar-left search-form square" role="search">
                <div class="input-group add-on">
                    <input type="text" class="form-control btn-hover-effects" placeholder="Search..." onfocus="this.placeholder=''" onblur="this.placeholder='Search...'">
                    <button class="btn btn-default text-info-darker hidden-xs hidden-sm" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden-xs">
                    <div class="navbar-btn btn-group phn">
                        <button class="btn-hover-effects topbar-dropmenu-toggle btn">
                        <span class="fa fa-magic fs20 text-dark"></span>
                    </button>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse">
                    <div class="navbar-btn btn-group">
                        <button class="dropdown-toggle btn btn-hover-effects" data-toggle="dropdown">
                        <span class="fa fa-envelope fs20 text-danger"></span>
                        <span class="fs14 visible-xl">
                            6
                        </span>
                    </button>
                        <div class="navbar-activity dropdown-menu keep-dropdown w375" role="menu">
                            <div class="panel mbn">
                                <div class="panel-menu">
                                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                        <a href="#nav-tab1" data-toggle="tab" class="btn btn-sm active">Activity</a>
                                        <a href="#nav-tab2" data-toggle="tab" class="btn btn-sm br-l-n br-r-n">Messages</a>
                                        <a href="#nav-tab3" data-toggle="tab" class="btn btn-sm">Notifications</a>
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab1" class="tab-pane active" role="tabpanel">
                                            <ul class="media-list" role="menu">
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="assets/img/avatars/1.png" class="br3" alt="avatar">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                        <span class="text-muted">- 09/01/16</span>
                                                    </h5> Last Updated 5 days ago by
                                                        <a class="" href="#"> Anna Smith </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="assets/img/avatars/2.png" class="br3" alt="avatar">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                        <span class="text-muted">- 09/01/16</span>
                                                    </h5> Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="assets/img/avatars/3.png" class="br3" alt="avatar">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                        <span class="text-muted">- 09/01/16</span>
                                                    </h5> Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/1.png">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Anna Smith
                                                    <span> - 3:16 am</span>
                                                </h5> Sed egestas ligula eget dictum posuere. Maecenas feugiat in enim.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">Mike Adams
                                                    <span> - 3:36 am</span>
                                                </h5> Etiam facilisis ultrices fringilla. Vivamus sit amet elementum ipsum
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/3.png">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="assets/img/avatars/1.png">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Anna Smith
                                                    <span> - 4:27 am</span>
                                                </h5> Sed egestas ligula eget dictum posuere. Maecenas feugiat in enim.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab3" class="tab-pane alerts-widget" role="tabpanel">
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <span class="fa fa-shopping-cart"></span>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New Product Order
                                                    <span class="text-muted"></span>
                                                </h5>
                                                    <a href="#">iPad Air</a>
                                                    <span class="text-muted-alt">- 3 hours ago</span>
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info btn-sm">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-comments"></span>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New User Comment
                                                    <span class="text-muted"></span>
                                                </h5>
                                                    <span class="text-muted-alt">Sam Fisher - I'd like to read more!</span>
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info btn-sm">
                                                        <i class="fa fa-check "></i>
                                                    </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">New User Review
                                                    <span class="text-muted"></span>
                                                </h5>
                                                    <span class="text-muted-alt">Sebastian Jones - 5 hours ago</span>
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info btn-sm">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                        <button type="button" class="btn btn-default btn-sm">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#" class="btn btn-alert"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse">
                    <div class="navbar-btn btn-group">
                        <button class="dropdown-toggle btn btn-hover-effects" data-toggle="dropdown">
                        <span class="fa fa-bell fs20 text-info-darker"></span>
                        <span class="fs14 visible-xl">
                            8
                        </span>
                    </button>
                        <div class="navbar-activity dropdown-menu keep-dropdown w375" role="menu">
                            <div class="panel mbn">
                                <div class="panel-menu">
                                    <div class="btn-group btn-group-nav" role="tablist">
                                        <a href="#nav-tab4" data-toggle="tab" class="btn btn-primary btn-sm active">Activity</a>
                                    </div>
                                    <button class="btn btn-xs" type="button"><i
                                        class="fa fa-refresh"></i>
                                </button>
                                </div>
                                <div class="panel-body pn">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab4" class="tab-pane active" role="tabpanel">
                                            <ol class="timeline-list">
                                                <li class="timeline-item">
                                                    <div class="timeline-icon light">
                                                        <span class="fa fa-envelope"></span>
                                                    </div>
                                                    <div class="timeline-desc">
                                                        <b>John Doe <span>-</span> <span class="timeline-date">3:16 am</span></b> Sent you a message.
                                                        <a href="#">View now</a>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-icon">
                                                        <span class="fa fa-info-circle"></span>
                                                    </div>
                                                    <div class="timeline-desc">
                                                        <b>Admin <span>-</span> <span class="timeline-date">6:26 pm</span></b> Сreated invoice for:
                                                        <a href="#">iPad Air</a>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-icon">
                                                        <span class="fa fa-info-circle"></span>
                                                    </div>
                                                    <div class="timeline-desc">
                                                        <b>Admin <span>-</span> <span class="timeline-date">11:45 am</span></b> Сreated invoice for:
                                                        <a href="#">iPhone 5s</a>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#" class="btn btn-warning btn-sm"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse">
                    <div class="navbar-btn btn-group">
                        <button class="btn-hover-effects dropdown-toggle btn" data-toggle="dropdown">
                        <img src="assets/img/sprites/uk.png" alt="">
                    </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:void(0);"> English </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Spanish </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Italian </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse navbar-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img class="btn-hover-effects" src="assets/img/avatars/profile_avatar.jpg" alt="avatar">
                        <span class="hidden-xs">
                        <span class="name">Doug Adams</span>
                        </span>
                        <span class="fa fa-caret-down hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu list-group keep-dropdown w230" role="menu">
                        <li class="dropdown-header clearfix">
                            <div class="pull-left">
                                <select id="user-status">
                                <optgroup label="Current Status:">
                                    <option value="1-1">Away</option>
                                    <option value="1-2">Busy</option>
                                    <option value="1-3" selected="selected">Online</option>
                                    <option value="1-4">Offline</option>
                                </optgroup>
                            </select>
                            </div>
                            <div class="pull-right">
                                <select id="user-role">
                                <optgroup label="Logged in As:">
                                    <option value="1-1" selected="selected">Admin</option>
                                    <option value="1-2">Editor</option>
                                    <option value="1-3">User</option>
                                </optgroup>
                            </select>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span class="fa fa-envelope"></span>
                            <a href="#" class="">
                            Messages
                            <span class="label label-info">3</span>
                        </a>
                        </li>
                        <li class="list-group-item">
                            <span class="fa fa-user"></span>
                            <a href="#" class="">
                            Friends
                            <span class="label label-info">6</span>
                        </a>
                        </li>
                        <li class="list-group-item">
                            <span class="fa fa-cog"></span>
                            <a href="#" class="">
                            Account Settings
                        </a>
                        </li>
                        <li class="list-group-item">
                            <span class="fa fa-bell"></span>
                            <a href="#" class="">
                             Activity
                        </a>
                        </li>
                        <li class="dropdown-footer text-center">
                            <a href="#" class="btn btn-warning">
                            logout
                        </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- /Header -->
        <!-- Sidebar  -->
        <aside id="sidebar_left" class="nano affix">
            <!-- Sidebar Left Wrapper  -->
            <div class="sidebar-left-content nano-content">
                <!-- Sidebar Header -->
                <header class="sidebar-header">
                    <!-- Sidebar - Logo -->
                    <div class="sidebar-widget logo-widget">
                        <div class="media">
                            <a class="logo-image" href="index.html">
                                <img src="assets/img/logo.png" alt="" class="img-responsive">
                            </a>
                            <div class="logo-slogan">
                                <div>MicroOffice<span class="text-info"></span></div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- /Sidebar Header -->
                <!-- Sidebar Menu  -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt30">Navigation</li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Dashboard</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li class="">
                                <a href="index.html">
                                Layout 1
                            </a>
                            </li>
                            <li>
                                <a href="index2.html">
                                Layout 2
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-label pt25">Tools</li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Sales Statistics</span>
                            <span class="sb-menu-icon fa fa-share-square-o"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="index2.html">
                                Overview
                            </a>
                            </li>
                            <li>
                                <a href="sales-stats-products.html">
                                Products
                            </a>
                            </li>
                            <li>
                                <a href="sales-stats-purchases.html">
                                Purchases
                            </a>
                            </li>
                            <li>
                                <a href="sales-stats-clients.html">
                                Clients
                            </a>
                            </li>
                            <li>
                                <a href="sales-stats-general-settings.html">
                                General Settings
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Layout Templates</span>
                            <span class="sb-menu-icon fa fa-desktop"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Sidebars</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="sidebar-left-static.html">
                                        Left Static
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="sidebar-left-fixed.html">
                                        Left Fixed
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="sidebar-left-minified.html">
                                        Left Minified
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Navigation</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="navigation-static.html">
                                        Static
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="navigation-fixed.html">
                                        Fixed
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Top Panel</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="top-panel.html">
                                        Default
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="top-panel-menu.html">
                                        With Menu
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Content</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="content-blank.html">
                                        Blank
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="content-fixed.html">
                                        Fixed
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="content-hero.html">
                                        Hero Content
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Content Chutes</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="chute-left.html">
                                        Left Static
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="chute-left-fixed.html">
                                        Left Fixed
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="chute-right.html">
                                        Right Static
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="chute-right-fixed.html">
                                        Right Fixed
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="chute-both.html">
                                        Left &amp; Right Static
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="chute-both-fixed.html">
                                        Left &amp; Right Fixed
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Boxed Frontpage</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="boxed-default.html">
                                        Default
                                    </a>
                                    </li>
                                    <li>
                                        <a href="horizontal-navigation-boxed.html">
                                        Optional Navigation
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle" href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Horizontal Navigation</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li>
                                        <a href="horizontal-navigation-small-menu.html">
                                        Small Menu
                                    </a>
                                    </li>
                                    <li>
                                        <a href="horizontal-navigation-medium-menu.html">
                                        Medium Menu
                                    </a>
                                    </li>
                                    <li>
                                        <a href="horizontal-navigation-large-menu.html">
                                        Large Menu
                                    </a>
                                    </li>
                                    <li>
                                        <a href="horizontal-navigation-top-panel.html">
                                        With Top panel
                                    </a>
                                    </li>
                                    <li>
                                        <a href="horizontal-navigation-collapsing-top-panel.html">
                                        Collapsing Top panel
                                    </a>
                                    </li>
                                    <li>
                                        <a href="horizontal-navigation-boxed.html">
                                        Boxed Layout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Management Tools</span>
                            <span class="sb-menu-icon fa fa-wrench"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li class="">
                                <a href="management-tools-panels.html">
                                Panels
                            </a>
                            </li>
                            <li class="">
                                <a href="management-tools-modals.html">
                                Modals
                            </a>
                            </li>
                            <li class="">
                                <a href="management-tools-dock.html">
                                Dock
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Forms</span>
                            <span class="sb-menu-icon fa fa-list-ul"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li class="">
                                <a href="forms-elements.html">
                                Elements
                            </a>
                            </li>
                            <li class="">
                                <a href="forms-widgets.html">
                                Widgets
                            </a>
                            </li>
                            <li class="">
                                <a href="forms-layouts.html">
                                Layouts
                            </a>
                            </li>
                            <li class="">
                                <a href="forms-wizard.html">
                                 Wizard
                            </a>
                            </li>
                            <li class="">
                                <a href="forms-validation.html">
                                Validation
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-label pt25">Elements</li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Widgets</span>
                            <span class="sb-menu-icon fa fa-cogs"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li class="">
                                <a href="widgets-panels.html">
                                Panels
                            </a>
                            </li>
                            <li class="">
                                <a href="widgets-scrollers-tiles.html">
                                Scrollers &amp; Tiles
                            </a>
                            </li>
                            <li class="">
                                <a href="widgets-tools.html">
                                Tools
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="email-layouts.html">
                            <span class="sidebar-title">Email Layouts</span>
                            <span class="sb-menu-icon fa fa-envelope"></span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">User Interface</span>
                            <span class="sb-menu-icon fa fa-star-half-full "></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li class="">
                                <a href="user-interface-alerts.html">
                                Alerts
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-buttons.html">
                                Buttons
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-typography.html">
                                Typography
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-panels.html">
                                Panels
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-progress-bars.html">
                                Progress Bars
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-tabs.html">
                                Tabs
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-icons.html">
                                Icons
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-grid.html">
                                Grid
                            </a>
                            </li>
                            <li class="">
                                <a href="user-interface-progress-loader.html">
                                Page Progress Loader
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">User Forms</span>
                            <span class="sb-menu-icon fa fa-tasks"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li class="">
                                <a href="user-forms-standart-inputs.html">
                                Standart Inputs
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-additional-inputs.html">
                                Additional Inputs
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-editors.html">
                                Editors
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-treeview.html">
                                Treeview
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-nestable.html">
                                Nestable
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-image-tools.html">
                                Image Tools
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-file-uploaders.html">
                                File Uploaders
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-notifications.html">
                                Notifications
                            </a>
                            </li>
                            <li class="">
                                <a href="user-forms-content-sliders.html">
                                Content Sliders
                            </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle menu-open" href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Plugins</span>
                            <span class="sb-menu-icon fa fa-crop"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Maps</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="maps-basic.html">
                                        Basic
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="maps-vector.html">
                                        Vector
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="maps-full.html">
                                        Full
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Charts</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="charts-highcharts.html">
                                        Highcharts
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="charts-d3.html">
                                        D3 Charts
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="charts-flot.html">
                                        Flot Charts
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle menu-open" href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Tables</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="tables-basic.html">
                                        Basic
                                    </a>
                                    </li>
                                    <li class="active">
                                        <a href="tables-datatables.html">
                                        Data
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="tables-sortable.html">
                                        Sortable
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="tables-pricing.html">
                                        Pricing
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle " href="#">
                            <span class="caret"></span>
                            <span class="sidebar-title">Pages</span>
                            <span class="sb-menu-icon fa fa-file-text-o"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Utility</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li>
                                        <a href="utility-confirmation.html" target="_blank">
                                        Confirmation
                                    </a>
                                    </li>
                                    <li>
                                        <a href="utility-login.html" target="_blank">
                                        Login
                                    </a>
                                    </li>
                                    <li>
                                        <a href="utility-register.html" target="_blank">
                                        Register
                                    </a>
                                    </li>
                                    <li>
                                        <a href="utility-forgot-password.html" target="_blank">
                                        Forgot Password
                                    </a>
                                    </li>
                                    <li>
                                        <a href="utility-coming-soon.html" target="_blank">
                                        Coming Soon
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="utility-404-error.html">
                                        404 Error
                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="accordion-toggle " href="#">
                                    <span class="caret"></span>
                                    <span class="sidebar-title">Basic</span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li class="">
                                        <a href="basic-search-results.html">
                                        Search Results
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="basic-profile.html">
                                        Profile
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="basic-calendar.html">
                                        Calendar
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="basic-timeline.html">
                                        Timeline
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="basic-faq-page.html">
                                        FAQ Page
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="basic-messages.html">
                                        Messages
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="basic-gallery.html">
                                        Gallery
                                    </a>
                                    </li>
                                    <li class="">
                                        <a href="basic-invoice.html">
                                        Invoice
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="doc/index.html">
                            <span class="sidebar-title">Documentation</span>
                            <span class="sb-menu-icon fa fa-book"></span>
                        </a>
                    </li>
                    <!-- Sidebar Progress Bars -->
                    <li class="sidebar-label pt25 pb20">Stats</li>
                    <li class="sidebar-stat">
                        <a href="#" class="fs11 pln">
                            <span class="fs13 pl35 fa fa-calendar-o text-info"></span>
                            <span class="sidebar-title text-muted text-uppercase">September earnings</span>
                            <span class="pull-right mr30 text-muted">$1158</span>
                            <div id="high-column4" class="mt10 pl5 pr10" style="height: 150px;"></div>
                        </a>
                    </li>
                    <li class="sidebar-stat pt10">
                        <a href="#" class="fs11 pln">
                            <span class="fs13 pl35 fa fa-calendar text-info"></span>
                            <span class="sidebar-title text-muted text-uppercase">August earnings</span>
                            <span class="pull-right mr30 text-muted">$1001</span>
                            <div id="high-column5" class="mt10 pl5 pr10" style="height: 150px;"></div>
                        </a>
                    </li>
                </ul>
                <!-- /Sidebar Menu  -->
            </div>
            <!-- /Sidebar Left Wrapper  -->
        </aside>
        <!-- /Sidebar -->
        <!-- Main Wrapper -->
        <section id="content_wrapper">
            <!-- Topbar Menu Wrapper -->
            <div id="topbar-dropmenu-wrapper">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="service-box bg-danger">
                            <span class="fa fa-music"></span>
                            <span class="service-title">Audio</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="service-box bg-success">
                            <span class="fa fa-picture-o"></span>
                            <span class="service-title">Images</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="service-box bg-primary">
                            <span class="fa fa-video-camera"></span>
                            <span class="service-title">Videos</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="service-box bg-alert">
                            <span class="fa fa-envelope"></span>
                            <span class="service-title">Messages</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="service-box bg-system">
                            <span class="fa fa-cog"></span>
                            <span class="service-title">Settings</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="service-box bg-dark">
                            <span class="fa fa-user"></span>
                            <span class="service-title">Users</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Topbar Menu Wrapper -->
            <!-- Content -->
            <section id="content" class="table-layout animated fadeIn">
                <!-- Column Left -->
                <aside class="chute chute-left chute290 chute-icon-style bg-system" data-chute-height="match">
                    <div class="chute-icon"></div>
                    <div class="chute-container">
                        <div id="nav-spy">
                            <ul class="nav chute-nav" data-smoothscroll="-145" data-spy="affix" data-offset-top="200">
                                <li>
                                    <a href="#spy1">
                                    Alphabet Filter</a>
                                </li>
                                <li class="active">
                                    <a href="#spy2">
                                    Basic Datatable</a>
                                </li>
                                <li>
                                    <a href="#spy3">
                                    Exportable Options</a>
                                </li>
                                <li>
                                    <a href="#spy4">
                                    Multi-Column Filter</a>
                                </li>
                                <li>
                                    <a href="#spy5">
                                    Reorder Columns</a>
                                </li>
                                <li>
                                    <a href="#spy6">
                                    Search Input Filter</a>
                                </li>
                                <li>
                                    <a href="#spy7">
                                    Sortable Rows</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- /Column Left -->
                <!-- Column Center -->
                <div class="chute chute-center">
                    <!-- Topbar -->
                    <header id="topbar" class="alt">
                        <div class="topbar-left">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-link">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-current-item">Data Tables</li>
                            </ol>
                        </div>
                    </header>
                    <!-- /Topbar -->
                    <div class="row mt10">
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy1">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        Alphabet Menu Filtering
                                    </div>
                                </div>
                                <div class="panel-menu br3 mt20"></div>
                                <div class="panel-body pn mt20 table-responsive">
                                    <table class="table table-striped table-hover display" id="datatable6" cellspacing="0" width="100%">
                                        <thead class="hidden">
                                            <tr>
                                                <th>Name</th>
                                                <th>Address line</th>
                                                <th>City</th>
                                                <th class="hidden-xs">State</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jumbo Eagle</td>
                                                <td>111 E Las Olivas Blvd</td>
                                                <td>Fort Lauderdale</td>
                                                <td class="hidden-xs">FL</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson's Parts</td>
                                                <td>3049 Park Ave</td>
                                                <td>Fort Lauderdale</td>
                                                <td class="hidden-xs">FL</td>
                                            </tr>
                                            <tr>
                                                <td>West Vally Inc.</td>
                                                <td>12 West Vally</td>
                                                <td>Fort Lauderdale</td>
                                                <td class="hidden-xs">FL</td>
                                            </tr>
                                            <tr>
                                                <td>Zed Motor Co.</td>
                                                <td>232 Michigan Ave</td>
                                                <td>Fort Lauderdale</td>
                                                <td class="hidden-xs">FL</td>
                                            </tr>
                                            <tr>
                                                <td>Big Auto Parts</td>
                                                <td>123 South Drive</td>
                                                <td>Fort Lauderdale</td>
                                                <td class="hidden-xs">FL</td>
                                            </tr>
                                            <tr>
                                                <td>Old Media Co.</td>
                                                <td>84 4999th Street</td>
                                                <td>Fort Lauderdale</td>
                                                <td class="hidden-xs">FL</td>
                                            </tr>
                                            <tr>
                                                <td>Yankee PC</td>
                                                <td>499 34th Ave</td>
                                                <td>Fort Lauderdale</td>
                                                <td class="hidden-xs">FL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy2">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        Basic Datatable
                                    </div>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="va-m">Name</th>
                                                    <th class="va-m">Address line</th>
                                                    <th class="va-m">City</th>
                                                    <th class="hidden-xs va-m">State</th>
                                                    <th class="hidden-xs va-m">Phone</th>
                                                    <th class="va-m">Credit Limit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jumbo Eagle</td>
                                                    <td>111 E Las Olivas Blvd</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1111</td>
                                                    <td>$10000</td>
                                                </tr>
                                                <tr>
                                                    <td>New Enterprises</td>
                                                    <td>9876 Main Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1112</td>
                                                    <td>$28322</td>
                                                </tr>
                                                <tr>
                                                    <td>Wren Computers</td>
                                                    <td>23 Red Albatros Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1113</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Small Bill Co</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1114</td>
                                                    <td>$2389</td>
                                                </tr>
                                                <tr>
                                                    <td>Bob Hosting</td>
                                                    <td>0444 Lake Road</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1115</td>
                                                    <td>$5168</td>
                                                </tr>
                                                <tr>
                                                    <td>Early CC</td>
                                                    <td>99 Flex Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1116</td>
                                                    <td>$56656</td>
                                                </tr>
                                                <tr>
                                                    <td>John Valey Comp</td>
                                                    <td>123 Kelly Valey</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1117</td>
                                                    <td>$555</td>
                                                </tr>
                                                <tr>
                                                    <td>Big NetSys</td>
                                                    <td>45 444th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1118</td>
                                                    <td>$2164</td>
                                                </tr>
                                                <tr>
                                                    <td>West Vally Inc.</td>
                                                    <td>12 West Vally</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1119</td>
                                                    <td>$54966</td>
                                                </tr>
                                                <tr>
                                                    <td>Zed Motor Co.</td>
                                                    <td>232 Michigan Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1121</td>
                                                    <td>$73838</td>
                                                </tr>
                                                <tr>
                                                    <td>Big Auto Parts</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1131</td>
                                                    <td>$100000</td>
                                                </tr>
                                                <tr>
                                                    <td>Old Media Co.</td>
                                                    <td>84 4999th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1141</td>
                                                    <td>$5422</td>
                                                </tr>
                                                <tr>
                                                    <td>Yankee PC</td>
                                                    <td>499 34th Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1151</td>
                                                    <td>$21615</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy3">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        Exportable Datatable
                                    </div>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="datatable3" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="va-m sorting_desc">Name</th>
                                                    <th class="va-m">Address line</th>
                                                    <th class="va-m">City</th>
                                                    <th class="hidden-xs va-m">State</th>
                                                    <th class="hidden-xs va-m">Phone</th>
                                                    <th class="va-m">Credit Limit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address line</th>
                                                    <th>City</th>
                                                    <th class="hidden-xs">State</th>
                                                    <th class="hidden-xs">Phone</th>
                                                    <th>Credit Limit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Jumbo Eagle</td>
                                                    <td>111 E Las Olivas Blvd</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1111</td>
                                                    <td>$10000</td>
                                                </tr>
                                                <tr>
                                                    <td>New Enterprises</td>
                                                    <td>9876 Main Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1112</td>
                                                    <td>$28322</td>
                                                </tr>
                                                <tr>
                                                    <td>Wren Computers</td>
                                                    <td>23 Red Albatros Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1113</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Small Bill Co</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1114</td>
                                                    <td>$2389</td>
                                                </tr>
                                                <tr>
                                                    <td>Bob Hosting</td>
                                                    <td>0444 Lake Road</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1115</td>
                                                    <td>$5168</td>
                                                </tr>
                                                <tr>
                                                    <td>Early CC</td>
                                                    <td>99 Flex Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1116</td>
                                                    <td>$56656</td>
                                                </tr>
                                                <tr>
                                                    <td>John Valey Comp</td>
                                                    <td>123 Kelly Valey</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1117</td>
                                                    <td>$555</td>
                                                </tr>
                                                <tr>
                                                    <td>Big NetSys</td>
                                                    <td>45 444th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1118</td>
                                                    <td>$2164</td>
                                                </tr>
                                                <tr>
                                                    <td>West Vally Inc.</td>
                                                    <td>12 West Vally</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1119</td>
                                                    <td>$54966</td>
                                                </tr>
                                                <tr>
                                                    <td>Zed Motor Co.</td>
                                                    <td>232 Michigan Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1121</td>
                                                    <td>$73838</td>
                                                </tr>
                                                <tr>
                                                    <td>Big Auto Parts</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1131</td>
                                                    <td>$100000</td>
                                                </tr>
                                                <tr>
                                                    <td>Old Media Co.</td>
                                                    <td>84 4999th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1141</td>
                                                    <td>$5422</td>
                                                </tr>
                                                <tr>
                                                    <td>Yankee PC</td>
                                                    <td>499 34th Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1151</td>
                                                    <td>$21615</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy4">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        Multi-Column Filtering
                                    </div>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover display" id="datatable5" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address line</th>
                                                    <th>City</th>
                                                    <th class="hidden-xs">State</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jumbo Eagle</td>
                                                    <td>111 E Las Olivas Blvd</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson's Parts</td>
                                                    <td>3049 Park Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                </tr>
                                                <tr>
                                                    <td>West Vally Inc.</td>
                                                    <td>12 West Vally</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                </tr>
                                                <tr>
                                                    <td>Zed Motor Co.</td>
                                                    <td>232 Michigan Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                </tr>
                                                <tr>
                                                    <td>Big Auto Parts</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                </tr>
                                                <tr>
                                                    <td>Old Media Co.</td>
                                                    <td>84 4999th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                </tr>
                                                <tr>
                                                    <td>Yankee PC</td>
                                                    <td>499 34th Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy5">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        Reorder Table Columns
                                    </div>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="table-responsive">
                                        <table class="table display" id="datatable8" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="va-m">Name</th>
                                                    <th class="va-m">Address line</th>
                                                    <th class="va-m">City</th>
                                                    <th class="hidden-xs va-m">State</th>
                                                    <th class="hidden-xs va-m">Phone</th>
                                                    <th class="va-m">Credit Limit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address line</th>
                                                    <th>City</th>
                                                    <th class="hidden-xs">State</th>
                                                    <th class="hidden-xs">Phone</th>
                                                    <th>Credit Limit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Jumbo Eagle</td>
                                                    <td>111 E Las Olivas Blvd</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1111</td>
                                                    <td>10000</td>
                                                </tr>
                                                <tr>
                                                    <td>New Enterprises</td>
                                                    <td>9876 Main Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1112</td>
                                                    <td>$28322</td>
                                                </tr>
                                                <tr>
                                                    <td>Wren Computers</td>
                                                    <td>23 Red Albatros Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1113</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Small Bill Co</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1114</td>
                                                    <td>$2389</td>
                                                </tr>
                                                <tr>
                                                    <td>Bob Hosting</td>
                                                    <td>0444 Lake Road</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1115</td>
                                                    <td>$5168</td>
                                                </tr>
                                                <tr>
                                                    <td>Early CC</td>
                                                    <td>99 Flex Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1116</td>
                                                    <td>$56656</td>
                                                </tr>
                                                <tr>
                                                    <td>John Valey Comp</td>
                                                    <td>123 Kelly Valey</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1117</td>
                                                    <td>$555</td>
                                                </tr>
                                                <tr>
                                                    <td>Big NetSys</td>
                                                    <td>45 444th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1118</td>
                                                    <td>$2164</td>
                                                </tr>
                                                <tr>
                                                    <td>West Vally Inc.</td>
                                                    <td>12 West Vally</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1119</td>
                                                    <td>$54966</td>
                                                </tr>
                                                <tr>
                                                    <td>Zed Motor Co.</td>
                                                    <td>232 Michigan Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1121</td>
                                                    <td>$73838</td>
                                                </tr>
                                                <tr>
                                                    <td>Big Auto Parts</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1131</td>
                                                    <td>$100000</td>
                                                </tr>
                                                <tr>
                                                    <td>Old Media Co.</td>
                                                    <td>84 4999th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1141</td>
                                                    <td>$5422</td>
                                                </tr>
                                                <tr>
                                                    <td>Yankee PC</td>
                                                    <td>499 34th Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1151</td>
                                                    <td>$21615</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy6">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        Search Bar Filtering
                                    </div>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="va-m">Name</th>
                                                    <th class="va-m">Address line</th>
                                                    <th class="va-m">City</th>
                                                    <th class="hidden-xs va-m">State</th>
                                                    <th class="hidden-xs va-m">Phone</th>
                                                    <th class="va-m">Credit Limit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jumbo Eagle</td>
                                                    <td>111 E Las Olivas Blvd</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1111</td>
                                                    <td>10000</td>
                                                </tr>
                                                <tr>
                                                    <td>New Enterprises</td>
                                                    <td>9876 Main Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1112</td>
                                                    <td>$28322</td>
                                                </tr>
                                                <tr>
                                                    <td>Wren Computers</td>
                                                    <td>23 Red Albatros Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1113</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Small Bill Co</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1114</td>
                                                    <td>$2389</td>
                                                </tr>
                                                <tr>
                                                    <td>Bob Hosting</td>
                                                    <td>0444 Lake Road</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1115</td>
                                                    <td>$5168</td>
                                                </tr>
                                                <tr>
                                                    <td>Early CC</td>
                                                    <td>99 Flex Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1116</td>
                                                    <td>$56656</td>
                                                </tr>
                                                <tr>
                                                    <td>John Valey Comp</td>
                                                    <td>123 Kelly Valey</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1117</td>
                                                    <td>$555</td>
                                                </tr>
                                                <tr>
                                                    <td>Big NetSys</td>
                                                    <td>45 444th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1118</td>
                                                    <td>$2164</td>
                                                </tr>
                                                <tr>
                                                    <td>West Vally Inc.</td>
                                                    <td>12 West Vally</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1119</td>
                                                    <td>$54966</td>
                                                </tr>
                                                <tr>
                                                    <td>Zed Motor Co.</td>
                                                    <td>232 Michigan Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1121</td>
                                                    <td>$73838</td>
                                                </tr>
                                                <tr>
                                                    <td>Big Auto Parts</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1131</td>
                                                    <td>$100000</td>
                                                </tr>
                                                <tr>
                                                    <td>Old Media Co.</td>
                                                    <td>84 4999th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1141</td>
                                                    <td>$5422</td>
                                                </tr>
                                                <tr>
                                                    <td>Yankee PC</td>
                                                    <td>499 34th Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1151</td>
                                                    <td>$21615</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy7">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        Sortable Row Labels
                                    </div>
                                </div>
                                <div class="panel-body pn mt20">
                                    <div class="table-responsive">
                                        <table class="table display" id="datatable7" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="va-m">Name</th>
                                                    <th class="va-m">Address line</th>
                                                    <th class="va-m">City</th>
                                                    <th class="hidden-xs va-m">State</th>
                                                    <th class="hidden-xs va-m">Phone</th>
                                                    <th class="va-m">Credit Limit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address line</th>
                                                    <th>City</th>
                                                    <th class="hidden-xs">State</th>
                                                    <th class="hidden-xs">Phone</th>
                                                    <th>Credit Limit</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Jumbo Eagle</td>
                                                    <td>111 E Las Olivas Blvd</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1111</td>
                                                    <td>10000</td>
                                                </tr>
                                                <tr>
                                                    <td>New Enterprises</td>
                                                    <td>9876 Main Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1112</td>
                                                    <td>$28322</td>
                                                </tr>
                                                <tr>
                                                    <td>Wren Computers</td>
                                                    <td>23 Red Albatros Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1113</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Small Bill Co</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1114</td>
                                                    <td>$2389</td>
                                                </tr>
                                                <tr>
                                                    <td>Bob Hosting</td>
                                                    <td>0444 Lake Road</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1115</td>
                                                    <td>$5168</td>
                                                </tr>
                                                <tr>
                                                    <td>Early CC</td>
                                                    <td>99 Flex Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1116</td>
                                                    <td>$56656</td>
                                                </tr>
                                                <tr>
                                                    <td>John Valey Comp</td>
                                                    <td>123 Kelly Valey</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1117</td>
                                                    <td>$555</td>
                                                </tr>
                                                <tr>
                                                    <td>Big NetSys</td>
                                                    <td>45 444th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1118</td>
                                                    <td>$2164</td>
                                                </tr>
                                                <tr>
                                                    <td>West Vally Inc.</td>
                                                    <td>12 West Vally</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1119</td>
                                                    <td>$54966</td>
                                                </tr>
                                                <tr>
                                                    <td>Zed Motor Co.</td>
                                                    <td>232 Michigan Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1121</td>
                                                    <td>$73838</td>
                                                </tr>
                                                <tr>
                                                    <td>Big Auto Parts</td>
                                                    <td>123 South Drive</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1131</td>
                                                    <td>$100000</td>
                                                </tr>
                                                <tr>
                                                    <td>Old Media Co.</td>
                                                    <td>84 4999th Street</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1141</td>
                                                    <td>$5422</td>
                                                </tr>
                                                <tr>
                                                    <td>Yankee PC</td>
                                                    <td>499 34th Ave</td>
                                                    <td>Fort Lauderdale</td>
                                                    <td class="hidden-xs">FL</td>
                                                    <td class="hidden-xs">305-555-1151</td>
                                                    <td>$21615</td>
                                                </tr>
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
            <footer id="content-footer">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        &copy; 2016 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a>
                    </div>
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-angle-up"></span>
                    </a>
                </div>
            </footer>
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
