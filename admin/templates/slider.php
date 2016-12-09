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
                    <?php echo SLIDER; ?>

                    <button id="addForm" class="btn btn-primary pull-right" role="button">Add To List</button>
                </h1>

                <!-- separator -->
                <div class="row xsmall-space"></div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?php
                        if(isset($slider) && count($slider)) {
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Row</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Image</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cnt = 1;
                            foreach ($slider as $k => $v) {
                            ?>
                            <tr data-sliderID="<?php echo $k; ?>">
                                <td><?php echo $cnt++; ?></td>
                                <td><?php echo $v['name']; ?></td>
                                <td><?php echo $v['description']; ?></td>
                                <td style="width: 200px;"><img src="<?php echo DOMAIN_URL."assets/images/slider/".$v['name'].'.'.$v['type']; ?>" alt="<?php echo $v['description']; ?>"></td>
                                <td class="text-center">
                                    <a class="btnEdit btn btn-success btn-xs" data-sliderID="<?php echo $k; ?>"><i class="fa fa-pencil"></i></a>
                                    <a class="btnDelete btn btn-danger btn-xs" data-sliderID="<?php echo $k; ?>"><i class="fa fa-trash"></i></a>
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

        <!-- Add/Edit Form -->
        <div id="sliderForm" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form class="sliderForm" action="<?php echo DOMAIN_URL_admin; ?>pages/slider.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body"><div class="form-group">
                                <textarea class="form-control" name="desc" id="desc"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="file">slider File</label>
                                        <input type="file" class="form-control" name="sliderFile" id="sliderFile">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 editMode hidden">
                                        <img  src="" alt="" style="max-width: 100px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="sliderID" value="">
                            <input type="hidden" name="action" value="addToPlider">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" id="saveChanges" class="btn btn-success">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- footer of panel -->
        <?php include_once LOCAL_PATH . 'includes/footer.php'; ?>

        <!-- scritps of panel -->
        <?php include_once LOCAL_PATH . 'includes/scripts.php'; ?>
        
        <script>
            $(function() {
                var $body       = $('body'),
                    baseURL     = '<?php echo DOMAIN_URL_admin.'pages/slider.php'; ?>',
                    $modal      = $('#sliderForm'),
                    $sliderForm  = $('.sliderForm'),
                    action      = "",
                    sliderID     = 0;

                $('#addForm').bind('click', function(e) {
                    e.preventDefault();

                    action = "addToSlider";

                    $modal.modal('show');
                });

                $('.btnEdit').bind('click', function(e) {
                    e.preventDefault();

                    action = "updateSlider";

                    sliderID = $(this).attr('data-sliderID');

                    $modal.modal('show');
                });

                $modal.on('show.bs.modal', function() {
                    $('.sliderForm input[type="text"], .sliderForm input[type="hidden"], .sliderForm input[type="file"]').val("");

                    if(action == "updateSlider") {
                        $sliderForm.find('.editMode').removeClass('hidden');

                        $.post(baseURL, {action: 'getSliderInfo', sliderID: sliderID}, function (result) {
                            var resultHtml = $.parseJSON(result),
                                sliderImg = "";

                            if(resultHtml['name'] == "") {
                                sliderImg = "<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar_img_placeholder.png";
                            } else {
                                sliderImg = "<?php echo DOMAIN_URL; ?>assets/images/slider/"+resultHtml['name']+"."+resultHtml['type'];
                            }

                            $sliderForm.find('textarea[name="desc"]').html(resultHtml['description']);
                            $sliderForm.find('.editMode img').attr({
                                src: sliderImg,
                                alt: resultHtml['name']
                            });
                            $sliderForm.find('input[name="sliderID"]').val(sliderID);

                            $modal.find('.modal-title').text('Edit Item');
                            $modal.find('.modal-footer input[name="action"]').val(action);
                        });
                    } else {
                        $sliderForm.find('.editMode').addClass('hidden');

                        $modal.find('.modal-title').text('Add To List');
                        $modal.find('.modal-footer input[name="action"]').val(action);
                    }
                });

                $('.btnDelete').bind('click', function(e) {
                    e.preventDefault();

                    var sliderID = $(this).attr('data-sliderID'),
                        parent  = $(this).parents('tr[data-sliderID="'+sliderID+'"]');

                    var agree = confirm("Do you want to delete this item?");

                    if(agree) {
                        $.post(baseURL, {action: 'deleteSlider', sliderID: sliderID}, function(result) {
                            if(result == "1") {
                                parent.remove();

                                iziToast.error({
                                    icon: 'fa fa-close',
                                    message: 'Item was removed successfully',
                                    position: 'topCenter',
                                    transitionIn: 'bounceInDown',
                                    transitionOut: 'fadeOutUp',
                                    timeout: 5000,
                                    //target: '.content',
                                    pauseOnHover: true,
                                    onOpen: function () {
                                        $body.find('.overlay').remove();
                                        $body.find('.container-fluid').append('<div class="overlay"></div>');
                                        $body.addClass('fixed');
                                    },
                                    onClose: function () {
                                        $body.find('.overlay').remove();
                                        $body.removeClass('fixed');
                                    }
                                });
                            }
                        });
                    }
                });

                <?php
                if(isset($message) && !empty($message['text'])) {
                ?>
                iziToast.<?php echo $message['type']; ?>({
                    icon: 'fa fa-<?php echo ($message['type'] == 'success' ? 'check' : 'close'); ?>',
                    message: '<?php echo $message['text']; ?>',
                    position: 'topCenter',
                    transitionIn: 'bounceInDown',
                    transitionOut: 'fadeOutUp',
                    timeout: 5000,
                    //target: '.content',
                    pauseOnHover: true,
                    onOpen: function () {
                        $body.find('.overlay').remove();
                        $body.find('.container-fluid').append('<div class="overlay"></div>');
                        $body.addClass('fixed');
                    },
                    onClose: function () {
                        $body.find('.overlay').remove();
                        $body.removeClass('fixed');
                    }
                });
                <?php
                }
                ?>
            });
        </script>
    </body>
</html>