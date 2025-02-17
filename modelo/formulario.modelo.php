<?php

require_once "conexion.php";

class ModeloFormularios{
    static public function mdlRegistro($tabla,$datos){
        try{
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (Nombre,Email,Password) VALUES (:Nombre,:Email, :Password)");
            $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":Email",$datos["Email"],PDO::PARAM_STR);
            $stmt->bindParam(":Password",$datos["Password"],PDO::PARAM_STR);
            if ($stmt->execute()) {
                echo "Inserciones de Nombre , Email y contraseña exitosas";
            } else {
                echo "Error en la inserción de nombre: ";
                print_r($stmt->errorInfo());
            }
            $stmt->closeCursor();
            $stmt =null;
        }
    catch(PDOException $e){
        echo "Error";
        print_r($stmt->errorInfo());
    }
    }

/*=============================Seleccionar Registro============================================ */
static public function mdlSeleccionarRegistro($tabla,$item, $valor){
    if($item == null && $valor == null){
        $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(datetimeregistro,'%d/%m/%Y') as fecha from $tabla ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    else{
        $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(datetimeregistro,'%d/%m/%Y') as fecha from $tabla WHERE $item= :$item ORDER BY id DESC");
        $stmt->bindParam(":". $item, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

}
}


?>