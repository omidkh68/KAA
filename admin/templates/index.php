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

            <h4>Welcome <span class="text-primary"><?php echo $_SESSION['username']; ?></span></h4>

            <!-- separator -->
            <div class="row xxsmall-space"></div>

            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1 class="mz">
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL; ?>admin/pages/about.php">
                                    <i class="fa fa-info text-danger"></i>
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
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL; ?>admin/pages/contact.php">
                                    <i class="fa fa-envelope text-danger"></i>
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
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL; ?>admin/pages/press.php">
                                    <i class="fa fa-newspaper-o text-danger"></i>
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
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL; ?>admin/pages/slider.php">
                                    <i class="fa fa-picture-o text-danger"></i>
                                    <?php echo SLIDER; ?>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h3>Meta Keywords :</h3>

                            <div class="row xxsmall-space"></div>

                            <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h3>Default Language :</h3>

                            <div class="row xxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL.'admin/includes/changeDefaultLang.php'; ?>" method="post">
                                <div class="form-group">
                                    <select class="form-control" name="changeLang">
                                        <option value="en" <?php echo ($defaultLang == "en" ? "selected" : ""); ?>>English</option>
                                        <option value="fa" <?php echo ($defaultLang == "fa" ? "selected" : ""); ?>>فارسی</option>
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
                            <h3>Copyright Text :</h3>

                            <div class="row xxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL.'admin/index.php'; ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="copyright" value="<?php echo (isset($copyrights) && strlen($copyrights['en']) ? $copyrights['en'] : ""); ?>">
                                </div>
                                <div class="form-group">
                                    <select class="form-control font-sta" name="changeLang" id="changeCopyLang">
                                        <option data-value="<?php echo (isset($copyrights) && strlen($copyrights['en']) ? $copyrights['en'] : ""); ?>" value="en">English</option>
                                        <option data-value="<?php echo (isset($copyrights) && strlen($copyrights['fa']) ? $copyrights['fa'] : ""); ?>" value="fa">فارسی</option>
                                    </select>
                                </div>
                                <input type="hidden" name="action" value="changeCopyright">
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- separator -->
            <div class="row xsmall-space"></div>
        </div>

        <!-- footer of panel -->
        <?php include_once LOCAL_PATH . 'includes/footer.php'; ?>

        <!-- scritps of panel -->
        <?php include_once LOCAL_PATH . 'includes/scripts.php'; ?>
    </body>
</html>