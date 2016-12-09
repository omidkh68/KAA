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
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/references.php"
                                                                            data-word="references"><span><?php echo REFERENCES; ?></span></a>
                        </li>
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/certificate.php"
                                                                            data-word="certificate"><span><?php echo CERTIFICATE; ?></span></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="row">
                <div class="col-xs-12 colsm-12 col-md-12 itemContent">
                    <h3 class="text-center" data-word="references"><span>Optimarin Approvals</span></h3>

                    <br>

                    <p>
                        After several years of testing, developing and patenting new technology, Optimarin finally
                        obtained type approval for its purification system in 2009 in accordance with Guideline 8 and
                        the International Convention for the Control and Management of Ship’s Ballast Water and
                        Sediments, 2004. The Optimarin Ballast System uses approved technology that significantly
                        exceeds the stringent requirements set out in the IMO Convention. But for Optimarin it is not
                        enough to simply be approved. We operate in accordance with NS-EN ISO 9001:2008 & 14001:2004.
                        And our vision is to have the most environmentally friendly ballast water purification system in
                        the world.

                        <br>
                        <br>

                        IMO’s regulations contain requirements that aproved systems shall not constitute a hazard to
                        personell, the environment, the ship, or cause uncontrolled discharges. The system safeguards
                        the people who handle it, and monitors itself to ensure that it is operating properly.

                        <br>
                        <br>

                        Optimarin’s type approval certificate was issued by DNV on behalf of the Norwegian Maritime
                        Directorate. Based on the information reviewed Optimarin has also been assessed by the
                        California State Land Commission, which stated that Optimarin has the potential to meet their
                        standard for Best Available Technologies.

                        <br>
                        <br>

                        The OBS has been extensively tested at the Norwegian Institute for Water Research (NIVA) in
                        accordance with IMO’s G8 Guidelines – with excellent results.

                        <br>
                        <br>

                        Optimarin’s endeavours have also assured approval from a range of classification organizations,
                        including Lloyd’s Register, Germanischer Lloyd, Bureau Veritas, MLIT Japan, Russian Maritime
                        Register of Shipping and American Bureau of Shipping.
                    </p>

                    <br>

                    <h3 class="text-center" data-word="references"><span>Certificates of approval :</span></h3>

                    <br>

                    <div class="row">
                        <div class="col-xs-4 col-sm-2 col-md-3">
                            <a class="runLightBox" data-src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/DNV-GL-Type-Approval-Certificate.png">
                                <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/DNV-GL.png" alt="DNV-GL-Type-Approval-Certificate">
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 col-md-3">
                            <a class="runLightBox" data-src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/BUREAU-VERITAS-Type-Approval-Certificate.png">
                                <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/Bereau-Veritas.png" alt="BUREAU-VERITAS-Type-Approval-Certificate">
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 col-md-3">
                            <a class="runLightBox" data-src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/US-COAST-GUARD-Alternate-Management-System-Acceptance.png">
                                <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/US-Coast-Guard-Alternative-Management-System.png" alt="US-COAST-GUARD-Alternate-Management-System-Acceptance">
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 col-md-3">
                            <a class="runLightBox" data-src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/ABS-Design-Assessment.png">
                                <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/American-Bureau-of-Shipping.png" alt="ABS-Design-Assessment">
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 col-md-3">
                            <a class="runLightBox" data-src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/LLOYDS-REGISTER-Marine-Design-Appraisal-Document.png">
                                <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/Lloyds-Register.png" alt="LLOYDS-REGISTER-Marine-Design-Appraisal-Document">
                            </a>
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