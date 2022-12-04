<aside class="panel__aside">
    <div class="icon-admin__container">
        <picture class="admin-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 48 48">
                <g class="color000 svgShape" transform="translate(0 -1004.362)">
                    <circle cx="24" cy="1028.362" r="24" fill="#fd9705" class="color1d67b1 svgShape" />
                    <path fill="#fb8d0b" fill-rule="evenodd" d="M25.932 47.91a24 24 0 0 0 2.148-.26 24 24 0 0 0 2.34-.525 24 24 0 0 0 2.277-.756 24 24 0 0 0 2.19-.98 24 24 0 0 0 2.08-1.194 24 24 0 0 0 1.951-1.394 24 24 0 0 0 1.803-1.584 24 24 0 0 0 1.634-1.756 24 24 0 0 0 1.454-1.91 24 24 0 0 0 1.254-2.045 24 24 0 0 0 1.042-2.16 24 24 0 0 0 .547-1.5l-18.798-18.8-.008-.007a5.53 5.53 0 0 0-.381-.348l-.008-.005a5.506 5.506 0 0 0-.422-.315c-.103-.07-.212-.132-.32-.195-.044-.026-.086-.056-.131-.08a5.421 5.421 0 0 0-.473-.229l-.004-.002c-.162-.069-.33-.13-.5-.183-.1-.032-.207-.055-.31-.08a5.432 5.432 0 0 0-1.317-.168c-3.021 0-5.48 2.469-5.48 5.5 0 .189.01.376.03.56v.002c.018.184.045.367.081.545.013.062.032.122.047.184.028.114.053.23.088.341l.002.004c.053.17.115.34.184.502l.002.004c.069.163.144.322.228.477l.004.006c.084.154.176.304.273.449.025.036.053.07.079.105.076.108.152.215.236.317l.006.006c.111.135.228.264.351.388l.004.004 2.606 2.606H21c-4.148 0-7.5 3.368-7.5 7.529v4.516a.5.5 0 0 0 .5.5L25.932 47.91z" color="#000" font-family="sans-serif" font-weight="400" transform="translate(0 1004.362)" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" class="color154082 svgShape" />
                    <path fill="#fff" fill-rule="evenodd" d="M15.48 4.434c-3.021 0-5.48 2.469-5.48 5.5 0 3.03 2.459 5.5 5.48 5.5 3.022 0 5.48-2.47 5.48-5.5.001-3.031-2.458-5.5-5.48-5.5zm0 1c2.48 0 4.481 2.007 4.48 4.5 0 2.492-2 4.5-4.48 4.5a4.483 4.483 0 0 1-4.48-4.5c0-2.493 2.001-4.5 4.48-4.5zm-2.98 11c-4.148 0-7.5 3.368-7.5 7.529v4.516a.5.5 0 0 0 .5.5h3.854a.5.5 0 0 0 .292 0h11.708a.5.5 0 0 0 .292 0H25.5a.5.5 0 0 0 .5-.5v-4.516c0-4.161-3.352-7.53-7.5-7.53h-6zm0 1h6c3.609 0 6.5 2.902 6.5 6.529v4.016h-3v-4.024a.5.5 0 0 0-.508-.506.5.5 0 0 0-.492.506v4.024H10v-4.024a.5.5 0 0 0-.508-.506.5.5 0 0 0-.492.506v4.024H6v-4.016c0-3.627 2.891-6.53 6.5-6.53z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" transform="translate(8.5 1011.362)" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" class="colorfff svgShape" />
                </g>
            </svg>
        </picture>

        <div class="username">
            <p>
                <?php echo $usuario['nombre_usuario'] ?>
            </p>

            <p class="tipo_usuario">
                Tipo de usuario:
                <span>
                    <?php echo $usuario['rol'] ?>
                </span>
            </p>

            </d>
        </div>

        <!-- navegacion de opciones del aside -->
        <nav>
            <ul>

                <li>
                    <?php $linkLibros = $usuario['rol'] == 'admin' ? '/panel' : '/libros' ?>
                    <a href="<?php echo $linkLibros?>" >
                        <div class="">
                            <picture>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 29 29">
                                    <path fill="#fafafa" d="M7.601 20.98A9.16 9.16 0 0 0 4 21.719V6.88a7.155 7.155 0 0 1 8.875 1.205l.625.653v14.405a9.15 9.15 0 0 0-5.899-2.163zM25 21.719a9.138 9.138 0 0 0-9.5 1.424V8.738l.626-.653A7.157 7.157 0 0 1 25 6.88v14.839z" class="color000 svgShape" />
                                </svg>
                            </picture>
                            <p>libros</p>
                        </div>
                    </a>

                </li>

                <?php if($usuario['rol'] == 'admin'): ?>
                <li>
                    <a href="/reservaciones">
                        <div class="">
                            <picture>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" data-name="Layer 40" viewBox="0 0 50 50">
                                    <path fill="#fff" d="M40,48a2,2,0,0,1-1.45-.63L25,33,11.45,47.37A2,2,0,0,1,8,46V4a2,2,0,0,1,2-2H40a2,2,0,0,1,2,2V46A2,2,0,0,1,40,48ZM25,28.13a2,2,0,0,1,1.45.63L38,41V6H12V41L23.55,28.75A2,2,0,0,1,25,28.13Z" class="color000 svgShape" />
                                </svg>
                            </picture>
                            <p>reservaciones</p>
                        </div>
                    </a>
                </li>
                <?php endif?>
                
                <?php if($usuario['rol'] == 'admin'): ?>
                <li>
                    <a href="/usuarios">
                        <div class="">
                            <picture>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24">
                                    <g fill="#fff" class="color000 svgShape" data-name="Layer 2">
                                        <path d="M21 6h-1V5a1 1 0 0 0-2 0v1h-1a1 1 0 0 0 0 2h1v1a1 1 0 0 0 2 0V8h1a1 1 0 0 0 0-2zm-11 5a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm6 10a1 1 0 0 0 1-1 7 7 0 0 0-14 0 1 1 0 0 0 1 1" class="color000 svgShape" data-name="person-add" />
                                    </g>
                                </svg>
                            </picture>
                            <p>usuarios</p>
                        </div>
                    </a>
                </li>
                <?php endif?>
                
                <li>
                    <a href="/logout">
                        <div class="">
                            <picture>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 32 32">
                                    <path fill="#fff" d="M11.64,15v2H6.12l3.33,3.34-1.4,1.41L2.3,16l5.75-5.75,1.4,1.41L6.12,15Zm0-12V15h7.72v2H11.64V29H29.7V3Z" class="color000 svgShape" data-name="log out" />
                                </svg>
                            </picture>
                            <p>cerrar sesión</p>
                        </div>
                    </a>
                </li>


            </ul>
        </nav>

</aside>