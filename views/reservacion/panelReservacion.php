<main class="panel__container">

    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="panel__libros">
        <div class="libros__container">

            <h2>reservaciones regsitrados</h2>

            <table>
                <thead>

                    <tr>
                        <th>libro</th>
                        <th>precio unitario</th>
                        <th>cantidad reservada</th>
                        <th>total</th>
                        <th>usuario</th>
                        <th>nombre completo</th>
                        <th colspan="2">correo</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($reservaciones as $reservacion) : ?>
                        <tr>

                            <td>
                                <?php echo $reservacion->getNombreLibro(); ?>
                            </td>

                            <td>
                                <?php echo '$' . $reservacion->getPrecioLibro(); ?>
                            </td>

                            <td>
                                <?php echo $reservacion->cantidad; ?>
                            </td>

                            <td>
                                <?php echo '$' . $reservacion->getTotalPrecio(); ?>
                            </td>

                            <td>
                                <?php echo $reservacion->getNombreDeUsuario(); ?>
                            </td>

                            <td>
                                <?php echo $reservacion->getNombreCompletoUsuario(); ?>
                            </td>

                            <td>
                                <?php echo $reservacion->getCoreoUsuario(); ?>
                            </td>

                            <td>
                                <div class="table__action">
                                    <a href="reservacion/eliminar?id_reservacion=<?php echo $reservacion->id_reservacion ?>">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="red" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" class="color000 svgShape" />
                                            </svg>
                                        </picture>
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