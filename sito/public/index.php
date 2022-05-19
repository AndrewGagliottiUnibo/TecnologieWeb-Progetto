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
</head>

<body>
    <?php include ROOT_PATH . "/sito/template/navbar.php"; ?>
    <main>
        <?php include ROOT_PATH . "/sito/public/pages/" . $page . ".php"; ?>
    </main>
    <?php include ROOT_PATH . "/sito/template/footer.php"; ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../script/navbar.js"></script>
<script type="text/javascript" src="../script/card.js"></script>
<script type="text/javascript" src="../script/sha512.js"></script>
<script type="text/javascript" src="../script/listeners.js"></script>
<script type="text/javascript" src="../script/forms.js"></script>
<script type="text/javascript" src="../script/cookie.js"></script>

</html>