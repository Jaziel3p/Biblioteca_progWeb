<main class="panel__container">

    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="form__section">


        <div class="form__container form__libro">
            <h2>reservar Libro</h2>
            <form class="form" action="/libro/reservar" method="POST">

                <input 
                    style="display: none;" 
                    type="text" 
                    name="id_libro", 
                    value="<?php echo $libro->id_libro?>"
                >

                <div class="input">
                    <label for="nombre">Nombre</label>
                    <input 
                        readonly
                        type="text" 
                        id="nombre" 
                        name="nombre" 
                        value="<?php echo $libro->nombre?>" 
                    >
                </div>


                <div class="input">
                    <label for="precio">Precio</label>
                    <input 
                        readonly
                        type="number" 
                        id="precio" 
                        name="precio" 
                        value="<?php echo $libro->precio?>"
                    >
                </div>

                <div class="input">
                    <label for="cantidad_resevar">Cantidad a reservar</label>
                    <input 
                        type="number" 
                        id="cantidad_disponible" 
                        name="cantidad_resevar" 
                        placeholder="Cantidad máxima: <?php echo $libro->cantidad_disponible?>"
                        min="0" 
                        max="<?php echo $libro->cantidad_disponible?>"
                        required
                    >
                </div>

                <div class="input button">
                    <input type="submit" value="reservar">
                </div>


            </form>
        </div>
    </section>
</main>