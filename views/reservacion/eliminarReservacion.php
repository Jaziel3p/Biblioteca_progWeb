<main class="panel__container">

    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="form__section">


        <div class="form__container form__reservacion ">
            <h2>Eliminar Reservación</h2>

            <form class="form" action="/reservacion/eliminar" method="POST">

                <section>

                    <div>
                        <input style="display: none;" type="text" name="id_reservacion" value="<?php echo $reservacion->id_reservacion ?>">

                        <div class="input">
                            <label style="font-weight: bold;" for="libro">Libro</label>
                            <input readonly type="text" id="libro" value="<?php echo $reservacion->getNombreLibro() ?>">
                        </div>


                        <div class="input">
                            <label for="precio">Precio Unitario</label>
                            <input readonly type="text" id="precio" value="$<?php echo $reservacion->getPrecioLibro() ?>">
                        </div>

                        <div class="input">
                            <label for="cantidad_reservada">Cantidad Reservada</label>
                            <input readonly type="number" id="cantidad_reservada" value="<?php echo $reservacion->cantidad ?>">
                        </div>

                        <div class="input">
                            <label for="total">Precio Total</label>
                            <input readonly type="total" id="total" value="$<?php echo $reservacion->getTotalPrecio() ?>">
                        </div>
                    </div>

                    <div>
                        <input style="display: none;" type="text" name="id_reservacion" value="<?php echo $reservacion->id_reservacion ?>">

                        <div class="input">
                            <label style="font-weight: bold;" for="usuario">Usuario</label>
                            <input readonly type="text" id="usuario" value="<?php echo $reservacion->getNombreDeUsuario() ?>">
                        </div>


                        <div class="input">
                            <label for="nombre_completo">Nombre completo</label>
                            <input readonly type="text" id="nombre_completo" value="<?php echo $reservacion->getNombreCompletoUsuario() ?>">
                        </div>

                        <div class="input">
                            <label for="correo">Correo</label>
                            <input readonly type="email" id="correo" value="<?php echo $reservacion->getCoreoUsuario() ?>">
                        </div>
                    </div>
                </section>

                <div class="input button-eliminar">
                    <input type="submit" value="eliminar">
                </div>


            </form>
        </div>
    </section>

</main>