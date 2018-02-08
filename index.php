<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 2/8/18
 * Time: 11:01 AM
 */

include "user.php";
echo"<h1>Test</h1>";


$user1 = new user();
$user1->login("username", "password");
$user1->logout();
