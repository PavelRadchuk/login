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
include "admin.php";
echo"<h1>Test</h1>";


$user1 = new user();
$user1->login("username", "password");
$user1->logout();

$admin = new admin();
$admin->setAccessLevel("5");
$admin->getAccessLevel();
$admin->editUser("testUser");
