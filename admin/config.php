<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 16:08
 */

session_start();

error_reporting(1);
error_reporting(E_ALL ^ E_STRICT ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE);
ini_set("display_errors", 1);

define("DB_HOST", "localhost");
define("DB_USER", "kavoshabzar");
define("DB_PASSWORD", "HFNZyXZZdK9EXzuS");
define("DB_DATABASE", "kavoshabzar");

include_once '../lang/en.php';

define("LOCAL_PATH", dirname(__FILE__) . "/");

define("DIR", "");
define("PROTOCOL", "http");
define("DOMAIN_URL", PROTOCOL . "://" . $_SERVER["HTTP_HOST"] . "/" . DIR);