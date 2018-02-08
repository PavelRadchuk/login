<?php
/**
 * Created by PhpStorm.
 * User: BBTL
 * Date: 2/8/18
 * Time: 11:12 AM
 */
class admin extends user
{
    private $_username;
    private $_password;
    private $_accessLevel;


    function __construct()
    {
        $this->_username = "";
        $this->_password = "";
        $this->_accessLevel = "";
    }
    function getAccessLevel(){
        echo "<p>Access level: $this->_accessLevel</p>";
    }
    function setAccessLevel($level){
        $this->_accessLevel = $level;
    }
    function editUser($user){
        echo "<p>Editing $user</p>";
    }
}