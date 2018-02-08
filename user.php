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
        public function getUsername()
        {
            return $this->_username;
        }
        public function setUsername()
        {
            return $this->_username;
        }
        public function setPassword($String)
        {
            $num = strlen ($String);
            if($num <= 6){
                $this->_password = $String;
            }
        }

    }