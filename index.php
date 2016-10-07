<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/7/16
 * Time: 12:51 PM
 */

include_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kavosh Abzar Aria - Official Website</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">
        <meta name="description" content="">
        <meta name="author" content="Kavosh Abzar Aria - Official Website">

        <!-- bootstrap link -->
        <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/css/bootstrap.min.css">

        <!-- animate css link -->
        <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>bower_components/animatecss/animate.min.css">

        <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>assets/css/style.css">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <header>
        <!-- logo -->
        <a href="" class="pull-right"><img src="<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-logo.png" alt="Kavosh Abzar Aria - Official Logo"></a>

        <!-- hamburger menu -->
        <button class="hamburger hamburger--squeeze hidden" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

        <!-- navigation items -->
        <nav class="pull-left">
            <ul>
                <!-- Home -->
                <li class="pull-left"><a class="active" href="<?php echo DOMAIN_URL; ?>">Home</a></li>
                <!-- About us -->
                <li class="pull-left"><a href="<?php echo DOMAIN_URL; ?>about_us">About US</a></li>
                <!-- Principal Company -->
                <li class="pull-left"><a href="<?php echo DOMAIN_URL; ?>principal_company">Principal Company</a></li>
                <!-- Press Release -->
                <li class="pull-left"><a href="<?php echo DOMAIN_URL; ?>press_release">Press Release</a></li>
                <!-- Contact US -->
                <li class="pull-left"><a href="<?php echo DOMAIN_URL; ?>contact_us">Contact US</a></li>
            </ul>
        </nav>
    </header>

    <div class="body-content">

    </div>

    <footer>

    </footer>

    <!-- all js scripts -->
    <script src="<?php echo DOMAIN_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo DOMAIN_URL; ?>assets/js/script.js"></script>

    </body>
</html>