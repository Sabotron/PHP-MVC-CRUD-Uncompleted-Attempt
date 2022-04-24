<?php
require_once("Conexion.php");
class Login extends Conexion
    {
    function checkUser(string $name, string $pswd) //Verifica la existencia del usuario que intenta "loguearse"
    {
        $sql = "SELECT * FROM user WHERE name = ? AND pswd = ?"; // Compara el email y el password del usuario.
        $result= $this->connect()->prepare($sql);
        $result->execute([$name, $pswd]);
        $user = $result->fetch(PDO::FETCH_ASSOC);
        if ($user) 
        {
            session_start();
            $_SESSION['user'] = $user;
            if ($_SESSION['user']['type'] == 1) { // Filtro para asignar sesiones, usuario cliente = 1, administradores = 2.
                header('Location: ../Vista/MensajeVista.php');
            } elseif ($_SESSION['user']['type'] == 2) {
                header('Location:../Vista/AdminVista.php');
            }
        } else {
            header('Location: ../Vista/LoginVista.php');
            session_start();
            session_unset();
            session_destroy();
        }
        if (!$user) {
            header('Location: ../Vista/LoginVista.php');
        }
    }
    }//End of class Loginmodel

?>