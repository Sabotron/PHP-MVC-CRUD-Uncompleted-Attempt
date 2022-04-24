<?php
require_once("../Modelo/LoginModelo.php");

            if (isset($_POST['Login'])) {
            $objLogin = new Login();
            $name = $_POST['name'];
            $pswd = $_POST['pswd'];
            $objLogin->checkUser($name, $pswd);
            }
            

