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
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
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
                    <h3 class="text-center"><?php echo CERTIFICATE; ?></h3>

                    <br>

                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#IMO" aria-controls="IMO" role="tab"
                                                                      data-toggle="tab">IMO</a></li>
                            <li role="presentation"><a href="#optimarinApprovals" aria-controls="optimarinApprovals"
                                                       role="tab" data-toggle="tab">Optimarin Approvals</a></li>
                            <li role="presentation"><a href="#uSCoastGuard" aria-controls="uSCoastGuard" role="tab"
                                                       data-toggle="tab">US Coast Guard</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="IMO">
                                <h3><b>IMO</b></h3>
                                <p></p>
                                <p>
                                    <strong>
                                        GLOBAL IMO STANDARDS
                                    </strong>
                                    <br>
                                    The International Convention for the Control and Management of Ships Ballast Water &
                                    Sediments was adopted by Diplomatic Conference at IMO in London, February 2004.
                                    <br>
                                    <br>
                                    <strong>
                                        STATUS RATIFICATION BWMC
                                    </strong>
                                    <br>
                                    The Ballast Water Management Convention entered into force  on 7 September 2016 as
                                    more than 30 flag states, representing more than 35% of the world fleet tonnage has
                                    ratified the convention.
                                    <br>
                                    By 7 September 2016, 52 states have ratified. This provides a total of 35.14% of the
                                    world’s merchant fleet tonnage .
                                    <a href="http://www.imo.org" target="_blank">www.imo.org (Status of conventions)</a>
                                    <br>
                                    <br>
                                    <strong>
                                        PERFORMANCE STANDARD
                                    </strong>
                                    <br>
                                    <br>
                                    Regulation D2 Ballast Water Performance Standard
                                    <br>
                                    <br>
                                    1 Ships conducting Ballast Water Management in accordance with this regulation shall
                                    discharge less than 10 viable organisms per cubic metre greater than or equal to 50
                                    micrometres in minimum dimension and less than 10 viable organisms per milliliter
                                    less than 50 micrometres in minimum dimension and greater than or equal to 10
                                    micrometres in minimum dimension; and discharge of the indicator microbes shall not
                                    exceed the specified concentrations described in paragraph 2.
                                    <br>
                                    <br>
                                    2 Indicator microbes, as a human health standard, shall include:
                                    <br>
                                    <br>
                                    1 Toxicogenic Vibrio cholerae (O1 and O139) with less than 1 colony forming unit
                                    (cfu) per 100 milliliters or less than 1 cfu per 1 gram (wet weight) zooplankton
                                    samples ;
                                    <br>
                                    <br>
                                    2 Escherichia coli less than 250 cfu per 100 milliliters;
                                    <br>
                                    <br>
                                    3 Intestinal Enterococci less than 100 cfu per 100 milliliters.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="optimarinApprovals">
                                <h3><b>US Coast Guard</b></h3>
                                <p></p>
                                <p>
                                    <strong>
                                        After several years of testing, developing and patenting new technology,
                                        Optimarin finally obtained type approval for its purification system in 2009 in
                                        accordance with Guideline 8 and the International Convention for the Control and
                                        Management of Ship’s Ballast Water and Sediments, 2004. The Optimarin Ballast
                                        System uses approved technology that significantly exceeds the stringent
                                        requirements set out in the IMO Convention. But for Optimarin it is not enough
                                        to simply be approved. We operate in accordance with NS-EN ISO 9001:2008 &
                                        14001:2004. And our vision is to have the most environmentally friendly ballast
                                        water purification system in the world.
                                    </strong>
                                    <br>
                                    <br>
                                    IMO’s regulations contain requirements that aproved systems shall not constitute a
                                    hazard to personell, the environment, the ship, or cause uncontrolled discharges.
                                    The system safeguards the people who handle it, and monitors itself to ensure that
                                    it is operating properly.
                                    <br>
                                    <br>
                                    Optimarin’s type approval certificate was issued by DNV on behalf of the Norwegian
                                    Maritime Directorate. Based on the information reviewed Optimarin has also been
                                    assessed by the California State Land Commission, which stated that Optimarin has
                                    the potential to meet their standard for Best Available Technologies.
                                    <br>
                                    The OBS has been extensively tested at the Norwegian Institute for Water Research
                                    (NIVA) in accordance with IMO’s G8 Guidelines – with excellent results.
                                    <br>
                                    Optimarin’s endeavours have also assured approval from a range of classification
                                    organizations, including Lloyd’s Register, Germanischer Lloyd, Bureau Veritas, MLIT
                                    Japan, Russian Maritime Register of Shipping and American Bureau of Shipping.
                                    <br>
                                    <br>
                                    <strong>
                                        Certificates of approval :
                                    </strong>
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