<?php
/**
 * Created by PhpStorm.
 * User: omidkh68
 * Date: 2016November/11/AD
 * Time: 12:20
 */
include_once '../config.php';
include_once '../../includes/db/connection.php';

$lang = (isset($_POST['changeLang']) ? $_POST['changeLang'] : "en");

$result = $db->query("UPDATE config SET lang = '".$lang."'");

$_SESSION['lang'] = $lang;

header("Location:" . DOMAIN_URL.'admin');