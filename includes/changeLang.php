<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/8/16
 * Time: 9:26 PM
 */

if (isset($_POST['changeLang'])) {

    $lang = (isset($_POST['changeLang']) ? $_POST['changeLang'] : "en");

    define("DB_HOST", "localhost");
    define("DB_USER", "kavoshabzar");
    define("DB_PASSWORD", "HFNZyXZZdK9EXzuS");
    define("DB_DATABASE", "kavoshabzar");

    include_once($_SERVER["DOCUMENT_ROOT"] . "/lang/" . $lang . ".php");
    include_once($_SERVER["DOCUMENT_ROOT"] . "/includes/db/connection.php");

    $db->query('UPDATE config SET lang = "' . $lang . '"');

    $arr = [
        "HOME" => HOME,
        "ABOUT" => ABOUT,
        "PRINCIPAL_COMPANY" => PRINCIPAL_COMPANY,
        "PRESS_RELEASE" => PRESS_RELEASE,
        "CONTACT" => CONTACT,
        "COPY" => COPY,
        "SEARCH" => SEARCH,
        "NAME" => NAME,
        "EMAIL" => EMAIL,
        "SUBJECT" => SUBJECT,
        "YOUR_MESSAGE" => YOUR_MESSAGE,
        "CAPTCHA_CODE" => CAPTCHA_CODE,
        "SEND" => SEND,
        "PHONE" => PHONE,
        "FAX" => FAX,
        "POSTAL_CODE" => POSTAL_CODE,
        "ADDRESS" => ADDRESS,
        "PHYSICAL_ADDRESS" => PHYSICAL_ADDRESS,
        "PRODUCTS" => PRODUCTS,
        "REFERENCES" => REFERENCES,
        "REGULATION" => REGULATION,
        "GALLERY" => GALLERY,
        "VIDEO" => VIDEO
    ];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
die();