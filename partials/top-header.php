<header class="navbar navbar-fixed-top">
            <ul class="nav navbar-nav navbar-left">
                <li class="hidden-xs">
                    <div class="navbar-btn btn-group">
                        <button class="btn-hover-effects navbar-fullscreen toggle-active btn si-icons si-icons-default"><span class="fa fa-arrows-alt"></span></button>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-fuse navbar-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">
                        <span class="name"><?php echo "admin " . $_SESSION['username']; ?></span>
                        </span>
                        <span class="fa fa-caret-down hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu list-group keep-dropdown w230" role="menu">
                        <li class="dropdown-footer text-center">
                            <a href="logout.php" class="btn btn-warning">
                            Deconnexion
                        </a>
                        </li>
                    </ul>
                </li>
            </ul>
</header>