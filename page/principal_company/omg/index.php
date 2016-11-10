<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/2016 AD
 * Time: 21:46
 */

include_once "../../../config.php";
include_once LOCAL_PATH . "common/db.inc.php";
include_once LOCAL_PATH . "common/func.inc.php";
include_once LOCAL_PATH . "common/db.inc.class.php";
include_once LOCAL_PATH . "common/looeic.php";
include_once LOCAL_PATH . "model/omg.php";
include_once LOCAL_PATH . "model/slider.php";

$sliderTmp = new slider();
$slider = $sliderTmp->getByFilter();

$resultTmp = omg::getBy_lang($lang)->getList();
$result = $resultTmp['export']['list'][0]['text'];

include_once LOCAL_PATH . 'templates/principal_company/omg/index.php';