<?php

       class User {
           var $name = ""; 
            function login() {
                echo "logged in now";
            }
            function logout() {
                echo "logged out now";
            }
        }
        
        class SuperUser extends User {
            function readlog() {
                echo "reading log";
            }
        }

