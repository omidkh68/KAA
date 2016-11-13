<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 19:09
 */

include_once '../config.php';
?>
<!doctype html>
<html lang="en">
    <?php include_once LOCAL_PATH . 'includes/head.php'; ?>
    <body>

        <?php include_once LOCAL_PATH . 'includes/nav.php'; ?>

        <div class="container">
            <!-- separator -->
            <div class="row xsmall-space"></div>

            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1 class="mz">
                                <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages">
                                    <i class="fa fa-info"></i>
                                    <?php echo ABOUT; ?>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1 class="mz">
                                <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages">
                                    <i class="fa fa-envelope"></i>
                                    <?php echo CONTACT; ?>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1 class="mz">
                                <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages">
                                    <i class="fa fa-newspaper-o"></i>
                                    <?php echo PRESS_RELEASE; ?>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1 class="mz">
                                <a class="text-center" href="<?php echo DOMAIN_URL; ?>admin/pages/slider.php">
                                    <i class="fa fa-picture-o"></i>
                                    <?php echo SLIDER; ?>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1>Default Language :</h1>

                            <div class="row xxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL.'admin/includes/changeDefaultLang.php'; ?>" method="post">
                                <div class="form-group">
                                    <select class="form-control" name="changeLang">
                                        <option value="en" <?php echo (LANG == "en" ? "selected" : ""); ?>>English</option>
                                        <option value="fa" <?php echo (LANG == "fa" ? "selected" : ""); ?>>فارسی</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1>Copyright Text :</h1>

                            <div class="row xxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL.'admin/includes/changeDefaultLang.php'; ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="copyright">
                                </div>
                                <div class="form-group">
                                    <select class="form-control font-sta" name="changeLang">
                                        <option value="en" <?php echo (LANG == "en" ? "selected" : ""); ?>>English</option>
                                        <option value="fa" <?php echo (LANG == "fa" ? "selected" : ""); ?>>فارسی</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer of panel -->
        <?php include_once LOCAL_PATH . 'includes/footer.php'; ?>

        <!-- scritps of panel -->
        <?php include_once LOCAL_PATH . 'includes/scripts.php'; ?>
    </body>
</html>