<?php

require_once 'model/database.php';
require_once 'model/alumnos.php';

class AlumnosControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Alumnos();
    }

    public function Inicio(){
        require_once "view/encabezado.php";
        require_once "view/Alumnos/index.php";
        require_once "view/pie.php";

    }

    public function FormCrear(){
        $titulo = "Registrar";
        $a = new Alumnos();
        if(isset($_GET['id'])){
            $a=$this->modelo->obtener($_GET['id']);
            $titulo = "Modificar";

        }
        
        require_once "view/encabezado.php";
        require_once "view/Alumnos/form.php";
        require_once "view/pie.php";

    }

    public function Guardar(){
        $a= new Alumnos();
        $a->setIdalumno(intval($_POST['ID']));
        $a->setNombre($_POST['nombre_alum']);
        $a->setApellido($_POST['apellido_alum']);
        $a->setEmail($_POST['email_alum']);

        $a->getIdalumno() > 0 ? 
        
        $this->modelo->Actualizar($a):
        $this->modelo->Insertar($a);
        
        header("location:?c=alumnos");
    }


    public function Borrar(){
        $id = $_GET["id"];
        $a = $this->modelo->obtener($id); // Obtener el objeto Alumnos correspondiente al ID
        $this->modelo->Eliminar($a);
        header("location:?c=alumnos");
    }

    

}

