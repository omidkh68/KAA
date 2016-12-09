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
                    <?php echo CONTACT; ?>
                </h1>

                <!-- separator -->
                <div class="row xsmall-space"></div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?php
                        if(isset($contactUs) && count($contactUs)) {
                        ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Row</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cnt = 1;
                            foreach ($contactUs as $k => $v) {
                            ?>
                            <tr data-messageID="<?php echo $k; ?>">
                                <td><?php echo $cnt++; ?></td>
                                <td><?php echo $v['name']; ?></td>
                                <td><?php echo $v['email']; ?></td>
                                <td><?php echo $v['subject']; ?></td>
                                <td><?php echo $v['message']; ?></td>
                                <td class="text-center">
                                    <a class="btnDelete btn btn-danger btn-xs" data-messageID="<?php echo $k; ?>"><i class="fa fa-trash"></i></a>
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

        <script>
            $(function() {
                var $body       = $('body'),
                    baseURL     = '<?php echo DOMAIN_URL_admin.'pages/contact.php'; ?>',
                    messageID   = 0;

                $('.btnDelete').bind('click', function(e) {
                    e.preventDefault();

                    var messageID = $(this).attr('data-messageID'),
                        parent  = $(this).parents('tr[data-messageID="'+messageID+'"]');

                    var agree = confirm("Do you want to delete this item?");

                    if(agree) {
                        $.post(baseURL, {action: 'deleteMessage', messageID: messageID}, function(result) {
                            if(result == "1") {
                                parent.remove();

                                iziToast.error({
                                    icon: 'fa fa-close',
                                    message: 'Item was removed successfully',
                                    position: 'topCenter',
                                    transitionIn: 'bounceInDown',
                                    transitionOut: 'fadeOutUp',
                                    timeout: 5000,
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