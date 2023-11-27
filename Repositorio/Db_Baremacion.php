<?php
require_once "Db.php";

class Db_Baremacion {

    public static function FindByID($dni) {
        $conexion = Db::AbreConexion();
        $query = "SELECT * FROM Baremacion WHERE dni = :dni";
        $statement = $conexion->prepare($query);
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR); 
        $statement->execute();
    
        $baremos = [];
    
        while ($tupla = $statement->fetch(PDO::FETCH_OBJ)) {
            $baremo = new Baremacion();
            $baremo->setDni($tupla->dni);
            $baremo->setIdConvocatoria($tupla->id_convocatoria);
            $baremo->setIdItem($tupla->id_item);
            $baremo->setNota($tupla->nota);
            $baremo->setUrl($tupla->url);
    
            $baremos[] = $baremo;
        }
    
        return $baremos;
    }
    

    public static function FindAll() {
        $conexion = Db::AbreConexion();
        $query = "SELECT * FROM Baremacion";
        $statement = $conexion->prepare($query);
        $statement->execute();
    
        $baremos = [];
    
        while ($tupla = $statement->fetch(PDO::FETCH_OBJ)) {
            $baremo = new Baremacion();
            $baremo->setDni($tupla->dni);
            $baremo->setIdConvocatoria($tupla->id_convocatoria);
            $baremo->setIdItem($tupla->id_item);
            $baremo->setNota($tupla->nota);
            $baremo->setUrl($tupla->url);
    
            $baremos[] = $baremo;
        }
    
        return $baremos;
    }

    public static function DeleteById($dni) {
        $conexion = Db::AbreConexion();
        $query = "DELETE FROM Baremacion WHERE dni = :dni";
        $statement = $conexion->prepare($query);
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
        $statement->execute();
    }
    public static function UpdateById($dni, $idConvocatoria, $idItem, $objetoActualizado) {
        $conexion = Db::AbreConexion();
        $query = "UPDATE Baremacion SET dni = :dni, id_convocatoria = :idConvocatoria, id_item = :idItem, nota = :nota, url = :url WHERE dni = :dni AND id_convocatoria = :idConvocatoria AND id_item = :idItem";
        $statement = $conexion->prepare($query);
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
        $statement->bindParam(':idConvocatoria', $idConvocatoria, PDO::PARAM_INT);
        $statement->bindParam(':idItem', $idItem, PDO::PARAM_INT);
        $statement->bindParam(':nota', $objetoActualizado->getNota(), PDO::PARAM_INT);
        $statement->bindParam(':url', $objetoActualizado->getUrl(), PDO::PARAM_STR);
        $statement->execute();
    }

    public static function Insert($objeto) {
        $conexion = Db::AbreConexion();
        $query = "INSERT INTO Baremacion (dni, id_convocatoria, id_item, nota, url) VALUES (:dni, :idConvocatoria, :idItem, :nota, :url)";
        $statement = $conexion->prepare($query);
        $statement->bindParam(':dni', $objeto->getDni(), PDO::PARAM_STR);
        $statement->bindParam(':idConvocatoria', $objeto->getIdConvocatoria(), PDO::PARAM_INT);
        $statement->bindParam(':idItem', $objeto->getIdItem(), PDO::PARAM_INT);
        $statement->bindParam(':nota', $objeto->getNota(), PDO::PARAM_INT);
        $statement->bindParam(':url', $objeto->getUrl(), PDO::PARAM_STR);
        $statement->execute();
    }
    
}