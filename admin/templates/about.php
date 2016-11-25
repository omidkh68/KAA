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

        <div class="container-fluid">

            <div class="jumbotron">
                <h1>
                    <?php echo ABOUT; ?>
                </h1>

                <div class="row xsmall-space"></div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?php
                        if(isset($about) && count($about)) {
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Row</th>
                                    <th>Lang</th>
                                    <th>Text</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cnt = 1;
                            foreach ($about as $k => $v) {
                            ?>
                            <tr>
                                <td><?php echo $cnt++; ?></td>
                                <td><?php echo $v['lang']; ?></td>
                                <td><?php echo $v['text']; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        } else {
                        ?>
                        <div class="alert alert-warning text-center" role="alert">Not Found</div>
                        <?php
                        }
                        ?>

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