<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-5">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo DOMAIN_URL.'admin'; ?>">
                    <img class="mt-half" src="<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-logo-en.png" alt="Kavosh abzar aria logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo DOMAIN_URL_admin; ?>"><i class="fa fa-home"></i> Home Page</a></li>
                    <li><a href="<?php echo DOMAIN_URL; ?>" target="_blank"><i class="fa fa-globe"></i> Website</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo DOMAIN_URL_admin.'pages/logout.php'; ?>"><i class="fa fa-external-link"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- separator -->
    <div class="row halfsmall-space"></div>
