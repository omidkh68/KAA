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
    <div class="box bg-white contact_us center-block wow <?php echo (LANG == "fa") ? "fadeInRight" : "fadeInLeft" ?>"
         data-wow-duration="1s" data-wow-delay=".3s">
        <h1 class="page_title mb <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>" data-word="contact_us">
            <span class="text-primary"><?php echo CONTACT; ?></span>
        </h1>
        <div class="content">
            <div class="row">
                <!-- contact us form -->
                <div class="col-xs-12 col-sm-6 col-md-6 <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
                    <form>
                        <div class="form-group <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <input type="text" class="form-control" name="name" data-word="contact_name"
                                   placeholder="<?php echo NAME; ?>" autofocus required>
                        </div>
                        <div class="form-group <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <input type="text" class="form-control" name="email" data-word="contact_email"
                                   placeholder="<?php echo EMAIL; ?>" required>
                        </div>
                        <div class="form-group <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <input type="text" class="form-control" name="subject" data-word="contact_subject"
                                   placeholder="<?php echo SUBJECT; ?>" required>
                        </div>
                        <div class="form-group <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <textarea class="form-control" name="message" data-word="contact_message"
                                      placeholder="<?php echo YOUR_MESSAGE; ?>"></textarea>
                        </div>
                        <div class="form-group <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                            <input type="text" class="form-control" name="code" data-word="contact_code"
                                   placeholder="<?php echo CAPTCHA_CODE; ?>" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" data-word="contact_send"><?php echo SEND; ?></button>
                        </div>
                    </form>
                </div>

                <!-- contact us column -->
                <div class="col-xs-6 col-sm-6 col-md-6 <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">
                    <ul class="list mt-double pl-double <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
                        <li data-word="phone">
                            <b><i class="fi flaticon-phone"></i> <span><?php echo PHONE; ?></span>: </b>
                            <p>(+9821) 88 54 00 72</p>
                        </li>
                        <li data-word="fax">
                            <b><i class="fi flaticon-fax"></i> <span><?php echo FAX; ?></span>: </b>
                            <p>(+9821) 88 54 00 74</p>
                        </li>
                        <li data-word="contact_email">
                            <b><i class="fi flaticon-email"></i> <span><?php echo EMAIL; ?></span>: </b>
                            <p>info@kavoshabzar.net</p>
                        </li>
                        <li data-word="postal_code">
                            <b><i class="fi flaticon-postal"></i> <span><?php echo POSTAL_CODE; ?></span>: </b>
                            <p>15138-35116</p>
                        </li>
                        <li data-word="address">
                            <b><i class="fi flaticon-address"></i> <span><?php echo ADDRESS; ?></span>: </b>
                            <p data-word="physical_address"><?php echo PHYSICAL_ADDRESS; ?></p>
                        </li>
                    </ul>
                </div>

                <!-- map column -->
                <div class="col-xs-6 col-sm-12 col-md-12">
                    <iframe class="mt-double" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=Kavoshabzar%20aria%20co.&key=AIzaSyAVIyQ0s4Fnme6NIKUDfUIwGxrnRMZ1v38"></iframe>
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
        $nav.find('[data-word="contact_us"]').addClass('active');
    });
</script>

</body>
</html>