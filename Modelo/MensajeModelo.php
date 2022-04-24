<?php

require_once("Conexion.php");
class MensajeModelo extends Conexion
{
    private $intUid;
    private $strMssg;

    
    function addMessage(int $uid, string $mssg)
    {
        $sql = "INSERT INTO message(uid, mssg)  
        VALUES(?,?)";
        $this->intUid = $uid;
        $this->strMssg = $mssg;
        $result= $this->connect()->prepare($sql);
        $result->execute([$uid, $mssg]);
        if (!$result) {
            die("Error");
            header("Location: ../Vista/MensajeVista.php");
        }
        header("Location: ../Vista/PublicVista.php");
    }


    function getUserMessages($uid) // Obtiene las fuentes asignadas al ID del usuario.
    {
        $sql= "SELECT * FROM message WHERE uid = ?"; 
        $result= $this->connect()->prepare($sql);
        $result->execute([$uid]);   
        return $result;
    }


    function getMessages() // Obtiene las fuentes asignadas al ID del usuario.
    {
        $sql= "SELECT * FROM message"; 
        $result= $this->connect()->prepare($sql);
        $result->execute();   
        return $result;
    }

}
