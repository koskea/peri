<?php
       class User {
           var $name = ""; 
            function login() {
                echo "logged in";
            }
            function logout() {
                echo "logged out";
            }
        }
        
        class SuperUser extends User {
            function readlog() {
                echo "reading log";
            }
        }

