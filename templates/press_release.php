<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/16
 * Time: 12:42 PM
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
    <div class="box center-block">
        <ul class="news-inbox">
            <?php
            if (isset($result)) {

                $cnt = 0.3;
                foreach ($pressRelease as $k => $v) {
                    ?>
                    <li class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="<?php echo $cnt; ?>s">
                        <div class="row log_title">
                            <div
                                class="col-xs-3 col-sm-3 col-md-2 <?php echo (LANG == "fa") ? "pull-right rtl" : "pull-left ltr" ?>">
                                <?php
                                $fileNameTmp = LOCAL_PATH."assets/images/news/".$v['image_name'].'.'.$v['image_type'];
                                if(is_file($fileNameTmp)) {
                                    $fileName = DOMAIN_URL."assets/images/news/".$v['image_name'].'.'.$v['image_type'];
                                } else {
                                    $fileName = DOMAIN_URL."assets/images/kavoshabzar_img_placeholder.png";
                                }
                                ?>
                                <img class="center-block img-thumbnail runLightBox"
                                     src="<?php echo $fileName; ?>"
                                     alt="<?php echo(strlen($v['image_desc']) ? $v['image_desc'] : '-'); ?>">
                            </div>
                            <div
                                class="col-xs-9 col-sm-9 col-md-10 <?php echo (LANG == "fa") ? "pull-right rtl" : "pull-left ltr" ?>">
                                <h3 class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                                    <?php echo(isset($v['subject']) && strlen($v['subject']) ? $v['subject'] : ''); ?>

                                    <i class="fi flaticon-angle-bottom normal-transition"></i>
                                </h3>
                            </div>
                        </div>
                        <div class="content">
                            <?php echo(strlen($v['description']) ? $v['description'] : '-'); ?>
                        </div>

                        <span class="date <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <?php echo(isset($v['create_date']) && strlen($v['create_date']) ? $v['create_date'] : ''); ?>
                        </span>
                    </li>
                    <?php

                    $cnt += 0.2;
                }
            }
            ?>
        </ul>
    </div>

    <div id="lightBox" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <img src="" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
        $nav.find('[data-word="press_release"]').addClass('active');
    });
</script>

</body>
</html>