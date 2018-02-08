<?php
/**
 * Created by PhpStorm.
 * User: BBTL
 * Date: 2/8/18
 * Time: 11:12 AM
 */
class admin
{
    private $_username;
    private $_password;
    private $_initializes;
    private $_accessLevel;


    function __construct()
    {
        $this->_username = "";
        $this->_password = "";
        $this->_accessLevel = "";
        $this->_initializes = "";
    }
    function getAccessLevel(){
        return $this->_accessLevel;
    }
    function setAccessLevel(){
        return $this->_accessLevel;
    }
    function Admin($editUser){

    }
}