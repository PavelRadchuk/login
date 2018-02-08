<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Created by PhpStorm.
 * User: BBTL
 * Date: 2/8/18
 * Time: 10:20 AM
 */

    /**
     * The user class represents a user
     *
     * making a user and logging in
     * @author Pavel vashchuk <pvashchuk@mail.greenriver.edu> and Pavel Radchuck <pradchuk@mail.greenriver.edu>
     * @copyright 2018
     *
     */
    class user{
        private $_username;
        private $_password;
        private $_loggedIn;

        //defualt constructor
        function __construct()
        {
            $this->_username = "";
            $this->_password = "";
            $this->_loggedIn = false;
        }

        /**
         * Function to get the username that is set
         * @return string username
         */
        function getUsername()
        {
            return $this->_username;
        }

        /**
         * Function to set the username
         * @return string username
         */
        function setUsername()
        {
            return $this->_username;
        }

        /**
         * Function to set the password
         * @param $String password
         */
        function setPassword($String)
        {
            $num = strlen ($String);
            if($num <= 6){
                $this->_password = $String;
            }else{
                echo "<p>to short</p>";
            }

        }

        /**
         * Function to login
         * @param $username
         * @param $pass
         */
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

        /**
         * Function to logout, setting everything to default
         */
        function logout() {
            $this->_username = "";
            $this->_password = "";
            $this->_loggedIn = false;
        }
    }