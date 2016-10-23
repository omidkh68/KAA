<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/2016 AD
 * Time: 21:46
 */

include_once("../../../config.php");

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
            <img src="<?php echo DOMAIN_URL; ?>assets/images/optimarin-banner.jpg" alt="Optimarin banner">
            <h1 class="page_title <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>OPTIMARIN</span></h1>
        </div>
        <div class="content">
            <nav class="belowNav navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav <?php echo (LANG == "fa") ? "navbar-right" : "navbar-left" ?>">
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
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
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/references.php"
                                                                            data-word="references"><span><?php echo REFERENCES; ?></span></a>
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
                                <h3><b>Owners</b></h3>
                                <p></p>
                                <p>
                                    <img class="center-block"
                                         src="<?php echo DOMAIN_URL; ?>assets/images/references_owners.jpg"
                                         alt="Owners">
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="YARDS">
                                <h3><b>Yards</b></h3>
                                <p></p>
                                <p>
                                    <img class="center-block"
                                         src="<?php echo DOMAIN_URL; ?>assets/images/references_yards.jpg" alt="Yards">
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="uSCoastGuard">
                                <h3><b>US Coast Guard</b></h3>
                                <p></p>
                                <p>
                                    <strong>
                                        In March 2012 the US Coast Guard published its final rule on Ballast Water
                                        Management for Control of Nonindigenous Species in Waters of the United States.
                                        And in June the same year the USCG Regulations 33 CFR Part 151 and 46 CFR Part
                                        162 entered into force on 21 June 2012, which apply to new builds constructed on
                                        or after 1st December 2013 as well as to existing ships by their first
                                        dry-docking after 2014 or 2016 depending on the ballast water capacity.
                                    </strong>
                                    <br>
                                    <br>
                                    In order to address the US implementation schedule for ballast water treatment
                                    systems for dates prior to 2015, the USCG introduced the Alternate Management System
                                    (AMS) acceptance for some IMO approved systems including Optimarin. Ships
                                    with systems accepted as AMS installed will be grandfathered for five years beyond
                                    their USCG compliance date.
                                    <br>
                                    <br>
                                    Regarding treatment; The USCG requirement of BWT is instant death after treatment
                                    using a test/counting method called CMFDA which is a staining method which can
                                    determine that the organisms are really dead immediately after treatment.
                                    <br>
                                    <br>
                                    The non-viability standard (acceptable under the IMO regime) which render the
                                    organism non-viable after treatment or dead after a grow-out period of 14-20 days.
                                    This test method is called MPM and is not approved by the USCG.  USCG has a project
                                    to analyse the MPM method but it does not look like they will allow this it any time
                                    soon.
                                    <br>
                                    <br>
                                    If USCG however do decide to change the test methods, it is a process that requires
                                    public hearing and public comments and submittal of the revised regulation through
                                    the proper US regulatory process and may take years to carry through.
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