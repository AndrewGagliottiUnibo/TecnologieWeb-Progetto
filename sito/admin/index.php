<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "homepage";
?>
<?php include "../inc/init.php" ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <!--    Sia W3School che AChecker me lo indicano come codice HTML corretto e accessibile    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CacPlus.inc</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="../script/forms.js"></script>
    <script src="../script/sha512.js"></script>
    <script src="../script/listeners.js"></script>
    <script src="../script/navbar.js"></script>
    <script src="../script/card.js"></script>
    <script src="../script/productHandler.js"></script>
</head>

<body>
    <?php include ROOT_PATH . "/sito/template/navbar.php"; ?>
    <main>
        <?php if (isAdmin($mysqli)) : ?>
            <?php include ROOT_PATH . "/sito/admin/pages/" . $page . ".php"; ?>
        <?php else : ?>
            <h2>Non hai il permesso di visualizzare questa pagina</h2>
        <?php endif; ?>
    </main>
    <?php include ROOT_PATH . "/sito/template/footer.php"; ?>
</body>

</html>