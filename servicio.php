<?php
include('header.php');
?>
<main>
    <!-- Formulario de Contacto -->
    <div class="contenedor-formulario">
    <form class="formulario" id="formContacto" action="<?php echo URL;?>/enviar-mail.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name = "nombre" id="nombre">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="telefono">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" rows="3" cols="40" name="mensaje" id="mensaje"></textarea>
        </div>
        <div class="form-group">
            <button type="button" class="form-control" id="btnForm" onclick="validarDatosForm();">ENVIAR</button>
        </div>
    </form>
</div>
</main>
<?php
include('footer.php');
?>