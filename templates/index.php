<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/7/16
 * Time: 12:51 PM
 */

?>
<!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
<!-- Page Head -->
<?php include_once(LOCAL_PATH . "includes/head.php"); ?>

<body class="<?php echo DEFAULT_THEME; ?>">
    <!-- Page Loader Overlay -->
    <?php include_once(LOCAL_PATH . "includes/pageOverlay.php"); ?>

    <!-- Header of Site -->
    <?php include_once(LOCAL_PATH . "includes/header.php"); ?>

    <!-- body content for change data when user change page -->
    <div class="body-content">
        <!-- box content -->
        <div class="box miniBox bg-white wow <?php echo (LANG == "fa") ? "fadeInRight pull-right" : "fadeInLeft pull-left" ?>" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="img-container <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
                <img class="img-thumbnail mt" src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/img-2.jpg"
                     alt="Kavosh Abzar OMG">
            </div>
            <div class="content <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">
                <h2 class="<?php echo (LANG == "fa") ? "fa-font text-right" : "en-font text-left" ?>">OMG</h2>
                <article class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                    <?php echo(isset($briefOmg) && strlen($briefOmg) ? $briefOmg : '') ?>

                    <a href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/" class="menuItem <?php echo (LANG == "fa") ? "text-right" : "text-left" ?>">
                        <?php echo READMORE; ?>
                        <i class="fi flaticon-angle-<?php echo (LANG == "fa") ? "left" : "right" ?> <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>"></i>
                    </a>
                </article>
            </div>
        </div>
        <div class="box miniBox bg-white wow <?php echo (LANG == "fa") ? "fadeInRight pull-right" : "fadeInLeft pull-left" ?>" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="img-container <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
                <img class="img-thumbnail mt" src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/img-2.jpg"
                     alt="Kavosh Abzar Optimarin">
            </div>
            <div class="content <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">
                <h2 class="<?php echo (LANG == "fa") ? "fa-font text-right" : "en-font text-left" ?>">OPTIMARIN</h2>
                <article class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                    <?php echo(isset($briefOpt) && strlen($briefOpt) ? $briefOpt : '') ?>

                    <a href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/" class="menuItem <?php echo (LANG == "fa") ? "text-right" : "text-left" ?>"><?php echo READMORE; ?>
                        <i class="fi flaticon-angle-<?php echo (LANG == "fa") ? "left" : "right" ?> <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>"></i>
                    </a>
                </article>
            </div>
        </div>
    </div><!-- /body-content -->

    <!-- Fullscreen Slider -->
    <?php include_once(LOCAL_PATH . "includes/slider.php"); ?>

    <!-- Footer of Site -->
    <?php include_once(LOCAL_PATH . "includes/footer.php"); ?>

        <!-- all js scripts -->
    <?php include_once(LOCAL_PATH . "includes/scripts.php"); ?>

    <script>
        $(function () {
            $('body').removeClass('hugContent');
        });
    </script>

    </body>
</html>