<?php
/**
 * Created by PhpStorm.
 * User: omidkh68
 * Date: 2016November/11/AD
 * Time: 13:40
 */

include_once '../config.php';

if(!isset($_SESSION['username']) || $_SESSION['username'] == "") {
    header('location: '.DOMAIN_URL_admin.'login.php');
}

include_once '../../includes/db/connection.php';

$aboutSql = <<<SQL
  SELECT * FROM `about`
SQL;

if($aboutResult = $db->query($aboutSql)){
    $about = array();

    while($row = $aboutResult->fetch_assoc()){
        $about[$row['About_id']]['text'] = $row['text'];
        $about[$row['About_id']]['lang'] = $row['lang'];
    }
}

include_once LOCAL_PATH . 'templates/about.php';