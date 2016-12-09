<?php
/**
 * Created by PhpStorm.
 * User: omidkh68
 * Date: 2016November/11/AD
 * Time: 13:40
 */
ob_start();
include_once '../config.php';

if(!isset($_SESSION['username']) || $_SESSION['username'] == "") {
    header('location: '.DOMAIN_URL_admin.'login.php');
}

include_once '../../includes/db/connection.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {

    switch ($_POST['action']) {
        case 'addToPress':

            $title = (isset($_POST['title']) ? $_POST['title'] : "");
            $desc = (isset($_POST['desc']) ? $_POST['desc'] : "");

            $title = mysqli_real_escape_string($db, $title);
            $desc = mysqli_real_escape_string($db, $desc);

            $imageTmpName = "";
            $imageFileType = "";

            $fileErrorMsg = "";

            $target_dir = ROOT_PATH . "assets/images/news/";

            if(!empty($_FILES["pressFile"]["name"])) {
                $tmpFileName = basename($_FILES["pressFile"]["name"]);

                $tmpFileName = explode(' ', $tmpFileName);
                $tmpFileName = implode('_', $tmpFileName);

                $target_file = $target_dir . $tmpFileName;
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    $fileErrorMsg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    $_SESSION['message']['text'] = $fileErrorMsg;
                    $_SESSION['message']['type'] = "warning";

                    header('location: '.DOMAIN_URL_admin.'pages/press.php');
                    die();
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    $fileErrorMsg = "Sorry, file already exists.";
                    $uploadOk = 0;
                    $_SESSION['message']['text'] = $fileErrorMsg;
                    $_SESSION['message']['type'] = "warning";

                    header('location: '.DOMAIN_URL_admin.'pages/press.php');
                    die();
                }

                if ($uploadOk == 0 && $fileErrorMsg != "") {
                    $fileErrorMsg = "Sorry, your file was not uploaded.";

                    $_SESSION['message']['text'] = $fileErrorMsg;
                    $_SESSION['message']['type'] = "warning";

                    header('location: '.DOMAIN_URL_admin.'pages/press.php');
                    die();
                } else {

                    $imageTmpName = basename($target_file, ".".$imageFileType);

                    if (move_uploaded_file($_FILES["pressFile"]["tmp_name"], $target_file)) {
                    } else {
                        $_SESSION['message']['text'] = "Sorry, there was an error uploading your file.";
                        $_SESSION['message']['type'] = "warning";

                        header('location: '.DOMAIN_URL_admin.'pages/press.php');
                        die();
                    }
                }
            }

            $sql = "
                INSERT INTO `pressRelease` (`subject`, `description`, `image_name`, `image_desc`, `image_type`)
                VALUES ('".$title."', '".$desc."', '".$imageTmpName."', '".$title."', '".$imageFileType."')
            ";

            if ($db->query($sql) === TRUE) {
                $db->close();

                $_SESSION['message']['text'] = "Item was successfully added";
                $_SESSION['message']['type'] = "success";

                header('location: '.DOMAIN_URL_admin.'pages/press.php');
            } else {
                $db->close();

                $_SESSION['message']['text'] = "Something wrong call admin of website";
                $_SESSION['message']['type'] = "warning";

                header('location: '.DOMAIN_URL_admin.'pages/press.php');
            }
            break;

        case 'getPressInfo':
            $pressID = (isset($_POST['pressID']) ? $_POST['pressID'] : 0);

            $pressID = mysqli_real_escape_string($db, $pressID);

            $pressSql = "
              SELECT * FROM `pressRelease`
              WHERE `PressRelease_id` = " . $pressID . "
            ";

            $result = $db->query($pressSql);
            $pressInfo = $result->fetch_assoc();

            $resultTotal['subject']     = $pressInfo['subject'];
            $resultTotal['description'] = $pressInfo['description'];
            $resultTotal['image_name']  = $pressInfo['image_name'];
            $resultTotal['image_desc']  = $pressInfo['image_desc'];
            $resultTotal['image_type']  = $pressInfo['image_type'];
            $resultTotal['create_date'] = $pressInfo['create_date'];

            echo json_encode($resultTotal,JSON_UNESCAPED_UNICODE);

            die();

            break;

        case 'updatePress' :
            $pressID = (isset($_POST['pressID']) ? $_POST['pressID'] : 0);

            $pressID = mysqli_real_escape_string($db, $pressID);

            $pressSql = "
              SELECT * FROM `pressRelease`
              WHERE `PressRelease_id` = " . $pressID . "
            ";

            $result = $db->query($pressSql);
            $pressInfo = $result->fetch_assoc();

            if($result->num_rows == 1) {
                $title = (isset($_POST['title']) ? $_POST['title'] : "");
                $desc = (isset($_POST['desc']) ? $_POST['desc'] : "");

                $title = mysqli_real_escape_string($db, $title);
                $desc = mysqli_real_escape_string($db, $desc);

                $imageTmpName = "";
                $imageFileType = "";

                $fileErrorMsg = "";

                $target_dir = ROOT_PATH . "assets/images/news/";

                if(!empty($_FILES["pressFile"]["name"])) {
                    $tmpFileName = basename($_FILES["pressFile"]["name"]);

                    $tmpFileName = explode(' ', $tmpFileName);
                    $tmpFileName = implode('_', $tmpFileName);

                    $target_file = $target_dir . $tmpFileName;
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                        $fileErrorMsg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                        $_SESSION['message']['text'] = $fileErrorMsg;
                        $_SESSION['message']['type'] = "warning";

                        header('location: '.DOMAIN_URL_admin.'pages/press.php');
                        die();
                    }

                    if ($uploadOk == 0 && $fileErrorMsg != "") {
                        $fileErrorMsg = "Sorry, your file was not uploaded.";

                        $_SESSION['message']['text'] = $fileErrorMsg;
                        $_SESSION['message']['type'] = "warning";

                        header('location: '.DOMAIN_URL_admin.'pages/press.php');
                        die();
                    } else {

                        $imageTmpName = basename($target_file, ".".$imageFileType);

                        if (move_uploaded_file($_FILES["pressFile"]["tmp_name"], $target_file)) {
                        } else {
                            $_SESSION['message']['text'] = "Sorry, there was an error uploading your file.";
                            $_SESSION['message']['type'] = "warning";

                            header('location: '.DOMAIN_URL_admin.'pages/press.php');
                            die();
                        }
                    }
                }

                $pressUpdateSql = "
                    UPDATE `pressRelease`
                    SET `subject` = '".$title."',
                        `description` = '".$desc."',
                        `image_name` = '".$imageTmpName."',
                        `image_desc` = '".$title."',
                        `image_type` = '".$imageFileType."'
                    WHERE `PressRelease_id` = " . $pressID . "
                ";

                $result = $db->query($pressUpdateSql);

                if($result) {
                    $_SESSION['message']['text'] = "Press updated successfully";
                    $_SESSION['message']['type'] = "success";

                    header('location: '.DOMAIN_URL_admin.'pages/press.php');
                    die();
                }
            }
            break;

        case 'deletePress':
            $pressID = (isset($_POST['pressID']) ? $_POST['pressID'] : 0);

            $pressID = mysqli_real_escape_string($db, $pressID);

            $pressSql = "
              SELECT * FROM `pressRelease`
              WHERE `PressRelease_id` = " . $pressID . "
            ";

            $result = $db->query($pressSql);
            $pressInfo = $result->fetch_assoc();

            if($result->num_rows) {
                $resultTotal['subject']     = $pressInfo['subject'];
                $resultTotal['description'] = $pressInfo['description'];
                $resultTotal['image_name']  = $pressInfo['image_name'];
                $resultTotal['image_desc']  = $pressInfo['image_desc'];
                $resultTotal['image_type']  = $pressInfo['image_type'];
                $resultTotal['create_date'] = $pressInfo['create_date'];

                $deletePressSql = "
                  DELETE FROM `pressRelease`
                  WHERE `PressRelease_id` = " . $pressID . "
                ";

                $result = $db->query($deletePressSql);

                if($result) {
                    $finalResult = 1;
                } else {
                    $finalResult = 0;
                }

                if($resultTotal['image_name'] != "" && $resultTotal['image_type'] != "") {
                    $fileName = ROOT_PATH."assets/images/news/".$resultTotal['image_name'].".".$resultTotal['image_type'];

                    if(unlink($fileName)) {
                        $finalResult = 1;
                    } else {
                        $finalResult = 0;
                    }
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
    $pressSql = "
      SELECT * FROM `pressRelease`
      ORDER BY `PressRelease_id` DESC
    ";

    if($pressResult = $db->query($pressSql)){
        $pressRelease = array();

        while($row = $pressResult->fetch_assoc()){
            $pressRelease[$row['PressRelease_id']]['subject']       = $row['subject'];
            $pressRelease[$row['PressRelease_id']]['description']   = $row['description'];
            $pressRelease[$row['PressRelease_id']]['image_name']    = $row['image_name'];
            $pressRelease[$row['PressRelease_id']]['image_desc']    = $row['image_desc'];
            $pressRelease[$row['PressRelease_id']]['image_type']    = $row['image_type'];
            $pressRelease[$row['PressRelease_id']]['create_date']   = $row['create_date'];
        }
    }

    include_once LOCAL_PATH . 'templates/pressRelease.php';
}
?>