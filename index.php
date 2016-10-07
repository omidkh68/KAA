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
                <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                    <!-- Home -->
                    <li class="<?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"><a class="active<?php echo (LANG == "fa") ? " text-right" : "" ?>" href="<?php echo DOMAIN_URL; ?>"><?php echo HOME; ?></a></li>
                    <!-- About us -->
                    <li class="<?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"><a class="<?php echo (LANG == "fa") ? " text-right" : "" ?>" href="<?php echo DOMAIN_URL; ?>about_us"><?php echo ABOUT; ?></a></li>
                    <!-- Principal Company -->
                    <li class="<?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"><a class="<?php echo (LANG == "fa") ? " text-right" : "" ?>" href="<?php echo DOMAIN_URL; ?>principal_company"><?php echo PRINCIPAL_COMPANY; ?></a></li>
                    <!-- Press Release -->
                    <li class="<?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"><a class="<?php echo (LANG == "fa") ? " text-right" : "" ?>" href="<?php echo DOMAIN_URL; ?>press_release"><?php echo PRESS_RELEASE; ?></a></li>
                    <!-- Contact US -->
                    <li class="<?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"><a class="<?php echo (LANG == "fa") ? " text-right" : "" ?>" href="<?php echo DOMAIN_URL; ?>contact_us"><?php echo CONTACT; ?></a></li>
                </ul>
            </nav>
        </header>

        <div class="body-content">
            <div id="progress-back" class="load-item">
                <div id="progress-bar"></div>
            </div>

            <!--Control Bar-->
            <div id="controls-wrapper" class="load-item"><!--Thumbnail Navigation-->
                <!--Arrow Navigation-->
                <a id="prevslide" class="load-item"><i class="fi flaticon-angle-left"></i></a>
                <a id="nextslide" class="load-item"><i class="fi flaticon-angle-right"></i></a>

                <div id="controls">

                    <!--<a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>-->

                    <!--Slide counter-->
                    <div id="slidecounter">
                        <span class="slidenumber <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></span> / <span class="totalslides <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></span>
                    </div>

                    <!--Slide captions displayed here-->
                    <div id="slidecaption" class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></div>


                    <!--Navigation-->
                    <ul id="slide-list"></ul>

                </div>
            </div>
        </div>

        <footer>
            <div class="lang-selector pull-left">
                <ul>
                    <li class="pull-left"><a href="#" <?php echo (LANG == "en") ? 'class="active"' : '' ?>><img src="assets/images/flag-en.png" class="center-block" alt="Change Language to English"></a></li>
                    <li class="pull-left"><a href="#" <?php echo (LANG == "fa") ? 'class="active"' : '' ?>><img src="assets/images/flag-fa.png" class="center-block" alt="تغییر زبان به پارسی"></a></li>
                </ul>
            </div>

            <p class="pull-right">
                &copy; <span class="current-year <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></span> <?php echo COPY; ?>
            </p>
        </footer>

        <!-- all js scripts -->
        <script src="<?php echo DOMAIN_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/js/bootstrap.min.js"></script>
        <script src="<?php echo DOMAIN_URL; ?>assets/js/jquery.easing.min.js"></script>
        <script src="<?php echo DOMAIN_URL; ?>assets/js/supersized.3.2.7.min.js"></script>
        <script src="<?php echo DOMAIN_URL; ?>assets/js/supersized.shutter.min.js"></script>
        <script src="<?php echo DOMAIN_URL; ?>assets/js/script.js"></script>

        <script>
            $(function() {
                // setting fullscreen slider
                $.supersized({

                    // Functionality
                    slide_interval          :   50000,		// Length between transitions
                    transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed		:	700,		// Speed of transition
                    keyboard_nav            :   0,          // disable keyboard navigation
                    // Components
                    slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides 					:  	[			// Slideshow Images
                        {image : '<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-background-1.jpg', title : 'Image Credit: Maria Kazvan'},
                        {image : '<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-background-2.jpg', title : 'Image Credit: Maria Kazvan'},
                        {image : '<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-background-3.jpg', title : 'Image Credit: Maria Kazvan'},
                        {image : '<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-background-4.jpg', title : 'Image Credit: Colin Wojno'},
                        {image : '<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-background-5.jpg', title : 'Image Credit: Colin Wojno'}
                    ]

                });
            });
        </script>

    </body>
</html>