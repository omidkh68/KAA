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
        case 'deleteMessage':

            $messageID = (isset($_POST['messageID']) ? $_POST['messageID'] : 0);

            $messageID = mysqli_real_escape_string($db, $messageID);

            $contactSql = "
              SELECT * FROM `contact`
              WHERE `Contact_id` = " . $messageID . "
            ";

            $result = $db->query($contactSql);

            if($result->num_rows) {

                $deleteMessageSql = "
                  DELETE FROM `contact`
                  WHERE `Contact_id` = " . $messageID . "
                ";

                $result = $db->query($deleteMessageSql);

                if($result) {
                    $finalResult = 1;
                } else {
                    $finalResult = 0;
                }

                $db->close();

                echo $finalResult;

                die();
            }

            break;
        default:
            break;
    }
} else {
    $contactSql = "
      SELECT * FROM `contact`
      ORDER BY `Contact_id` DESC
    ";

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
}

?>