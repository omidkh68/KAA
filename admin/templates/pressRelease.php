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
    <div>

        <?php include_once LOCAL_PATH . 'includes/nav.php'; ?>

        <div class="container-fluid">

            <div class="jumbotron">
                <h1>
                    <?php echo PRESS_RELEASE; ?>

                    <button id="addForm" class="btn btn-primary pull-right" role="button">Add To List</button>
                </h1>

                <!-- separator -->
                <div class="row xsmall-space"></div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?php
                        if(isset($pressRelease) && count($pressRelease)) {
                        ?>
                        <table class="table table-striped bg-white">
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
                            <tr data-pressID="<?php echo $k; ?>">
                                <td><?php echo $cnt++; ?></td>
                                <td><?php echo $v['subject']; ?></td>
                                <td><?php echo $v['description']; ?></td>
                                <td style="width: 200px;">
                                    <?php
                                    $fileNameTmp = ROOT_PATH."assets/images/news/".$v['image_name'].'.'.$v['image_type'];
                                    if(is_file($fileNameTmp)) {
                                        $fileName = DOMAIN_URL."assets/images/news/".$v['image_name'].'.'.$v['image_type'];
                                    } else {
                                        $fileName = DOMAIN_URL."assets/images/kavoshabzar_img_placeholder.png";
                                    }
                                    ?>
                                    <img src="<?php echo $fileName; ?>" alt="<?php echo ($v['image_desc'] != "" ? $v['image_desc'] : ""); ?>">
                                </td>
                                <td class="text-center">
                                    <a class="btnEdit btn btn-success btn-xs" data-pressID="<?php echo $k; ?>"><i class="fa fa-pencil"></i></a>
                                    <a class="btnDelete btn btn-danger btn-xs" data-pressID="<?php echo $k; ?>"><i class="fa fa-trash"></i></a>
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
        <div id="pressForm" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form class="pressForm" action="<?php echo DOMAIN_URL_admin; ?>pages/press.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" id="title" placeholder="title" required autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                <div id="summernote"></div>
                                <input type="hidden" name="desc" id="desc">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <label for="file">Press File</label>
                                        <input type="file" class="form-control" name="pressFile" id="pressFile">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 editMode hidden">
                                        <img  src="" alt="" style="max-width: 100px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="pressID" value="">
                            <input type="hidden" name="action" value="addToPress">
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
                    baseURL     = '<?php echo DOMAIN_URL_admin.'pages/press.php'; ?>',
                    $modal      = $('#pressForm'),
                    $pressForm  = $('.pressForm'),
                    action      = "",
                    pressID     = 0,
                    $summernote = $('#summernote');

                $('#addForm').bind('click', function(e) {
                    e.preventDefault();

                    action = "addToPress";

                    $modal.modal('show');
                });

                $('.btnEdit').bind('click', function(e) {
                    e.preventDefault();

                    action = "updatePress";

                    pressID = $(this).attr('data-pressID');

                    $modal.modal('show');
                });

                $modal.on('show.bs.modal', function() {
                    $('.pressForm input[type="text"], .pressForm input[type="hidden"], .pressForm input[type="file"]').val("");

                    $summernote.html("");

                    if(action == "updatePress") {
                        $pressForm.find('.editMode').removeClass('hidden');

                        $.post(baseURL, {action: 'getPressInfo', pressID: pressID}, function (result) {
                            var resultHtml = $.parseJSON(result),
                                pressImg = "";

                            if(resultHtml['image_name'] == "") {
                                pressImg = "<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar_img_placeholder.png";
                            } else {
                                pressImg = "<?php echo DOMAIN_URL; ?>assets/images/news/"+resultHtml['image_name']+"."+resultHtml['image_type'];
                            }

                            $pressForm.find('input[name="title"]').val(resultHtml['subject']);
                            $pressForm.find('.editMode img').attr({
                                src: pressImg,
                                alt: resultHtml['image_desc']
                            });
                            $pressForm.find('input[name="pressID"]').val(pressID);

                            $summernote.html(resultHtml["description"]);
                            $summernote.summernote({
                                disableDragAndDrop: true,
                                height: 200,                 // set editor height
                                minHeight: 100,              // set minimum height of editor
                                maxHeight: 300,              // set maximum height of editor
                                focus: true,
                                toolbar: [
                                    ['style', ['bold', 'italic', 'underline', 'clear']],
                                    ['fontsize', ['fontsize']],
                                    ['insert',['ltr','rtl']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['height', ['height']],
                                    ['misc', ['fullscreen', 'codeview', 'redo', 'undo']]
                                ]
                            });

                            $modal.find('.modal-title').text('Edit Item');
                            $modal.find('.modal-footer input[name="action"]').val(action);
                        });
                    } else {
                        $pressForm.find('.editMode').addClass('hidden');

                        $summernote.summernote({
                            disableDragAndDrop: true,
                            height: 200,                 // set editor height
                            minHeight: 100,              // set minimum height of editor
                            maxHeight: 300,              // set maximum height of editor
                            focus: true,
                            toolbar: [
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['fontsize', ['fontsize']],
                                ['insert',['ltr','rtl']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']],
                                ['misc', ['fullscreen', 'codeview', 'redo', 'undo']]
                            ]
                        });

                        $modal.find('.modal-title').text('Add To List');
                        $modal.find('.modal-footer input[name="action"]').val(action);
                    }
                });

                $modal.on('hidden.bs.modal', function() {
                    $summernote.summernote('destroy');
                });

                $('.btnDelete').bind('click', function(e) {
                    e.preventDefault();

                    var pressID = $(this).attr('data-pressID'),
                        parent  = $(this).parents('tr[data-pressID="'+pressID+'"]');

                    var agree = confirm("Do you want to delete this item?");

                    if(agree) {
                        $.post(baseURL, {action: 'deletePress', pressID: pressID}, function(result) {
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

                $('#saveChanges').bind('click', function(e) {
                    e.preventDefault();

                    $('#desc').val($summernote.summernote('code'));

                    $(this).parents('form').submit();
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