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
            <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/optimarin-banner.jpg"
                 alt="Optimarin banner">
            <h1 class="page_title products <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>OPTIMARIN</span></h1>
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
                            data-wow-duration="1s" data-wow-delay="1s"><a class="subItem"
                                                                          href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/"
                                                                          data-word="about_us"><span><?php echo ABOUT; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.2s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/certificate.php"
                                                                            data-word="certificate"><span><?php echo CERTIFICATE; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.4s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/products.php"
                                                                            data-word="products"><span><?php echo PRODUCTS; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/references.php"
                                                                            data-word="references"><span><?php echo REFERENCES; ?></span></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="row">
                <div class="col-xs-12 colsm-12 col-md-12 itemContent">
                    <h3 class="text-center" data-word="about_us"><span><?php echo ABOUT; ?></span></h3>

                    <br>

                    <p>
                        <?php echo(isset($result) && strlen($result['text']) ? $result['text'] : '') ?>
                    </p>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#Gallery" aria-controls="Control_System" role="tab" data-toggle="tab"
                               data-word="gallery">
                                <?php echo GALLERY; ?>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#Videos" aria-controls="ballastSystem" role="tab" data-toggle="tab"
                               data-word="video">
                                <?php echo VIDEO; ?>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Gallery">
                            <div class="row">
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/img-1.jpg"
                                         class="img-thumbnail runLightBox" alt="Optimarin Product image">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/img-2.jpg"
                                         class="img-thumbnail runLightBox" alt="Optimarin Product image">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/img-3.jpg"
                                         class="img-thumbnail runLightBox" alt="Optimarin Product image">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/img-4.jpg"
                                         class="img-thumbnail runLightBox" alt="Optimarin Product image">
                                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/img-5.jpg"
                                         class="img-thumbnail runLightBox" alt="Optimarin Product image">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Videos">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <video controls="controls"
                                           poster="<?php echo DOMAIN_URL; ?>assets/videos/video-1-poster.png"
                                           style="width:100%" title="video-1">
                                        <source src="<?php echo DOMAIN_URL; ?>assets/videos/video-1.m4v"
                                                type="video/mp4"/>
                                        <source src="<?php echo DOMAIN_URL; ?>assets/videos/video-1.webm"
                                                type="video/webm"/>
                                        <source src="<?php echo DOMAIN_URL; ?>assets/videos/video-1.ogv"
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

    <div id="lightBox" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <img src="" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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