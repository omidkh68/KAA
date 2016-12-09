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

        $result = $db->query("UPDATE `copyright` SET `text` = '".$text."' WHERE `lang` = '".$lang."'");

        if($result) {
            header('location: '.DOMAIN_URL_admin.'index.php');
        }

        break;

    case 'changeDefaultLang':
        $lang = (isset($_POST['changeLang']) ? $_POST['changeLang'] : "en");

        $result = $db->query("UPDATE `config` SET `lang` = '".$lang."'");

        if($result) {
            $_SESSION['lang'] = $lang;

            header("Location:" . DOMAIN_URL.'admin');
        }

        break;

    case 'changeDefaultTheme':
        $theme = (isset($_POST['changeTheme']) ? $_POST['changeTheme'] : "");

        $result = $db->query("UPDATE `config` SET `theme` = '".$theme."'");

        if($result) {
            header("Location:" . DOMAIN_URL.'admin');
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

        $configSql = "
          SELECT `lang`, `theme` FROM `config`
        ";

        $resultConfig = $db->query($configSql);

        $configs = $resultConfig->fetch_assoc();
        $defaultLang = $configs['lang'];
        $defaultTheme = $configs['theme'];

        break;
}

include_once 'templates/index.php';