<?php

class ControladorFormularios{


static public function ctrRegistro(){
    if(isset($_POST["registroNombre"])){
        $tabla="registro";
        $datos=array(
            "Nombre"=>$_POST["registroNombre"],
            "Email"=>$_POST["registroEmail"],
            "Password"=>$_POST["registroPassword"]
        );
        $respuesta= ModeloFormularios::mdlRegistro($tabla,$datos);
        return $respuesta;
    }
}
/*============================Seleccionar Registro======================================*/
static public function ctrSeleccionarRegistros($item,$valor){
    $tabla= "registro";

    $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);
    return $respuesta;
}

//Imgreso
public function ctrIngreso(){
    if(isset($_POST["ingresoEmail"])){
        $tabla ="registro";
        $item = "email";
        $valor = "ingresoEmail";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);
        if(is_array($respuesta)){
            if($respuesta["email"]== $_POST["ingresoEmail"] && $respuesta["password"]== $_POST["ingresoPassword"]){
                $_SESSION["validarIngreso"] == "ok";
                echo '<script>  if (window.history.replaceState){
                        window.history.replaceState( null, null, window.location.href );
                }
                        window.location= "index.php?=ruta=inicio";
                    </script>';
            }
            else{
                echo '<script>  if (window.history.replaceState){
                    window.history.replaceState( null, null, window.location.href );
            }
                </script>';
                echo "<div> Error al ingresar al sistema, por favor verifique credenciales!</div>";
            }
        }
    }
}
}