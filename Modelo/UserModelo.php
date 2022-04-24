<?php

require_once("Conexion.php");
class UserModelo extends Conexion
{
    private $intType;
    private $strName;
    private $strLastname;
    private $strEmail;
    private $strPswd;

    function addUser(int $type, string $name, string $lastname, string $email, string $pswd)
    {
        $sql = "INSERT INTO user(type, name, lastname, email, pswd)  
        VALUES(?,?,?,?,?)";
        $this->intType = $type;
        $this->strName = $name;
        $this->strLastname = $lastname;
        $this->strEmail = $email;
        $this->strPswd = $pswd;
        $result= $this->connect()->prepare($sql);
        $result->execute([$type, $name, $lastname, $email, $pswd]);
        if (!$result) {
            die("Error");
        }
        header("Location: ../Vista/LoginVista.php");
    }

    function getUsers() // Obtiene las fuentes asignadas al ID del usuario.
    {
        $sql= "SELECT * FROM user"; 
        $result= $this->connect()->prepare($sql);
        $result->execute();   
        return $result;
    }


    function getUser(int $id) // Obtiene las fuentes asignadas al ID del usuario.
    {
        $sql= "SELECT * FROM user WHERE id = ?"; 
        $result= $this->connect()->prepare($sql);
        $result->execute([$id]);   
        return $result;
    }

    function updateUser(int $id, string $name, string $lastname,string $email, string $pswd) // Obtiene las fuentes asignadas al ID del usuario.
    {
        $sql= "UPDATE user SET name = ?, lastname = ?, email = ?, pswd = ? WHERE id = ?"; 
        $result= $this->connect()->prepare($sql);
        $result->execute([$name, $lastname, $email, $pswd, $id]);   
        header("Location: ../Vista/AdminVista.php");
    }
}
