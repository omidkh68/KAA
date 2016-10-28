<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/8/16
 * Time: 9:36 PM
 */

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$db->set_charset("utf8");

if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}