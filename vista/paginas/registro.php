<h1>Registro</h1>
<div>
    <form action=""method="POST">
        <div>
            <label for="nombre"> Nombre </label>
            <input type="text" id="nombre" name="registroNombre">
        </div>
        <div>
            <label for="email"> Email </label>
            <input type="text" id="email" name="registroEmail">
        </div>
        <div>
            <label for="pwd"> Contraseña </label>
            <input type="password" id="pwd" name="registroPassword">
        </div>
    <input type="submit" value="enviar" class="enviar">
    <?php $registro = ControladorFormularios::ctrRegistro(); ?>
    </form>
</div>