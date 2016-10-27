<?php
/**
 * Created by PhpStorm.
 * User: omidkh68
 * Date: 2016October/24/AD
 * Time: 19:49
 */

error_reporting(1);
error_reporting(E_ALL ^ E_STRICT ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE);
ini_set("display_errors", 1);

include_once("config.php");
include_once("common/db.inc.php");
include_once("common/func.inc.php");
include_once("common/db.inc.class.php");
include_once("common/looeic.php");
include_once("model/about.php");

$about = new about();
$obj = $about->getByFilter();
//print_r_debug($obj);

include_once 'templates/index.php';