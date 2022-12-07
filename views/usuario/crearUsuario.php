<main class="panel__container">
    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="form__section">

        
        <div class="form__container form__libro">
            <h2>Crear Usuario</h2>
            <form class="form" action="/usuario/crear" method="POST">

                <div class="input">
                    <label for="nombre_usuario">Nombre de usuario</label>
                    <input type="text" id="nombre_usuario" name="nombre_usuario">
                </div>

                <div class="input">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                </div>

                <div class="input">
                    <label for="apellido_paterno">apellido paterno</label>
                    <input type="text" id="apellido_paterno" name="apellido_paterno">
                </div>


                <div class="input">
                    <label for="apellido_materno">apellido materno</label>
                    <input type="text" id="apellido_materno" name="apellido_materno">
                </div>


                <div class="input">
                    <label for="correo">correo</label>
                    <input type="email" id="correo" name="correo">
                </div>

                <div class="input">
                    <label for="contrasenia">contraseña</label>
                    <input type="password" id="contrasenia" name="contrasenia">
                </div>
                

                <div class="input button">
                    <input type="submit" value="crear">
                </div>

                
            </form>
        </div>
    </section>

</main>