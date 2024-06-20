<?php

class database{

    const server = "localhost";
    const user = 'root';
    const password = "";
    const database = "databasephp";
    public static function conectar(){

        try{
           
            $conexion = new PDO("mysql:host=".self::server.";dbname=".self::database.";charset=utf8", self::user, self::password);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
            
        }
        catch(PDOException $e){
            
            return "fallo".$e->getMessage();

        }

    }

}