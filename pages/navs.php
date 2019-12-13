<?php if(!isset($GLOBALS['secure'] )) { header("Location: ../index.php?sayfa=home"); } ?>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">MENÜ</span>
                    MENÜ <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Süleyman Algün</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="./">Anasayfa</a>
                    </li>
                    <li>
                        <a href="index.php?sayfa=about">Hakkımda</a>
                    </li>
                    <li>
                        <a href="index.php?sayfa=contact">İletişim</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>