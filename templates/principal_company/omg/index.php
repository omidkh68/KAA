<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/2016 AD
 * Time: 21:46
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
    <div class="box bg-white products center-block wow <?php echo (LANG == "fa") ? "fadeInRight" : "fadeInLeft" ?>"
         data-wow-duration="1s" data-wow-delay=".3s">
        <div class="banner-container wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
            <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-banner.jpg" alt="Optimarin banner">
            <h1 class="page_title products <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>Officine Meccaniche Gallaratesi</span></h1>
        </div>
        <div class="content">
            <nav class="belowNav navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menuHolderBtn" type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#menuHolder" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menuHolder">
                    <ul class="nav navbar-nav <?php echo (LANG == "fa") ? "navbar-right" : "navbar-left" ?>">
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay=".5s"><a class="subItem"
                                                                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/"
                                                                           data-word="about_us"><span><?php echo ABOUT; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay=".7s"><a class="subItem"
                                                                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/products.php"
                                                                           data-word="products"><span><?php echo PRODUCTS; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay=".9s"><a class="subItem"
                                                                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/certificate.php"
                                                                           data-word="REGULATION"><span><?php echo CERTIFICATE; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay=".9s"><a class="subItem"
                                                                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/references.php"
                                                                           data-word="REFERENCES"><span><?php echo REFERENCES; ?></span></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="row">
                <div class="col-xs-12 colsm-12 col-md-12 itemContent">
                    <h3 class="text-center" data-word="about_us"><span><?php echo ABOUT; ?></span></h3>

                    <br>

                    <p class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"> 
                        <?php echo(isset($omg) && strlen($omg) ? $omg : '') ?>
                    </p>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#Gallery" aria-controls="Gallery" role="tab" data-toggle="tab"
                               data-word="gallery">
                                <?php echo GALLERY; ?>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#Videos" aria-controls="Videos" role="tab" data-toggle="tab"
                               data-word="video">
                                <?php echo VIDEO; ?>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Gallery">
                            <div class="row">
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 pull-left">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-1.jpg"
                                         class="runLightBox"
                                         alt="4MP series- metering piston & diaphragm.jpg">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 pull-left">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-2.jpg"
                                         class="runLightBox" alt="OMG pumps">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 pull-left">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-4.jpg"
                                         class="runLightBox" alt="OMG pumps">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 pull-left">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-5.jpg"
                                         class="runLightBox"
                                         alt="OMG Pumps">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 pull-left">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-6.jpg"
                                         class="runLightBox"
                                         alt="OMG Pumps">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 pull-left">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-7.jpg"
                                         class="runLightBox"
                                         alt="OMG Pumps">
                                </div>
                            </div>
                            <!-- separatoe -->
                            <div class="row xxxsmall-space"></div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 pull-left clear">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/omg/omg-3.jpg"
                                         class="runLightBox" alt="OMG Pumps">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Videos">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <video controls="controls"
                                           poster="<?php echo DOMAIN_URL; ?>assets/videos/video-2-poster.jpg"
                                           style="width:100%" title="video-2">
                                        <source src="<?php echo DOMAIN_URL; ?>assets/videos/video-2.m4v"
                                                type="video/mp4"/>
                                        <source src="<?php echo DOMAIN_URL; ?>assets/videos/video-2.webm"
                                                type="video/webm"/>
                                        <source src="<?php echo DOMAIN_URL; ?>assets/videos/video-2.ogv"
                                                type="video/ogg"/>
                                    </video>
                                </div>
                            </div>
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
        var $body = $('body'),
            $nav = $('nav');

        $nav.find('a').removeClass('active');
        $nav.find('[data-word="principal_company"]').addClass('active');

        $body.addClass('hugContent');
    });
</script>

</body>
</html>