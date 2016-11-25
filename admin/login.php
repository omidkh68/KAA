<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 15:46
 */

include_once 'config.php';
include_once '../includes/db/connection.php';

if(isset($_POST['submit'])) {

    $username = (isset($_POST['username']) && strlen($_POST['username']) > 2 ? $_POST['username'] : 'error');
    $password = (isset($_POST['password']) && strlen($_POST['password']) > 2 ? $_POST['password'] : 'error');

    if($username == 'error' || $password == 'error') {
        header('location: '.DOMAIN_URL_admin.'login.php');
    }

    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

$login = "
  SELECT `username` FROM `users`
    WHERE `username` = '".$username."' AND `password` = '".sha1($password)."' LIMIT 1
";

    if($loginResult = $db->query($login)){
        $result = array();

        if($loginResult->num_rows > 0) {
            $result = $loginResult->fetch_object();

            $_SESSION['username'] = $result->username;

            header('location: '.DOMAIN_URL_admin.'index.php');

        } else {
            header('location: '.DOMAIN_URL_admin.'login.php');
        }

    } else {
        header('location: '.DOMAIN_URL_admin.'login.php');
    }

}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Kavosh Abzar Aria - Admin Dashboard</title>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=1">
        <meta name="description" content="">
        <meta name="author" content="Kavosh Abzar Aria - Admin Dashboard">

        <!-- fav icon -->
        <link rel="shortcut icon" href="<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-favicon.png">

        <!-- bootstrap link -->
        <link rel="stylesheet" href="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/css/bootstrap.min.css">

        <!-- main css link -->
        <link rel="stylesheet" href="<?php echo DOMAIN_URL_admin; ?>assets/css/style.css">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
        <![endif]-->
    </head><!-- /Page Head -->

    <body>
        <div class="login">
            <h2 class="login-header">Log in</h2>

            <form action="login.php" class="login-container" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" autofocus placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
            </form>
        </div>

        <script src="<?php echo DOMAIN_URL; ?>bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo DOMAIN_URL; ?>bower_components/bootstrap-3.3.6/js/bootstrap.min.js"></script>
        <script src="<?php echo DOMAIN_URL; ?>admin/assets/js/script.js"></script>
    </body>
</html>
