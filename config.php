<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/7/16
 * Time: 1:42 PM
 */

header('Content-Type: text/html; charset=utf-8');

error_reporting(1);
error_reporting(E_ALL ^ E_STRICT ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE);
ini_set("display_errors", 1);

define("DB_HOST", "localhost");
define("DB_USER", "kavoshabzar");
define("DB_PASSWORD", "HFNZyXZZdK9EXzuS");
define("DB_DATABASE", "kavoshabzar");

include_once("includes/db/connection.php");

$sql = <<<SQL
    SELECT *
    FROM `config`
SQL;

$lang = "en";
$theme = "";

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
} else {
    while($row = $result->fetch_assoc()){
        $lang = $row['lang'];
        $theme = $row['theme'];
    }
}
$db->close();

define("LANG", $lang);
define("DEFAULT_THEME", $theme);

include_once("lang/".LANG.".php");

define("LOCAL_PATH", dirname(__FILE__)."/");

define("DIR", "");
define("PROTOCOL", "http");
define("DOMAIN_URL", PROTOCOL."://".$_SERVER["HTTP_HOST"]."/".DIR);