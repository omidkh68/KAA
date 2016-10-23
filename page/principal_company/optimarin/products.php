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
                            data-wow-duration="1s" data-wow-delay="1s">
                            <a class="subItem" href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/"
                               data-word="about_us">
                                <span><?php echo ABOUT; ?></span>
                            </a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.2s">
                            <a class="subItem"
                               href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/certificate.php"
                               data-word="certificate">
                                <span><?php echo CERTIFICATE; ?></span>
                            </a>
                        </li>
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.4s">
                            <a class="subItem"
                               href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/products.php"
                               data-word="products">
                                <span><?php echo PRODUCTS; ?></span>
                            </a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s">
                            <a class="subItem"
                               href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/references.php"
                               data-word="references">
                                <span><?php echo REFERENCES; ?></span>
                            </a>
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
                                <a href="#Control_System" aria-controls="Control_System" role="tab" data-toggle="tab">
                                    Control System
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#ballastSystem" aria-controls="ballastSystem" role="tab" data-toggle="tab">
                                    Optimarin Ballast System
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#UVSystem" aria-controls="UVSystem" role="tab" data-toggle="tab">
                                    UV System
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#Filters" aria-controls="Filters" role="tab" data-toggle="tab">
                                    Filters
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Control_System">
                                <h3><b>Control System</b></h3>
                                <p></p>
                                <p>
                                    <strong>
                                        The Ballast Control System allows easy operation of the Optimarin Ballast
                                        System.
                                    </strong>
                                    <br>
                                </p>
                                <ul>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        User-friendly interface with touch screen
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Easy operation: on click only to start any operations

                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Interface with the ship’s integrated automation system

                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Logging in accordance with IMO requirements

                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Option of receiving signals from ballast pumps and valves

                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Additional features as PMS integration, GPS logging and UV redundancy
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ballastSystem">
                                <h3><b>Optimarin Ballast System</b></h3>
                                <p></p>
                                <p>
                                    The type approved Optimarin Ballast System is based on filtration as pre-treatment
                                    and high doses of UV irradiation for inactivation of marine organisms, viruses and
                                    bacteria, without affecting the normal operation of the ship. Ballast water is UV
                                    treated both during ballasting and de-ballasting to ensure the dual UV effect.
                                    Ballast water is only filtered during ballasting.
                                    <br>
                                    <br>
                                    The OBS is one of very few treatment options that does not use or generate chemicals
                                    or biocides in its treatment or cleaning processes. It is based on the idea that
                                    such systems should be environmentally sound, simple, flexible and easy to install,
                                    and capable of operating on both newbuilds and existing vessels.
                                    <br>
                                    <br>
                                    The OBS is certified to operate in all salinities. (freshwater, brackish and
                                    seawater)
                                    <br>
                                    <br>
                                    The Optimarin Ballast System is easy to install on board existing ships (retrofit)
                                    as well as on newbuilds. The modulized system is very flexible, with a relatively
                                    small footprint and weight, and will fit vessels of all kinds and sizes. The OBS can
                                    be delivered as a complete skid or as a customized solution. It accommodates a wide
                                    range of ballast water capacities and can handle flows up to 3.000 m³/h (or higher
                                    upon request).
                                    <br>
                                    <br>
                                    Optimarin’s endeavours have also assured approval from a range of classification
                                    organizations, including Lloyd’s Register, Germanischer Lloyd, Bureau Veritas, MLIT
                                    Japan, Russian Maritime Register of Shipping and American Bureau of Shipping.
                                    <br>
                                    <br>
                                    The Optimarin Ballast System is normally installed in the pump or engine room and in
                                    close proximity to the ballast pumps. The OBS can be delivered in a container, on a
                                    skid or in separate pieces to allow for easy installation in most any available
                                    space. The equipment can be installed horizontally, vertically, on or suspended
                                    below deck, along the ship’s side or in several separate locations. It is relatively
                                    low weight and adds no extra noise. The OBS utilizes every square meter and does not
                                    require much space, this makes it a cost-efficient solution.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="UVSystem">
                                <h3><b>UV System</b></h3>
                                <p></p>
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
                            <div role="tabpanel" class="tab-pane fade" id="Filters">
                                <h3><b>Filters</b></h3>
                                <p></p>
                                <p>
                                    <strong>
                                        Optimarin offers three different 40 micron filters: FilterSafe basket type, B&K
                                        candle type, and Filtrex basket type filter. All three filter types have
                                        automatic back flushing and are self-cleaning.
                                    </strong>
                                    <br>
                                </p>
                                <ul>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Removes large particles and organisms.
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Low pressure loss of only 0.1 – 0.5 BAR.
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Horizontal or vertical installation.
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        Bypassed during de-ballasting.
                                        <br>
                                        <br>
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