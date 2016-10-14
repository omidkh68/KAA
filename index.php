<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/7/16
 * Time: 12:51 PM
 */

include_once($_SERVER["DOCUMENT_ROOT"] . "/config.php");

?>
<!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
<!-- Page Head -->
<?php include_once("includes/head.php"); ?>

<body class="<?php echo DEFAULT_THEME; ?>">
    <!-- Page Loader Overlay -->
    <?php include_once("includes/pageOverlay.php"); ?>

    <!-- Header of Site -->
    <?php include_once("includes/header.php"); ?>


    <div class="body-content">
        <!-- box content -->
        <div class="box bg-white wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="img-container pull-left">
                <img src="<?php echo DOMAIN_URL; ?>assets/images/p-01.jpg" alt="Kavosh Abzar OMG">
            </div>
            <div class="content pull-right">
                <h1 class="en-font text-left">OMG</h1>
                <article>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Aliquam aperiam,
                    asperiores assumenda consequatur consequuntur debitis
                    doloribus est ipsa maiores nisi quasi qui quia quo
                    sed sunt unde vel voluptates voluptatum.

                    <a href="#" class="text-left">Read More <i class="fi flaticon-angle-right pull-right"></i></a>
                </article>
            </div>
        </div>
        <div class="box bg-white wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="img-container pull-left">
                <img src="<?php echo DOMAIN_URL; ?>assets/images/p-02.jpg" alt="Kavosh Abzar Optimarin">
            </div>
            <div class="content pull-right">
                <h1 class="en-font text-left">OPTIMARIN</h1>
                <article>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Aliquam aperiam,
                    asperiores assumenda consequatur consequuntur debitis
                    doloribus est ipsa maiores nisi quasi qui quia quo
                    sed sunt unde vel voluptates voluptatum.

                    <a href="#" class="text-left">Read More <i class="fi flaticon-angle-right pull-right"></i></a>
                </article>
            </div>
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