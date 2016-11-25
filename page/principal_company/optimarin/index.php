<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/2016 AD
 * Time: 21:46
 */

include_once "../../../config.php";

$sliderSql = <<<SQL
  SELECT * FROM `slider`
SQL;

if($sliderResult = $db->query($sliderSql)){
    $slider = array();

    while($row = $sliderResult->fetch_assoc()){
        $slider[$row['Slider_id']]['name'] = $row['name'];
        $slider[$row['Slider_id']]['description'] = $row['description'];
        $slider[$row['Slider_id']]['type'] = $row['type'];
    }
}

$optSql = <<<SQL
  SELECT `text` FROM `optimarin`
  WHERE `lang` = '$lang'
SQL;

if($optResult = $db->query($optSql)){
    $optimarin = "";

    while($row = $optResult->fetch_assoc()){
        $optimarin = $row['text'];
    }
}

include_once LOCAL_PATH . 'templates/principal_company/optimarin/index.php';