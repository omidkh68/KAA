<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/8/16
 * Time: 9:26 PM
 */

session_start();

if (isset($_POST['changeLang'])) {

    $lang = (isset($_POST['changeLang']) ? $_POST['changeLang'] : "en");

    $_SESSION['lang'] = $lang;
}
die();