<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/7/16
 * Time: 12:51 PM
 */

include_once("config.php");

?>
<!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
<!-- Page Head -->
<?php include_once("includes/head.php"); ?>

<body class="<?php echo DEFAULT_THEME; ?>">
    <!-- Page Loader Overlay -->
    <?php include_once("includes/pageOverlay.php"); ?>

    <!-- Header of Site -->
    <?php include_once("includes/header.php"); ?>

        <div class="body-content">
            <!-- content -->
            <div class="content">

            </div>

            <!-- Fullscreen Slider -->
            <?php include_once("includes/slider.php"); ?>
        </div>

    <!-- Footer of Site -->
    <?php include_once("includes/footer.php"); ?>

        <!-- all js scripts -->
    <?php include_once("includes/scripts.php"); ?>

    </body>
</html>