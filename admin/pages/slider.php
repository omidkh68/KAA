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
        case 'addToSlider':
            $desc = (isset($_POST['desc']) ? $_POST['desc'] : "");
            $desc = mysqli_real_escape_string($db, $desc);

            $imageTmpName = "";
            $imageFileType = "";

            $fileErrorMsg = "";

            $target_dir = ROOT_PATH . "assets/images/slider/";

            if(!empty($_FILES["sliderFile"]["name"])) {
                $tmpFileName = basename($_FILES["sliderFile"]["name"]);

                $tmpFileName = explode(' ', $tmpFileName);
                $tmpFileName = implode('_', $tmpFileName);

                $target_file = $target_dir . $tmpFileName;
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    $fileErrorMsg = "Sorry, only JPG, JPEG, PNG files are allowed.";
                    $uploadOk = 0;
                    $_SESSION['message']['text'] = $fileErrorMsg;
                    $_SESSION['message']['type'] = "warning";

                    header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                    die();
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                    $fileErrorMsg = "Sorry, file already exists.";
                    $uploadOk = 0;
                    $_SESSION['message']['text'] = $fileErrorMsg;
                    $_SESSION['message']['type'] = "warning";

                    header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                    die();
                }

                if ($uploadOk == 0 && $fileErrorMsg != "") {
                    $fileErrorMsg = "Sorry, your file was not uploaded.";

                    $_SESSION['message']['text'] = $fileErrorMsg;
                    $_SESSION['message']['type'] = "warning";

                    header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                    die();
                } else {

                    $imageTmpName = basename($target_file, ".".$imageFileType);

                    if (move_uploaded_file($_FILES["sliderFile"]["tmp_name"], $target_file)) {
                    } else {
                        $_SESSION['message']['text'] = "Sorry, there was an error uploading your file.";
                        $_SESSION['message']['type'] = "warning";

                        header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                        die();
                    }
                }
            }

            $sql = "
                INSERT INTO `slider` (`name`, `description`, `type`)
                VALUES ('".$imageTmpName."', '".$desc."', '".$imageFileType."')
            ";

            if ($db->query($sql) === TRUE) {
                $db->close();

                $_SESSION['message']['text'] = "Item was successfully added";
                $_SESSION['message']['type'] = "success";

                header('location: '.DOMAIN_URL_admin.'pages/slider.php');
            } else {
                $db->close();

                $_SESSION['message']['text'] = "Something wrong call admin of website";
                $_SESSION['message']['type'] = "warning";

                header('location: '.DOMAIN_URL_admin.'pages/slider.php');
            }
            break;

        case 'getSliderInfo':
            $sliderID = (isset($_POST['sliderID']) ? $_POST['sliderID'] : 0);

            $sliderID = mysqli_real_escape_string($db, $sliderID);

            $sliderSql = "
              SELECT * FROM `slider`
              WHERE `Slider_id` = " . $sliderID . "
            ";

            $result = $db->query($sliderSql);
            $sliderInfo = $result->fetch_assoc();

            $resultTotal['name']     = $sliderInfo['name'];
            $resultTotal['description'] = $sliderInfo['description'];
            $resultTotal['type']  = $sliderInfo['type'];

            echo json_encode($resultTotal,JSON_UNESCAPED_UNICODE);

            die();

            break;

        case 'updateSlider' :
            $sliderID = (isset($_POST['sliderID']) ? $_POST['sliderID'] : 0);

            $sliderID = mysqli_real_escape_string($db, $sliderID);

            $sliderSql = "
              SELECT * FROM `slider`
              WHERE `Slider_id` = " . $sliderID . "
            ";

            $result = $db->query($sliderSql);
            $sliderInfo = $result->fetch_assoc();

            if($result->num_rows == 1) {
                $name = (isset($_POST['name']) ? $_POST['name'] : "");
                $desc = (isset($_POST['desc']) ? $_POST['desc'] : "");

                $name = mysqli_real_escape_string($db, $name);
                $desc = mysqli_real_escape_string($db, $desc);

                $imageTmpName = "";
                $imageFileType = "";

                $fileErrorMsg = "";

                $target_dir = ROOT_PATH . "assets/images/slider/";

                if(!empty($_FILES["sliderFile"]["name"])) {
                    $tmpFileName = basename($_FILES["sliderFile"]["name"]);

                    $tmpFileName = explode(' ', $tmpFileName);
                    $tmpFileName = implode('_', $tmpFileName);

                    $target_file = $target_dir . $tmpFileName;
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                        $fileErrorMsg = "Sorry, only JPG, JPEG, PNG files are allowed.";
                        $uploadOk = 0;
                        $_SESSION['message']['text'] = $fileErrorMsg;
                        $_SESSION['message']['type'] = "warning";

                        header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                        die();
                    }

                    if ($uploadOk == 0 && $fileErrorMsg != "") {
                        $fileErrorMsg = "Sorry, your file was not uploaded.";

                        $_SESSION['message']['text'] = $fileErrorMsg;
                        $_SESSION['message']['type'] = "warning";

                        header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                        die();
                    } else {

                        $imageTmpName = basename($target_file, ".".$imageFileType);

                        if (move_uploaded_file($_FILES["sliderFile"]["tmp_name"], $target_file)) {
                        } else {
                            $_SESSION['message']['text'] = "Sorry, there was an error uploading your file.";
                            $_SESSION['message']['type'] = "warning";

                            header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                            die();
                        }
                    }
                }

                $sliderUpdateSql = "
                    UPDATE `slider`
                    SET `name` = '".$imageTmpName."',
                        `description` = '".$desc."',
                        `type` = '".$imageFileType."'
                    WHERE `Slider_id` = " . $sliderID . "
                ";

                $result = $db->query($sliderUpdateSql);

                if($result) {
                    $_SESSION['message']['text'] = "Slider updated successfully";
                    $_SESSION['message']['type'] = "success";

                    header('location: '.DOMAIN_URL_admin.'pages/slider.php');
                    die();
                }
            }
            break;

        case 'deleteSlider':
            $sliderID = (isset($_POST['sliderID']) ? $_POST['sliderID'] : 0);

            $sliderID = mysqli_real_escape_string($db, $sliderID);

            $sliderSql = "
              SELECT * FROM `slider`
              WHERE `Slider_id` = " . $sliderID . "
            ";

            $result = $db->query($sliderSql);
            $sliderInfo = $result->fetch_assoc();

            if($result->num_rows) {
                $resultTotal['name']     = $sliderInfo['name'];
                $resultTotal['description'] = $sliderInfo['description'];
                $resultTotal['type']  = $sliderInfo['type'];

                $deleteSliderSql = "
                  DELETE FROM `slider`
                  WHERE `Slider_id` = " . $sliderID . "
                ";

                $result = $db->query($deleteSliderSql);

                if($result) {
                    $finalResult = 1;
                } else {
                    $finalResult = 0;
                }

                if($resultTotal['name'] != "" && $resultTotal['type'] != "") {
                    $fileName = ROOT_PATH."assets/images/slider/".$resultTotal['name'].".".$resultTotal['type'];

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

    $sliderSql = "
      SELECT * FROM `slider`
      ORDER BY `Slider_id` DESC
    ";

    if ($sliderResult = $db->query($sliderSql)) {
        $slider = array();

        while ($row = $sliderResult->fetch_assoc()) {
            $slider[$row['Slider_id']]['name'] = $row['name'];
            $slider[$row['Slider_id']]['description'] = $row['description'];
            $slider[$row['Slider_id']]['type'] = $row['type'];
        }
    }

    include_once LOCAL_PATH . 'templates/slider.php';
}
?>