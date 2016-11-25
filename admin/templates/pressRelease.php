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
                    <?php echo PRESS_RELEASE; ?>

                    <button class="btn btn-primary pull-right" href="#" role="button">Add To List</button>
                </h1>

                <div class="row xsmall-space"></div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?php
                        if(isset($pressRelease) && count($pressRelease)) {
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Row</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cnt = 1;
                            foreach ($pressRelease as $k => $v) {
                            ?>
                            <tr>
                                <td><?php echo $cnt++; ?></td>
                                <td><?php echo $v['subject']; ?></td>
                                <td><?php echo $v['description']; ?></td>
                                <td style="width: 200px;">
                                    <img src="<?php echo DOMAIN_URL."assets/images/news/".$v['image_name'].'.'.$v['image_type']; ?>" alt="<?php echo $v['image_desc']; ?>">
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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