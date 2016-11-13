<?php
/**
 * Created by PhpStorm.
 * User: omidkh68
 * Date: 2016November/11/AD
 * Time: 13:40
 */

include_once '../config.php';
include_once '../../common/db.inc.php';
include_once '../../common/func.inc.php';
include_once '../../common/db.inc.class.php';
include_once '../../common/looeic.php';
include_once '../../model/slider.php';

$sliderTmp = new slider();
$slider = $sliderTmp->getByFilter();

include_once LOCAL_PATH . 'templates/slider.php';