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
include_once LOCAL_PATH . "model/slider.php";
include_once LOCAL_PATH . "model/pressRelease.php";

$sliderTmp = new slider();
$slider = $sliderTmp->getByFilter();

$pressTmp = new pressRelease();
$result = $pressTmp->getByFilter();

include_once LOCAL_PATH . 'templates/press_release.php';