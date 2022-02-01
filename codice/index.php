<!DOCTYPE html>
<html lang="it">

<head>
    <!--    Sia W3School che AChecker me lo indicano come codice HTML corretto e accessibile    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CacPlus.inc</title>
    <link rel="stylesheet" href="../codice/css/homePage.css">
    <script type="text/javascript" src="../codice/script/navbar.js"></script>
</head>

<body>
    <header>
        <?php include "template/navbar.php";?>
        <section class="banner">
            <h1>CacPlus</h1>
            <p>Piante belle</p>
        </section>

    </header>
    <main>
        <section>
            <h2>In Evidenza</h2>
            <ul class="articoliInEvidenza">
                <!-- Articoli qui -->
            </ul>
        </section>
        <section>
            <h2>
                <a href="#">Vai allo shop completo</a>
                <!-- Nuova pagina -->
            </h2>
        </section>
    </main>
    <?php include "template/footer.php";?>
</body>

</html>