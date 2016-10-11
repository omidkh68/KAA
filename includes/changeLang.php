<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/8/16
 * Time: 9:26 PM
 */

if (isset($_POST['changeLang'])) {

    $lang = (isset($_POST['changeLang']) ? $_POST['changeLang'] : "en");

    include_once("../lang/" . $lang . ".php");
    include_once("db/connection.php");

    $db->query('UPDATE config SET lang = "' . $lang . '"');

    $arr = [
        "HOME" => HOME,
        "ABOUT" => ABOUT,
        "PRINCIPAL_COMPANY" => PRINCIPAL_COMPANY,
        "PRESS_RELEASE" => PRESS_RELEASE,
        "CONTACT" => CONTACT,
        "COPY" => COPY,
        "SEARCH" => SEARCH,
    ];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
die();