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

$optimarinSql = <<<SQL
  SELECT `brief_desc` FROM `optimarin`
  WHERE `lang` = '$lang'
SQL;

if($optimarinResult = $db->query($optimarinSql)){
    $briefOpt = "";

    while($row = $optimarinResult->fetch_assoc()){
        $briefOpt = $row['brief_desc'];
    }
}

$omgSql = <<<SQL
  SELECT `brief_desc` FROM `omg`
  WHERE `lang` = '$lang'
SQL;

if($omgResult = $db->query($omgSql)){
    $briefOmg = "";

    while($row = $omgResult->fetch_assoc()){
        $briefOmg = $row['brief_desc'];
    }
}

$aboutSql = <<<SQL
  SELECT `text` FROM `about`
  WHERE `lang` = '$lang'
SQL;

if($aboutResult = $db->query($aboutSql)){
    $about = "";

    while($row = $aboutResult->fetch_assoc()){
        $about = $row['text'];
    }
}

include_once LOCAL_PATH . 'templates/about_us.php';