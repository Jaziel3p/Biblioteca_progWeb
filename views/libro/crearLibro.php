<main class="panel__container">
    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="form__section">

        
        <div class="form__container form__libro">
            <h2>Crear Libro</h2>
            <form class="form" action="/libro/crear" method="POST">

                <div class="input">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                </div>


                <div class="input">
                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio">
                </div>

                <div class="input">
                    <label for="cantidad_disponible">Cantidad Disponible</label>
                    <input type="number" id="cantidad_disponible" name="cantidad_disponible">
                </div>

                <div class="input button">
                    <input type="submit" value="crear">
                </div>

                
            </form>
        </div>
    </section>

</main>