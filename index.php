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
include_once("model/index.php");
include_once("model/optimarin.php");
include_once("model/omg.php");
include_once("model/slider.php");

$result = index::find(1)->fields;

$briefResult1 = optimarin::getBy_lang($lang)->getList();
$briefOpt = $briefResult1['export']['list'][0]['brief_desc'];

$briefResult2 = omg::getBy_lang($lang)->getList();
$briefOmg = $briefResult2['export']['list'][0]['brief_desc'];

$sliderTmp = new slider();
$slider = $sliderTmp->getByFilter();

include_once 'templates/index.php';