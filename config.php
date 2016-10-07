<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/7/16
 * Time: 1:42 PM
 */

define("LANG", "en");

include_once("lang/".LANG.".php");

define("LOCAL_PATH", dirname(__FILE__)."/");

define("DIR", "");
define("PROTOCOL", "http");
define("DOMAIN_URL", PROTOCOL."://".$_SERVER["HTTP_HOST"]."/".DIR);