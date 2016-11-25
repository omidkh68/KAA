<?php
/**
 * Created by PhpStorm.
 * User: omidkh68
 * Date: 2016October/24/AD
 * Time: 19:49
 */

include_once("config.php");

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

include_once 'templates/index.php';