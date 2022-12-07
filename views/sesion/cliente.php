<main class="panel__container">

    <?php include __DIR__ . '/../templates/aside.php'?>

    <section class="panel__libros">
        <div class="libros__container">

            <h2>reservar libro</h2>
            <span style="margin: 10px;">Elige el libro y la cantidad que desees reservar!</span>

            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th colspan="2">Disponibles</th>
                </thead>

                <tbody>

                    <?php foreach ($libros as $libro) : ?>
                        <tr>
                            <td>
                                <?php echo $libro->nombre; ?>
                            </td>
                            <td>
                                <?php echo '$' . $libro->precio; ?>
                            </td>
                            <td>
                                <?php echo $libro->cantidad_disponible; ?>
                            </td>

                            <td>
                                <div class="table__action">
                                    
                                    <a href="libro/reservar?id_libro=<?php echo $libro->id_libro?>">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="#52cc6f" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" class="color000 svgShape" />
                                            </svg>
                                        </picture>
                                        <p>reservar</p>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>

        </div>

    </section>
</main>