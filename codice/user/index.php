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
    <link rel="stylesheet" href="../assets/css/homepage.css">
    <link rel="stylesheet" href="../assets/css/nav_and_footer.css">
    <script type="text/javascript" src="../assets/script/navbar.js"></script>
</head>

<body>
    <?php include ROOT_PATH . "/codice/public/template/navbar.php";?>
    <main>
        <?php include ROOT_PATH . "/codice/public/pages/" . $page . ".php";?>
    </main>
    <?php include ROOT_PATH . "/codice/public/template/footer.php";?>
</body>

</html>