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
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1s"><a class="subItem"
                                                                          href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/"
                                                                          data-word="about_us"><span><?php echo ABOUT; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.2s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/products.php"
                                                                            data-word="products"><span><?php echo PRODUCTS; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.4s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/regulation.php"
                                                                            data-word="REGULATION"><span><?php echo REGULATION; ?></span></a>
                        </li>
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/references.php"
                                                                            data-word="references"><span><?php echo REFERENCES; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/certificate.php"
                                                                            data-word="certificate"><span><?php echo CERTIFICATE; ?></span></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="row">
                <div class="col-xs-12 colsm-12 col-md-12 itemContent">
                    <h3 class="text-center" data-word="references"><span><?php echo REFERENCES; ?></span></h3>

                    <br>

                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#OWNERS" aria-controls="OWNERS" role="tab"
                                                                      data-toggle="tab">Owners</a></li>
                            <li role="presentation"><a href="#YARDS" aria-controls="YARDS"
                                                       role="tab" data-toggle="tab">Yards</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="OWNERS">
                                <p>
                                    <img class="center-block"
                                         src="<?php echo DOMAIN_URL; ?>assets/images/references_owners.jpg"
                                         alt="Owners">
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="YARDS">
                                <p>
                                    <img class="center-block"
                                         src="<?php echo DOMAIN_URL; ?>assets/images/references_yards.jpg" alt="Yards">
                                </p>
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