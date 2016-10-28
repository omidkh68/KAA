<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 15:46
 */

include_once("config.php");
include_once("../common/db.inc.php");
include_once("../common/func.inc.php");
include_once("../common/db.inc.class.php");
include_once("../common/looeic.php");
include_once("../model/about.php");

$about = new about();
$obj = $about->getByFilter();
//print_r_debug($obj);

include_once 'templates/index.php';