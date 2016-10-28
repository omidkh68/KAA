<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 15:46
 */

include_once 'config.php';
include_once '../common/db.inc.php';
include_once '../common/func.inc.php';
include_once '../common/db.inc.class.php';
include_once '../common/looeic.php';
include_once '../model/about.php';
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
<div class="wrapper">
    <form class="login">
        <p class="title">Log in</p>
        <input type="text" placeholder="Username" required autofocus>
        <i class="fa fa-user"></i>
        <input type="password" placeholder="Password" required>
        <i class="fa fa-key"></i>
        <a href="#">Forgot your password?</a>
        <button>
            <i class="spinner"></i>
            <span class="state">Log in</span>
        </button>
    </form>
</div>

<script src="<?php echo DOMAIN_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo DOMAIN_URL; ?>admin/assets/js/script.min.js"></script>
</body>
</html>
