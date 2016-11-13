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
                    Slider

                    <button class="btn btn-primary pull-right" href="#" role="button">Add To List</button>
                </h1>

                <div class="row xsmall-space"></div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?php
                        if(isset($slider) && count($slider['export']['list'])) {
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>row</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Image</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cnt = 1;
                            foreach ($slider['export']['list'] as $k => $v) {
                            ?>
                            <tr>
                                <td><?php echo $cnt++; ?></td>
                                <td><?php echo $v['name']; ?></td>
                                <td><?php echo $v['description']; ?></td>
                                <td style="width: 200px;"><img src="<?php echo DOMAIN_URL."assets/images/slider/".$v['name'].'.'.$v['type']; ?>" alt="<?php echo $v['description']; ?>"></td>
                                <td class="text-center">
                                    <a class="fa fa-trash text-danger"></a>
                                    <a class="fa fa-pencil text-success"></a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        } else {

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