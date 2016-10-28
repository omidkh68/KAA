<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/16
 * Time: 12:42 PM
 */
include_once "../config.php";
include_once LOCAL_PATH . "common/db.inc.php";
include_once LOCAL_PATH . "common/func.inc.php";
include_once LOCAL_PATH . "common/db.inc.class.php";
include_once LOCAL_PATH . "common/looeic.php";
include_once LOCAL_PATH . "model/about.php";
include_once LOCAL_PATH . "model/optimarin.php";
include_once LOCAL_PATH . "model/omg.php";
include_once LOCAL_PATH . "model/slider.php";

$sliderTmp = new slider();
$slider = $sliderTmp->getByFilter();

$result = about::find(1)->fields;

$briefOpt = optimarin::find(1)->fields;

$briefOmg = omg::find(1)->fields;

include_once LOCAL_PATH . 'templates/about_us.php';