<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
            echo "<p>Username: $this->_username</p>";
        }
        function setUsername($user)
        {
            $this->_username = $user;
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
        function login($username, $pass) {
            include 'users.php';
            foreach($login as $key => $value) {
                if($username == $key && $pass == $value) {
                    echo "<p>$username is logged in</p>";
                    $this->_loggedIn = true;
                }
                else {
                    echo "<p>Login error</p>";
                    $this->_loggedIn = false;
                }

            }
        }

        function logout() {
            $this->_username = "";
            $this->_password = "";
            $this->_loggedIn = false;
        }
    }