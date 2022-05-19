<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "homepage";
?>
<?php include "../inc/init.php"?>

<!DOCTYPE html>
<html lang="it">

<head>
    <!--    Sia W3School che AChecker me lo indicano come codice HTML corretto e accessibile    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CacPlus.inc</title>
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../script/navbar.js"></script>
    <script type="text/javascript" src="../script/cookie.js"></script>
</head>

<body>
    <?php include ROOT_PATH . "/sito/public/template/navbar.php";?>
    <main>
        <?php include ROOT_PATH . "/sito/public/pages/" . $page . ".php";?>
    </main>
    <?php include ROOT_PATH . "/sito/public/template/footer.php";?>
</body>

</html>