<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/2016 AD
 * Time: 21:46
 */

include_once($_SERVER["DOCUMENT_ROOT"] . "/config.php");

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
        <h1 class="page_title <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>OPTIMARIN</span></h1>
        <div class="content">
            <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-2 <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
                    <div class="indicator-holder">
                        <ul class="indicator <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <li data-word="about_us"><a href="#" class="active"><span><?php echo ABOUT; ?></span></a>
                            </li>
                            <li data-word="products"><a href="#"><span><?php echo PRODUCTS; ?></span></a></li>
                            <li data-word="references"><a href="#"><span><?php echo REFERENCES; ?></span></a></li>
                            <li data-word="certificate"><a href="#"><span><?php echo CERTIFICATE; ?></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-9 colsm-10 col-md-10 <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">

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