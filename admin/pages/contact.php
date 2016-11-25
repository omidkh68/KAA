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

$contactSql = <<<SQL
  SELECT * FROM `contact`
SQL;

if($contactResult = $db->query($contactSql)){
    $contactUs = array();

    while($row = $contactResult->fetch_assoc()){
        $contactUs[$row['Contact_id']]['name'] = $row['name'];
        $contactUs[$row['Contact_id']]['email'] = $row['email'];
        $contactUs[$row['Contact_id']]['subject'] = $row['subject'];
        $contactUs[$row['Contact_id']]['message'] = $row['message'];
    }
}

include_once LOCAL_PATH . 'templates/contact.php';