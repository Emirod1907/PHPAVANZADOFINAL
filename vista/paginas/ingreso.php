<h1>Ingreso</h1>
<div>
    <form action=""method="POST">
        <div>
            <label for="email"> Correo Electronico </label>
            <input type="text" id="email" name="ingresoEmail">
            <label for="pwd"> Contraseña </label>
            <input type="password" id="pwd" name="ingresoPassword">

        </div>
    <?php

    $ingreso= new ControladorFormularios();
    $ingreso =  $ingreso->ctrIngreso();
?>
    <button type="submit">Ingresar</button>
    </form>
</div>
