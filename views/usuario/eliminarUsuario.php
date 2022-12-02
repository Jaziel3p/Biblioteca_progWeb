<main class="panel__container">
    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="form__section">

        
        <div class="form__container form__libro">
            <h2>eliminar Usuario</h2>
            <form class="form" action="/usuario/eliminar" method="POST">

                <input style="display: none;" type="text" name="id_usuario" value="<?php echo $usuarioFound->id_usuario?>">

                <div class="input">
                    <label for="nombre_usuario">Nombre de usuario</label>
                    <input type="text" id="nombre_usuario" name="nombre_usuario" value="<?php echo $usuarioFound->nombre_usuario?>" >
                </div>

                <div class="input">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $usuarioFound->nombre?>">
                </div>

                <div class="input">
                    <label for="apellido_paterno">apellido paterno</label>
                    <input type="text" id="apellido_paterno" name="apellido_paterno" value="<?php echo $usuarioFound->apellido_paterno?>">
                </div>


                <div class="input">
                    <label for="apellido_materno">apellido materno</label>
                    <input type="text" id="apellido_materno" name="apellido_materno" value="<?php echo $usuarioFound->apellido_materno?>">
                </div>


                <div class="input">
                    <label for="correo">correo</label>
                    <input type="email" id="correo" name="correo" value="<?php echo $usuarioFound->correo?>">
                </div>

                <div class="input button-eliminar">
                    <input type="submit" value="eliminar">
                </div>

            </form>
        </div>
    </section>

</main>