<?php
/**
 * Created by PhpStorm.
 * User: BBTL
 * Date: 2/8/18
 * Time: 10:20 AM
 */

    class user{
        private $_username;
        private $_password;
        private $_loggedIn;

        function __construct()
        {
            $this->_username = "";
            $this->_password = "";
            $this->_loggedIn = false;
        }

        /**
         * @return string
         */
        function getUsername()
        {
            return $this->_username;
        }
        function setUsername()
        {
            return $this->_username;
        }
        function setPassword($String)
        {
            $num = strlen ($String);
            if($num <= 6){
                $this->_password = $String;
            }else{
                echo "<p>to short</p>";
            }
        }
        function loggedIn($username, $pass){
            include('users.php');
            //if($username != null && $logedIn != null) {
            //    return false;
            //}else{
            //    set= true;
            if(!isset($username)) or $password != $pass
            }
    }