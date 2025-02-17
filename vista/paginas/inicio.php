
<?php 
session_start();
if(isset($_SESSION["validarIngreso"])){
    echo '<script> windows.location = "index.php?ruta=ingreso"; </script>';
    return;
}
else{
    if(! isset($_SESSION["validarIngreso"]) || $_SESSION["validarIngreso"] != 'ok'){
        echo '<script> windows.location = "index.php?ruta=ingreso"; </script>';
        return;
    }

}
$usuario = ControladorFormularios::ctrSeleccionarRegistros(null, null); 
?>
<table>
    <thead>
        <tr>ID</tr>
        <tr>Nombre</tr>
        <tr>Email</tr>
        <tr>Fecha</tr>
        <tr>Acciones</tr>
    </thead>
    <tbody>
        <?php 
        foreach($usuarios as $key =>$value): ?>
        <tr>
            <td><?php echo ($key +1); ?></td>
            <td><?php echo $value["nombre"]; ?></td>
            <td><?php echo $value["email"]; ?></td>
            <td><?php echo $value["fecha"]; ?></td>
            <td>
                <div>
                    <a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton-editar" >Editar</a>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>

</table>