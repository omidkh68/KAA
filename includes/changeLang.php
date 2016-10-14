<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/8/16
 * Time: 9:26 PM
 */
if (isset($_POST['changeLang'])) {

    $lang = (isset($_POST['changeLang']) ? $_POST['changeLang'] : "en");

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
        "CERTIFICATE" => CERTIFICATE
    ];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
die();