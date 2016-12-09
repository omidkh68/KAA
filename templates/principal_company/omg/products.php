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
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay=".5s"><a class="subItem"
                                                                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/"
                                                                           data-word="about_us"><span><?php echo ABOUT; ?></span></a>
                        </li>
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
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
                    <h3 class="text-center" data-word="products"><span><?php echo PRODUCTS; ?></span></h3>

                    <br>

                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#ECODOX" aria-controls="ECODOX" role="tab" data-toggle="tab">
                                    ECODOX
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#DOXA" aria-controls="DOXA" role="tab" data-toggle="tab">
                                    DOXA
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#IDRODOX" aria-controls="IDRODOX" role="tab" data-toggle="tab">
                                    IDRODOX
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#DOXE" aria-controls="DOXE" role="tab" data-toggle="tab">
                                    DOXE
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="ECODOX">
                                <p>
                                    <strong>
                                        API 675 plunger pumps
                                    </strong>
                                    <br>
                                </p>
                                <a href="<?php echo DOMAIN_URL; ?>assets/images/products/omg/ECODOX.pdf">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/pdf.png" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="DOXA">
                                <p>
                                    <strong>
                                        API 675 plunger and double diaphragm pumps
                                    </strong>
                                    <br>
                                </p>
                                <a href="<?php echo DOMAIN_URL; ?>assets/images/products/omg/DOXA.pdf">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/pdf.png" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="IDRODOX">
                                <p>
                                    <strong>
                                        API 675 double diaphragm pumps
                                    </strong>
                                    <br>
                                </p>
                                <a href="<?php echo DOMAIN_URL; ?>assets/images/products/omg/IDRODOX.pdf">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/pdf.png" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="DOXE">
                                <p>
                                    <strong>
                                        API 675 & API 674 plunger and double diaphragm pumps
                                    </strong>
                                    <br>
                                </p>
                                <a href="<?php echo DOMAIN_URL; ?>assets/images/products/omg/DOXE.pdf">
                                    <img src="<?php echo DOMAIN_URL; ?>assets/images/pdf.png" alt="">
                                </a>
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