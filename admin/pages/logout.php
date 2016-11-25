<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/28/2016 AD
 * Time: 15:46
 */

include_once '../config.php';

unset($_SESSION['username']);

header('location: '.DOMAIN_URL_admin.'login.php');