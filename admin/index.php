<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 15:46
 */

include_once 'config.php';
include_once '../includes/db/connection.php';

if(!isset($_SESSION['username']) || $_SESSION['username'] == "") {
    header('location: '.DOMAIN_URL_admin.'login.php');
}

switch ($_POST['action']) {
    case 'changeCopyright':
        $lang = (isset($_POST['changeLang']) ? $_POST['changeLang'] : "en");
        $text = (isset($_POST['copyright']) ? $_POST['copyright'] : "");

        $lang = mysqli_real_escape_string($db, $lang);
        $text = mysqli_real_escape_string($db, $text);

        $result = $db->query("UPDATE copyright SET text = '".$text."' WHERE lang = '".$lang."'");

        if($result) {
            header('location: '.DOMAIN_URL_admin.'index.php');
        }

        break;

    default :
        $copyrightSql = "
          SELECT * FROM `copyright`
        ";

        if($copyrightResult = $db->query($copyrightSql)){
            $copyrights = array();

            while($row = $copyrightResult->fetch_assoc()){
                $copyrights[$row['lang']] = $row['text'];
            }
        }

        $defaultLangSql = "
          SELECT `lang` FROM `config`
        ";

        $resultLang = $db->query($defaultLangSql);

        $defaultLang = $resultLang->fetch_object()->lang;

        break;
}

include_once 'templates/index.php';