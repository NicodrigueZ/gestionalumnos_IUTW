<?php

require_once "model/alumnos.php";

class inicioControlador{

    private $modelo;

    public function __construct(){
        $this->modelo = new Alumnos(); 
    }
    #Aqui iniciamos la conexion con la base de datos y conectamos con las vistas necesarias 
    public function Inicio(){

        $idsAlumnos = $this->modelo->obtenerIdsAlumnos();
        $infoAlumnos = $this->modelo->obtenerInfo();

        require_once "view/encabezado.php";
        require_once "view/pie.php";
        require_once "view/inicio/principal.php";

    }
}