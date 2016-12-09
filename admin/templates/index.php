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
            <div class="row xxxsmall-space"></div>

            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h1 class="mz">
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL_admin; ?>pages/about.php">
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
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL_admin; ?>pages/contact.php">
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
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL_admin; ?>pages/press.php">
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
                                <a class="text-center text-info" href="<?php echo DOMAIN_URL_admin; ?>pages/slider.php">
                                    <i class="fa fa-picture-o text-danger"></i>
                                    <?php echo SLIDER; ?>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h3>Meta Keywords :</h3>

                            <!-- separator -->
                            <div class="row xxxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL_admin.'index.php'; ?>" method="post">
                                <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i></button>

                                <input type="hidden" name="action" value="changeKeywords">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h3>Template Type :</h3>

                            <!-- separator -->
                            <div class="row xxxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL_admin.'index.php'; ?>" method="post">
                                <div class="form-group">
                                    <select class="form-control" name="changeTheme">
                                        <option value="white" <?php echo (isset($defaultTheme) && $defaultTheme == "white" ? "selected" : ""); ?>>White</option>
                                        <option value="" <?php echo (isset($defaultTheme) && $defaultTheme == "" ? "selected" : ""); ?>>Dark</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Change</button>

                                <input type="hidden" name="action" value="changeDefaultTheme">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h3>Default Language :</h3>

                            <!-- separator -->
                            <div class="row xxxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL_admin.'index.php'; ?>" method="post">
                                <div class="form-group">
                                    <select class="form-control" name="changeLang">
                                        <option value="en" <?php echo (isset($defaultLang) && $defaultLang == "en" ? "selected" : ""); ?>>English</option>
                                        <option value="fa" <?php echo (isset($defaultLang) && $defaultLang == "fa" ? "selected" : ""); ?>>فارسی</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Change</button>
                                <input type="hidden" name="action" value="changeDefaultLang">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="jumbotron">
                        <div class="jumbotron-contents">
                            <h3>Copyright Text :</h3>

                            <!-- separator -->
                            <div class="row xxxsmall-space"></div>

                            <form class="form-inline" action="<?php echo DOMAIN_URL_admin.'index.php'; ?>" method="post">
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