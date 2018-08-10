<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once 'User.php';
            
            $su = new SuperUser();
            $su->name = "lasse";
            $su->login();
            $su->readlog();
            $su->logout();
        ?>
    </body>
</html>
