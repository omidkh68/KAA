<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/16
 * Time: 12:42 PM
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
    <div class="box bg-white contact_us center-block wow <?php echo (LANG == "fa") ? "fadeInRight" : "fadeInLeft" ?>"
         data-wow-duration="1s" data-wow-delay=".3s">
        <h1 class="page_title mb <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>" data-word="about_us">
            <span class="text-primary"><?php echo ABOUT; ?></span>
        </h1>
        <div class="content mt-double">
            <div class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                <?php
                echo(isset($about) && strlen($about) ? $about : '');
                ?>
            </div>

            <br>
            <br>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <!-- box content -->
                    <div class="box miniBox bg-white wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="img-container <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
                            <img class="img-thumbnail mt"
                                 src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/img-2.jpg"
                                 alt="Kavosh Abzar OMG">
                        </div>
                        <div class="content <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">
                            <h2 class="<?php echo (LANG == "fa") ? "fa-font text-right" : "en-font text-left" ?>">Officine Meccaniche Gallaratesi</h2>
                            <article class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                                <?php echo(isset($briefOmg) && strlen($briefOmg) ? $briefOmg : '') ?>

                                <a href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/" class="menuItem <?php echo (LANG == "fa") ? "text-right" : "text-left" ?>">
                                    <?php echo READMORE; ?>
                                    <i class="fi flaticon-angle-<?php echo (LANG == "fa") ? "left" : "right" ?> <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>"></i>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <div class="box miniBox bg-white wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="img-container <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
                            <img class="img-thumbnail mt"
                                 src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/img-2.jpg"
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
                </div>
            </div>
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
        var $nav = $('nav');

        $nav.find('a').removeClass('active');
        $nav.find('[data-word="about_us"]').addClass('active');
    });
</script>

</body>
</html>