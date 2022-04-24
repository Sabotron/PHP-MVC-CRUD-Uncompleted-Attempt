<?php

require_once("../Modelo/MensajeModelo.php");
$objMessage = new MensajeModelo();


if (isset($_POST['addMssg'])) 
{   
    session_start();
    $uid = $_SESSION['user']['id'];
    $mssg = $_POST['mssg'];
    $objMessage->addMessage($uid, $mssg);
    Header("Location: ../Vista/MensajeVista.php");
}


function getUserMensajes()
{
    $uid = $_SESSION['user']['id'];
    $objMessage = new MensajeModelo();
    $result = $objMessage->getUserMessages($uid);
    return  $result;
}

function getMensajes()
{
    $objMessage = new MensajeModelo();
    $result = $objMessage->getMessages();
    return  $result;
}
    

function userSession() // Verifica que un "usuario" sea el que accede a otra página.
{
    session_start();
    $user = $_SESSION['user'];
    if ($user['type'] != 1) {
        header('Location: ../Vista/LoginVista.php?error=forced_logout'); // Termina la sesión en caso de mala intención.
    }
}
//
