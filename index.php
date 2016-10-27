<?php
/**
 * Created by PhpStorm.
 * User: omidkh68
 * Date: 2016October/24/AD
 * Time: 19:49
 */

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