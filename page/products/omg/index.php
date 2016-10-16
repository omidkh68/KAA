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
        <div class="banner-container">
            <img src="<?php echo DOMAIN_URL; ?>assets/images/omg-banner.jpg" alt="OMG banner">
            <h1 class="page_title <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>OMG</span></h1>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-2 <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
                    <div class="indicator-holder">
                        <ul class="indicator <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <li data-word="about_us">
                                <a href="#" class="active"><span><?php echo ABOUT; ?></span></a>
                            </li>
                            <li data-word="products">
                                <a href="#"><span><?php echo PRODUCTS; ?></span></a>
                            </li>
                            <li data-word="certificate">
                                <a href="#"><span><?php echo CERTIFICATE; ?></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-9 colsm-10 col-md-10 <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">
                    <br>
                    <h3><?php echo ABOUT; ?></h3>
                    <p>
                        <br>
                        Officine Meccaniche Gallaratesi S.p.A. was established in 1907 by a group of Milanese
                        entrepreneurs.
                        <br><br>
                        The company’s main activity during its early years was centred around an engineering workshop
                        and its annexed cast iron foundry and aimed at satisfying the increasing demands of the rapidly
                        expanding Lombardy industry at the start of the century.During the following years, the company
                        added the construction of machines to its production.
                        <br><br>
                        The first patent for an hollow disc rotary pump was registrered in 1918. The principle patented
                        at the time is being used in a series of pumps still in production.
                        <br><br>
                        The 1950's saw the design and production of the first plunger dosing pump. The range of dosing
                        pumps has since been expanded with the introduction of a number of diaphragm dosing pumps during
                        the 70's.
                        <br><br>
                        In the same 1970’s, OMG expanded its activities to include the design and construction of
                        package dosing systems, manufactured according to customer’s specifications and the main
                        governing standards for Oil & Gas, chemical and petrochemical markets.
                        <br><br>
                        During the 1980's, OMG initiated the introduction of a formalised quality system, with the first
                        complete quality system being adopted in 1992. In the spring of 1996, OMG quality system was
                        certified as conforming to ISO 9001.
                        <br><br>
                        Unlike other pump manufacturers, OMG has chosen to retain all design and construction activities
                        in its property maintaining a higher level of quality control and greater manufacturing
                        flexibility. This enables OMG to develop customized tailormade applications meeting all specific
                        dosing requirements.

                    </p>
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
        $nav.find('[data-word="principal_company"]').addClass('active');
    });
</script>

</body>
</html>