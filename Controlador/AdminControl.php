<?php

require_once("../Modelo/UserModelo.php");
$objUser = new UserModelo();

if (isset($_POST['UpdtUser'])) {
$id = $_GET['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pswd = $_POST['pswd'];
$objUser->updateUser($id, $name, $lastname, $email, $pswd);
Header("Location: ../Vista/AdminVista.php");
}

if (isset($_POST['addUser'])) 
{
    $type = $_POST['type'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $objUser->addUser($type, $name, $lastname, $email, $pswd);
    Header("Location: ../Vista/LoginVista.php");
}
    

function getUser()
{
$objUser = new UserModelo();
$id = $_GET['id'];
$result = $objUser->getUser($id);
return  $result;
}


function getUsers()
{
    $objUser = new UserModelo();
    $result = $objUser->getUsers();
    return  $result;
}
    

function adminSession() // Verifica que un "administrador" sea el que accede a otra página.
{
    session_start();
    $user = $_SESSION['user'];
    if ($user['type'] != 2) {
        header('Location: ../Vista/LoginVista.php?error=forced_logout'); // Termina la sesión en caso de mala intención.
    }
}
//
