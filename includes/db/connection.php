<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/8/16
 * Time: 9:36 PM
 */

$db = new mysqli('localhost', 'kavoshabzar', 'HFNZyXZZdK9EXzuS', 'kavoshabzar');

$db->set_charset("utf8");

if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}