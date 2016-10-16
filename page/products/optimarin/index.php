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
            <img src="<?php echo DOMAIN_URL; ?>assets/images/optimarin-banner.jpg" alt="Optimarin banner">
            <h1 class="page_title <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>OPTIMARIN</span></h1>
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
                            <li data-word="references">
                                <a href="#"><span><?php echo REFERENCES; ?></span></a>
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
                        Optimarin AS was founded in 1994 in Stavanger, a town along the west coast of Norway and we
                        were one of the first companies in the world to develop a system for environmentally friendly
                        purification of ballast water.
                        <br><br>
                        Although we recognized that there were various methods for purifying ballast water, both
                        chemical and environmentally friendly methods, we chose to pursue a solution that does not use
                        any chemicals and leaves no residual products that are harmful to the ocean or the environment.
                        In the year of 2000  we were honored by installing the world’s first ballast water treatment
                        system on board the cruise ship Regal Princess.
                        <br><br>
                        After several years of testing, developing and patenting new technology, we finally obtained
                        type approval for the Optimarin Ballast System in 2009, in accordance with Guideline 8 and the
                        ‘International Convention for the Control and Management of Ships’ Ballast Water
                        and Sediments, 2004’. The Optimarin Ballast System (OBS) uses approved technology that
                        significantly exceeds the stringent requirements set out in the IMO Convention. But for
                        Optimarin, it is not enough to simply be approved. We operate in accordance with ISO 9001 / 2008
                        and our vision is to have the most environmentally friendly ballast water purification system in
                        the world.
                        <br><br>
                        At our main office in Sandnes we have a fully operational Optimarin Ballast System test facility
                        which may be used for training of customer’s technical personnel, or for internal R&D purposes.
                        <br><br>
                        Our Logistics department has established a main warehouse facility strategically placed in
                        Europe, in Luxemburg – with excellent connections to airports, shipping ports and land based
                        transportation of our products on their way to our customers all over the world.
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