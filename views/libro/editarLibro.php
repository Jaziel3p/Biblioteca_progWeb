<?php
use Model\Libro;
$libro = Libro::where('id_libro', $_GET['id_libro']);
?>

<main class="panel__container">

    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="form__section">


        <div class="form__container form__libro">
            <h2>Editar Libro</h2>
            <form class="form" action="/libro/editar" method="POST">

                <input style="display: none;" type="text" name="id_libro", value="<?php echo $libro->id_libro?>">

                <div class="input">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $libro->nombre?>" >
                </div>


                <div class="input">
                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio" value="<?php echo $libro->precio?>">
                </div>

                <div class="input">
                    <label for="cantidad_disponible">Cantidad Disponible</label>
                    <input type="number" id="cantidad_disponible" name="cantidad_disponible" value="<?php echo $libro->cantidad_disponible?>">
                </div>

                <div class="input button">
                    <input type="submit" value="editar">
                </div>


            </form>
        </div>
    </section>

</main>