<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/16
 * Time: 12:42 PM
 */
include_once "../config.php";

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

$pressSql = <<<SQL
  SELECT * FROM `pressRelease`
  ORDER BY `PressRelease_id` DESC
SQL;

if($pressResult = $db->query($pressSql)){
    $pressRelease = array();

    while($row = $pressResult->fetch_assoc()){
        $pressRelease[$row['PressRelease_id']]['subject'] = $row['subject'];
        $pressRelease[$row['PressRelease_id']]['description'] = $row['description'];
        $pressRelease[$row['PressRelease_id']]['image_name'] = $row['image_name'];
        $pressRelease[$row['PressRelease_id']]['image_desc'] = $row['image_desc'];
        $pressRelease[$row['PressRelease_id']]['image_type'] = $row['image_type'];
        $pressRelease[$row['PressRelease_id']]['create_date'] = $row['create_date'];
    }
}

include_once LOCAL_PATH . 'templates/press_release.php';