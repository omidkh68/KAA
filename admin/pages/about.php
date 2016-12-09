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

if(isset($_POST['action']) && !empty($_POST['action'])) {

    switch ($_POST['action']) {
        case 'getAbout':
            $lang = (isset($_POST['lang']) ? $_POST['lang'] : "en");

            $lang = mysqli_real_escape_string($db, $lang);

            $aboutSql = "
              SELECT `text` FROM `about`
              WHERE `lang` = '".$lang."'
            ";

            $result = $db->query($aboutSql);

            $aboutText = $result->fetch_object()->text;

            echo $aboutText;
            die();

            break;

        case 'setAbout':

            $lang = (isset($_POST['lang']) ? $_POST['lang'] : "en");
            $text = (isset($_POST['text']) ? $_POST['text'] : "");

            $lang = mysqli_real_escape_string($db, $lang);
            $text = mysqli_real_escape_string($db, $text);

            $result = $db->query("UPDATE `about` SET `text` = '".$text."' WHERE `lang` = '".$lang."'");

            echo $result;
            die();

            break;

        default :
            break;
    }

} else {
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
}
