<?php
require_once ('controlador/plantilla.controlador.php');
require_once ('controlador/formularios.controlador.php');
require_once ('modelo/formulario.modelo.php');

//instanciar objeto

$plantilla = new ControladorPlantilla();

//ejecutar el metodo

$plantilla -> ctrGetPlantilla();

if (file_exists('C:/xampp/htdocs/PHPavanzadoFINAL/vista/plantilla.php')) {
    echo "Archivo encontrado";
} else {
    echo "Archivo NO encontrado";
}
echo realpath('../vista/plantilla.php');


?>

