<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 19:09
 */
?>
<!doctype html>
<html lang="en">
<head>
    <title>Kavosh Abzar Aria - Admin Dashboard</title>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <meta name="description" content="">
    <meta name="author" content="Kavosh Abzar Aria - Admin Dashboard">

    <!-- fav icon -->
    <link rel="shortcut icon" href="<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-favicon.png">

    <!-- bootstrap link -->
    <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/css/bootstrap.min.css">

    <!-- main css link -->
    <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>admin/assets/css/style.min.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
</head><!-- /Page Head -->
<body>
<nav class="navbar navbar-inverse" role="navigation">
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
            <a class="navbar-brand" href="#"><img class="mt-half"
                                                  src="<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-logo-en.png"
                                                  alt="Kavosh abzar aria logo"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo DOMAIN_URL; ?>" target="_blank"><i class="fa fa-globe"></i> Website</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-external-link"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <!-- separator -->
    <div class="row small-space"></div>

    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="jumbotron">
                <div class="jumbotron-contents">
                    <h1 class="mz">
                        <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages">
                            <i class="fa fa-info"></i>
                            <?php echo ABOUT; ?>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="jumbotron">
                <div class="jumbotron-contents">
                    <h1 class="mz">
                        <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages">
                            <i class="fa fa-envelope"></i>
                            <?php echo CONTACT; ?>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="jumbotron">
                <div class="jumbotron-contents">
                    <h1 class="mz">
                        <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages">
                            <i class="fa fa-newspaper-o"></i>
                            <?php echo PRESS_RELEASE; ?>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="jumbotron">
                <div class="jumbotron-contents">
                    <h1 class="mz">
                        <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages">
                            <i class="fa fa-picture-o"></i>
                            <?php echo SLIDER; ?>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer of website -->
<?php include_once LOCAL_PATH . 'includes/footer.php'; ?>

<script src="<?php echo DOMAIN_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>admin/assets/js/script.js"></script>
</body>
</html>
