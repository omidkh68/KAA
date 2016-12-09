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

                <!-- separator -->
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
                                <td class="<?php echo ($v['lang'] == 'fa' ? 'rtl' : ''); ?>"><?php echo $v['text']; ?></td>
                                <td class="text-center">
                                    <a class="editBtn btn btn-success btn-xs" data-lang="<?php echo $v['lang']; ?>"><i class="fa fa-pencil"></i></a>
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

        <!-- Edit Form -->
        <div id="editAbout" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit About</h4>
                    </div>
                    <div class="modal-body">
                        <div id="summernote"></div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="lang" value="">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="saveChanges" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- footer of panel -->
        <?php include_once LOCAL_PATH . 'includes/footer.php'; ?>

        <!-- scritps of panel -->
        <?php include_once LOCAL_PATH . 'includes/scripts.php'; ?>

        <script>
            $(function() {
                var baseURL = '<?php echo DOMAIN_URL_admin.'pages/about.php'; ?>',
                    $modal      = $('#editAbout'),
                    $summernote = $('#summernote'),
                    lang        = "";

                $('.editBtn').bind('click', function(e) {
                    e.preventDefault();

                    lang = $(this).data('lang');

                    if(lang == 'fa') {
                        $modal.find('.modal-body').removeClass('ltr').addClass('rtl');
                    } else {
                        $modal.find('.modal-body').removeClass('rtl').addClass('ltr');
                    }

                    $modal.modal('show');
                });

                $modal.on('show.bs.modal', function() {
                    $.post(baseURL, {action: 'getAbout', lang: lang}, function(result) {

                        $summernote.html(result);
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
                    });
                });

                $modal.on('hidden.bs.modal', function() {
                    $summernote.summernote('destroy');
                });

                $('#saveChanges').bind('click', function(e) {
                    e.preventDefault();

                    $.post(baseURL, {action: 'setAbout', lang: lang, text: $summernote.summernote('code')}, function(result) {
                        if(result == "1") {
                            window.location.reload();
                        }
                    });
                });
            });
        </script>
    </body>
</html>