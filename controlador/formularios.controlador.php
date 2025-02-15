<?php

class ControladorFormularios{


static public function ctrRegistro(){
    if(isset($_POST["registroNombre"])){
        $tabla="registro";
        $datos=array(
            "Nombre"=>$_POST["registroNombre"],
            "Email"=>$_POST["registroEmail"],
            "contraseña"=>$_POST["registroPassword"]
        );
        $respuesta= ModeloFormularios::mdlRegistro($tabla,$datos);
        return $respuesta;
    }
}
}