<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 16:08
 */

session_start();
ob_start();

error_reporting(1);
error_reporting(E_ALL ^ E_STRICT ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE);
ini_set("display_errors", 1);

define("DB_HOST", "localhost");
define("DB_USER", "kavoshabzar");
define("DB_PASSWORD", "HFNZyXZZdK9EXzuS");
define("DB_DATABASE", "kavoshabzar");

define("LOCAL_PATH", dirname(__FILE__) . "/");

include_once LOCAL_PATH.'../lang/en.php';

define("DIR", "");
define("PROTOCOL", "http");
define("DOMAIN_URL", PROTOCOL . "://" . $_SERVER["HTTP_HOST"] . "/" . DIR);
define("DOMAIN_URL_admin", PROTOCOL . "://" . $_SERVER["HTTP_HOST"] . "/" . "admin/");

define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'] . "/" . DIR);

function debug($array) {
    echo "<pre>";
    print_r($array);
}

$message = "";

if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
?>