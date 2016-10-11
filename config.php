<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/7/16
 * Time: 1:42 PM
 */

include_once("includes/db/connection.php");

$sql = <<<SQL
    SELECT *
    FROM `config`
SQL;

$lang = "en";

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