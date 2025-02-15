<?php

require_once "conexion.php";

class ModeloFormularios{
    static public function mdlRegistro($tabla,$datos){
        try{
            var_dump($datos);
            $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla (Nombre,Email,contraseña) values(:Nombre,:Email,:contraseña)");
            $stmt->bindParam(":Nombre",$datos["Nombre"],PDO::PARAM_STR);
            $stmt->bindParam(":Email",$datos["Email"],PDO::PARAM_STR);
            $stmt->bindParam(":contraseña",$datos["contraseña"],PDO::PARAM_STR);

            if($stmt->execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt->closeCursor();
            $stmt =null;
        }
    catch(PDOException $e){
        echo "Error";
        print_r($stmt->errorInfo());
    }
    }
}

?>