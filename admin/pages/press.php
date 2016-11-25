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

$pressSql = <<<SQL
  SELECT * FROM `pressRelease`
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

include_once LOCAL_PATH . 'templates/pressRelease.php';