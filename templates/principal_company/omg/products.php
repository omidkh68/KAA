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
            <h1 class="page_title products <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>OMG</span></h1>
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
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay=".7s"><a class="subItem"
                                                                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/certificate.php"
                                                                           data-word="certificate"><span><?php echo CERTIFICATE; ?></span></a>
                        </li>
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay=".9s"><a class="subItem"
                                                                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/products.php"
                                                                           data-word="products"><span><?php echo PRODUCTS; ?></span></a>
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
                                <a href="#Chemical_Injection_Packages" aria-controls="Chemical_Injection_Packages"
                                   role="tab" data-toggle="tab">
                                    Chemical Injection Packages
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#DOXA" aria-controls="DOXA" role="tab" data-toggle="tab">
                                    DOXA
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#ECODOX" aria-controls="ECODOX" role="tab" data-toggle="tab">
                                    ECODOX
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#HOLLOW_DISC_ROTARY_PUMPS" aria-controls="HOLLOW_DISC_ROTARY_PUMPS" role="tab"
                                   data-toggle="tab">
                                    Hollow Disc Rotary Pumps
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Chemical_Injection_Packages">
                                <p>
                                    Since the early 1980’s, in answer to growing demands from the main engineering
                                    companies, OMG extended its activities to cover the design and manufacture of
                                    integrated dosing systems including OMG pumps. The market increased progressively
                                    allowing OMG to become one of the more consolidated supplier inside the major
                                    international Vendor lists.
                                    <br>
                                    <br>
                                    Activities for such particular type of market are followed by a dedicated technical
                                    team in order to be flexible and reactive ensuring professional management for jobs
                                    of medium and high complexity. All the engineering activities (based on Customers’
                                    specifications), manufacturing and testing ones are always performed internally. A
                                    group of experts is daily available to Customers for technical meeting as well as
                                    for direct service on the plant.
                                    <br>
                                    <br>
                                    The company philosophy is oriented towards maximum customer satisfaction, which is
                                    given every possible attention and constantly guarantees top quality products and
                                    services.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="DOXA">
                                <p>
                                    <strong>
                                        API 675 plunger and double diaphragm metering process pumps, designed to assure
                                        the greatest reliability in heavy duties:
                                    </strong>
                                    <br>
                                </p>
                                <ul>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        manufactured according to API 675 Std., “non lost-motion” type construction
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        continuous adjustment of capacity, from 0 to 100% while the pump is at rest or
                                        in operation
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        metering accuracy better than 1% over the normal operating range from 10 to 100%
                                        of capacity
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        patented capacity adjustment system, with mechanical plunger return stroke
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        completely enclosed crankcase made of cast iron
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        groupable in multiplex units
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        two series available :
                                        <ul>
                                            <li>
                                                <i class="fi flaticon-correct text-success"></i>
                                                double diaphragm sandwich type arrangement available (diaphragms
                                                hydraulically actuated by means of an hydraulic circuit with relief and
                                                replenishment valves)
                                                <br>
                                            </li>
                                            <li>
                                                <i class="fi flaticon-correct text-success"></i>
                                                PTFE or metal diaphragms, with facility for local or remote diaphragm
                                                leakage detectors
                                                <br>
                                            </li>
                                        </ul>

                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        two types of diaphragm liquid ends:

                                        <ul>
                                            <li>
                                                <i class="fi flaticon-correct text-success"></i>
                                                Manual or automatic stroke control
                                                <br>
                                            </li>
                                            <li>
                                                <i class="fi flaticon-correct text-success"></i>
                                                with pump at rest or in operation;
                                                linear adjustment scale with local reading display.
                                                <br>
                                            </li>
                                        </ul>

                                        <br>
                                        <br>
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="UVSystem">
                                <p>
                                    <strong>
                                        The UV System was developed based on 20 years of experience in water injection
                                        on offshore platforms, water treatment for fish farming and drinking water
                                        plants in Norway.
                                    </strong>
                                </p>
                                <ul>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        High power UV for the efficient killing or inactivation of organisms,
                                        bacteria and pathogens in ballast water.
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        One UV lamp per chamber (167 m3/h flow rate per chamber).
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Standardized UV chamber, installed in parallel on a single manifold for
                                        higher flows.
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Developed and manufactured for installation aboard ships.
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Optimized for minimum maintenance and ease of operation. It is
                                        self-cleaning, with no moving parts or need for chemical cleaning.
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        UV and temperature sensor in each chamber.
                                        <br>
                                        <br>
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ECODOX">
                                <p>
                                    <strong>
                                        API 675 plunger metering pumps designed for water treatment and low-cost
                                        applications, for safe and cost-effective service with maximum reliability and
                                        easy maintenance:
                                    </strong>
                                    <br>
                                </p>
                                <ul>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        continuous capacity control, adjustable with pump at rest or in operation
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        metering accuracy better than 1% over the normal operating range from 10 to 100%
                                        of capacity
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        groupable in multiplex units
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        cam and thrust plate drive system, with spring return
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        maximum allowable plunger thrust 1.500 N
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        worm gear reducer separated from the crank mechanism
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        completely enclosed crankcase made of aluminum alloy
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        pump body made of metal or plastic materials
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        manual or automatic stroke control, with pump at rest or in operation; linear
                                        adjustment scale with precision vernier
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="HOLLOW_DISC_ROTARY_PUMPS">
                                <p>
                                    <strong>
                                        The first patent for hollow disc rotary pumps was registered in 1918. The hollow
                                        disc is set eccentrically on the pump shaft and guided by the diaphragm
                                        separating the suction from the delivery chambers. When the shaft rotates, the
                                        disc oscillates remaining tangent in any position to the two diametrically
                                        opposite walls of the casing, thus forming two mobile fluid-tight joints. In
                                        every position the disc is radially and axially balanced . There are no radial
                                        components which could detach the disc or press it against the casing, therefore
                                        the liquid does not tend to escape. The resultant pressure force is the same in
                                        any position so that the absorbed power amount is always uniform. The elastic
                                        device acts like a spring by keeping the disc in grazing contact with the
                                        cylindrical walls of casing, thus creating an elastic coupling between the
                                        central bearing of the disc and the shaft.
                                    </strong>
                                    <br>
                                </p>
                                <ul>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        low operating speed as best guarantee for long service life
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        adaptable for any kind of liquid, from the most fluid to the most viscous
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        self priming operating conditions, NPSH required less than 3 meters, no foot
                                        valve is needed
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        reversible flow by operating the pump in the opposite direction
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        all mechanical seals as per API Standards could be installed to meet any process
                                        requirement
                                    </li>
                                </ul>
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