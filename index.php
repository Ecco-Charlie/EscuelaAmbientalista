<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/logo.png" />
    <link rel="stylesheet" href="css/StyleMain.css">
    <title>CBT. No. 2 Ing. Juan Celada Salmon</title>
</head>
<body>
    <!--Menu-->
    <section class="menu">
        <figure class="menu__figure"><img src="assets/logo.png" alt="Logo Esceula" class="menu__figure--logo"></figure>
        <nav class="menu__nav">
            <a href="#" class="menu__nav--item">Sobre nosotros</a>
            <a href="#" class="menu__nav--item">Conoce Mas</a>
            <a href="#" class="menu__nav--item">Contactanos</a>
            <a href="#" class="menu__nav--item">Apoyanos</a>
        </nav>
    </section>
    <!-- Header -->
    <header class="header">
        <article class="header__article">
            <h1 class="header__article--title">Escuelas por la tierra</h1>
            <figure>
                <img src="assets/hoja.svg" alt="Hoja" class="">
            </figure>
        </article>
    </header>
<br><br><br>
    <main>
        <section class="targetas">
        


            <?php
            include("controller/CrearTargeta.php");
            ?>
        </section>
    </main>

</body>
</html>