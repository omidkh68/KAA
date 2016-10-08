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

        <!-- fav icon -->
        <link rel="shortcut icon" href="<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-favicon.png">

        <!-- bootstrap link -->
        <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/css/bootstrap.min.css">

        <!-- animate css link -->
        <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>bower_components/animatecss/animate.min.css">

        <!-- main css link -->
        <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>assets/css/style.css">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <!-- Page Loader Overlay -->
    <?php include_once("includes/pageOverlay.php"); ?>

    <!-- Header of Site -->
    <?php include_once("includes/header.php"); ?>

        <div class="body-content">
            <!-- content -->
            <div class="content">

            </div>

            <!-- Fullscreen Slider -->
            <?php include_once("includes/slider.php"); ?>
        </div>

    <!-- Footer of Site -->
    <?php include_once("includes/footer.php"); ?>

        <!-- all js scripts -->
    <?php include_once("includes/scripts.php"); ?>

    </body>
</html>