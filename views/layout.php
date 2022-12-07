<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>

    <header class="header">
        <nav>
            <ul>

                <menu>

                    <li>
                        <a href="/">
                            <section class="page__logo">
                                <picture>
                                    <svg width="2rem" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 120 120">
                                        <defs>
                                            <linearGradient id="a" x1="60" x2="60" y1="-725.988" y2="-845.988" gradientTransform="matrix(1 0 0 -1 0 -725.988)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#fe9d02" />
                                                <stop offset="1" stop-color="#f7701d" />
                                            </linearGradient>
                                        </defs>
                                        <path fill="url(#a)" d="M26,0H94a25.94821,25.94821,0,0,1,26,26V94a25.94821,25.94821,0,0,1-26,26H26A25.94822,25.94822,0,0,1,0,94V26A26.012,26.012,0,0,1,26,0Z" />
                                        <path fill="#fff" fill-rule="evenodd" d="M81.9,27c9.8,0,14.9,3.7,18,6.2a5.83118,5.83118,0,0,1,2.2,4.6V86.5a1.77672,1.77672,0,0,1-.4,1,1.28389,1.28389,0,0,1-1,.4,1.08577,1.08577,0,0,1-.9-.4c-3.1-2.6-9.2-6-18.2-6-15,0-19.4,14-19.4,14v-53A12.19743,12.19743,0,0,1,64.8,35C67.6,31.3,72.7,27,81.9,27ZM39.3,27c9.2,0,14.3,4.3,17.2,8a12.19756,12.19756,0,0,1,2.6,7.5v53s-4.4-14-19.4-14c-9,0-15.1,3.4-18.2,6a3.55193,3.55193,0,0,1-.9.4,1.36706,1.36706,0,0,1-1.4-1.4V37.8a5.97977,5.97977,0,0,1,2.2-4.6C24.4,30.7,29.5,27,39.3,27Z" />
                                    </svg>
                                </picture>
                                <h1> Biblioteca Web </h1>
                            </section>
                        </a>
                    </li>
                </menu>

                <menu>
                    <li>
                        <a href="/login">Iniciar sesion</a>
                    </li>
                </menu>

            </ul>
        </nav>
    </header>

    <?php echo $contenido; ?>

</body>

</html>