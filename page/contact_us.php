<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/16
 * Time: 12:42 PM
 */
ob_start();

include_once "../config.php";

if(isset($_POST['action']) && !empty($_POST['action'])) {
    switch ($_POST['action']) {
        case 'sendContactUs':

            $sysCaptcha = strtolower($_SESSION['captcha']['code']);

            $name = (isset($_POST['name']) ? $_POST['name'] : "");
            $email = (isset($_POST['email']) ? $_POST['email'] : "");
            $subject = (isset($_POST['subject']) ? $_POST['subject'] : "");
            $message = (isset($_POST['message']) ? $_POST['message'] : "");
            $captcha = (isset($_POST['captcha_code']) ? strtolower($_POST['captcha_code']) : "");

            $name = mysqli_real_escape_string($db, $name);
            $email = mysqli_real_escape_string($db, $email);
            $subject = mysqli_real_escape_string($db, $subject);
            $message = mysqli_real_escape_string($db, $message);
            $captcha = mysqli_real_escape_string($db, $captcha);

            if(strlen($name) > 1 && strlen($email) > 5 && strlen($subject) > 1) {
                if($captcha === $sysCaptcha) {

                    $sql = "
                        INSERT INTO `contact` (`name`, `email`, `subject`, `message`)
                        VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')
                    ";

                    if ($db->query($sql) === TRUE) {
                        $db->close();

                        $_SESSION['message']['text'] = LANG == 'fa' ? "پیغام شما ارسال شد، با تشکر" : "Your message was sent";
                        $_SESSION['message']['type'] = "success";

                        header('location: '.DOMAIN_URL.'page/contact_us.php');
                        die();
                    } else {
                        $_SESSION['message']['text'] = LANG == 'fa' ? "اطلاعات وارد شده صحیح نمی باشد، لطفا دوباره سعی نمایید." : "Your information was not correct, please try again.";
                        $_SESSION['message']['type'] = "error";

                        header('location: '.DOMAIN_URL.'page/contact_us.php');
                    }


                } else {
                    $_SESSION['message']['text'] = LANG == 'fa' ? "کد امنیتی اشتباه است لطفا دوباره سعی نمایید." : "Captcha was incorrect, please try again.";
                    $_SESSION['message']['type'] = "warning";

                    header('location: '.DOMAIN_URL.'page/contact_us.php');
                    die();
                }
            } else {
                $_SESSION['message']['text'] = LANG == 'fa' ? "اطلاعات وارد شده صحیح نمی باشد، لطفا دوباره سعی نمایید." : "Your information was not correct, please try again.";
                $_SESSION['message']['type'] = "error";

                header('location: '.DOMAIN_URL.'page/contact_us.php');
                die();
            }

            break;

        default:
            break;
    }
} else {

    $sliderSql = "
      SELECT * FROM `slider`
    ";

    if($sliderResult = $db->query($sliderSql)){
        $slider = array();

        while($row = $sliderResult->fetch_assoc()){
            $slider[$row['Slider_id']]['name'] = $row['name'];
            $slider[$row['Slider_id']]['description'] = $row['description'];
            $slider[$row['Slider_id']]['type'] = $row['type'];
        }
    }

    include_once LOCAL_PATH . 'templates/contact_us.php';
}

?>