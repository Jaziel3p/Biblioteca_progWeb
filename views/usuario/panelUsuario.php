<main class="panel__container">

    <?php include __DIR__ . '/../templates/aside.php' ?>

    <section class="panel__libros">
        <div class="libros__container">

            <h2>usuarios regsitrados</h2>

            <table>
                <caption>
                    <a href="/usuario/crear">
                        Registrar usuario
                    </a>
                </caption>
                <thead>
                    <tr>
                        <th>Nombre de usuario</th>
                        <th>nombre</th>
                        <th>apellido paterno</th>
                        <th>apellido materno</th>
                        <th colspan="3">correo</th>
                </thead>

                <tbody>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <tr>
                            <td>
                                <?php echo $usuario->nombre_usuario; ?>
                            </td>

                            <td>
                                <?php echo $usuario->nombre; ?>
                            </td>

                            <td>
                                <?php echo $usuario->apellido_paterno; ?>
                            </td>

                            <td>
                                <?php echo $usuario->apellido_materno; ?>
                            </td>

                            <td>
                                <?php echo $usuario->correo; ?>
                            </td>

                            <td>
                                <div class="table__action">

                                    <a href="usuario/editar?id_usuario=<?php echo $usuario->id_usuario ?>">
                                        <picture>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="#52cc6f" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z" class="color000 svgShape" />
                                            </svg>
                                        </picture>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="table__action">
                                    <a href="usuario/eliminar?id_usuario=<?php echo $usuario->id_usuario ?>">
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