<?php

#echo "Bienvenido";

#var_dump($_GET['controller']);
require_once "model/alumnos.php";
require_once "model/database.php";

if (!isset($_GET['c'])){ # Si no se encuentra un controlador por parametro que seria C 
    require_once "controller/inicio.controlador.php"; # se carga el controlador principal
    $controlador = new InicioControlador(); 
    call_user_func(array($controlador,"Inicio")); #Se llama tambien a todas las funciones del controlador Inicio
}
else{
    $controlador = $_GET['c'];
    require_once "controller/$controlador.controlador.php";
    $controlador = ucfirst($controlador) . "Controlador"; 
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ? $_GET['a'] : 'Inicio';
    call_user_func(array($controlador,$accion));
}
