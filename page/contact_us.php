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

include_once LOCAL_PATH . 'templates/contact_us.php';