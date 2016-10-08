<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/8/16
 * Time: 9:36 PM
 */

$db = new mysqli('localhost', '<db username>', '<db password>', '<db name>');

$db->set_charset("utf8");

if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}