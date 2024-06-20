<?php

class alumnos{

    private $pdo;

    private $id_alumno;
    private $nombre_alum;
    private $apellido_alum;
    private $email_alum;

    public function __construct(){
        $this->pdo = database::conectar();
    }

    public function getIdalumno(){
        return $this->id_alumno;
    }
    
    public function getNombre(){
        return $this->nombre_alum;
    }
    
    public function getApellido(){
        return $this->apellido_alum;
    }
    
    public function getEmail(){
        return $this->email_alum;
    }

    public function setIdalumno($id_alumno){
        $this->id_alumno = $id_alumno;
    }
    
    public function setNombre($nombre_alum){
        $this->nombre_alum = $nombre_alum;
    }
    
    public function setApellido($apellido_alum){
        $this->apellido_alum = $apellido_alum;
    }
    
    public function setEmail($email_alum){
        $this->email_alum = $email_alum;
    }

    public function obtenerIdsAlumnos(){
    
    try{
        $query = "SELECT id_alumno as IDS FROM alumnos";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
        
    } 
    
    public function obtenerInfo(){
        try{
            $query = "SELECT * FROM alumnos";
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Alumnos $a){

        try{
            $query = "INSERT INTO Alumnos(nombre_alum,apellido_alum,email_alum) VALUES (?,?,?);";
            $statement = $this->pdo->prepare($query);
            $statement->execute(array($a->getNombre(),$a->getApellido(), $a->getEmail() ));

        }catch(Exception $e){

            die($e->getMessage());
        }

    }

    public function obtener($id){
        try{
            $query = "SELECT * FROM alumnos WHERE id_alumno = ?";
            $statement = $this->pdo->prepare($query);
            $statement->execute(array($id));
            $r = $statement->fetch(PDO::FETCH_OBJ);
            $a = new Alumnos();
            $a->setIdalumno($r->id_alumno);
            $a->setNombre($r->nombre_alum);
            $a->setApellido($r->apellido_alum);
            $a->setEmail($r->email_alum);

            return $a;

        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Alumnos $a){

        try{
            $query = "UPDATE alumnos SET 
                nombre_alum=?,
                apellido_alum=?,
                email_alum=?
                WHERE id_alumno=?;";
            $statement = $this->pdo->prepare($query);
            $statement->execute(array($a->getNombre(),$a->getApellido(), $a->getEmail(), $a->getIdalumno()));

        }catch(Exception $e){

            die($e->getMessage());
        }

    }

    public function Eliminar(Alumnos $a){

        try{
            $query = "DELETE FROM alumnos WHERE id_alumno=?;";
            $statement = $this->pdo->prepare($query);
            $statement->execute(array($a->getIdalumno()));

        }catch(Exception $e){

            die($e->getMessage());
        }

    }

}