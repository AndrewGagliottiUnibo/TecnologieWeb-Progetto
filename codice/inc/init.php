<?php
// Costanti globali
    define("ROOT_URL", "http://localhost/tw/codice/");
    define("IMAGE_URL", "http://localhost/tw/immagini/");
    define("ROOT_PATH", dirname(__FILE__, 3));
    
// Setup database
    require_once ROOT_PATH . "/codice/db/db_manager.php";
    require_once ROOT_PATH . "/codice/db/product.php";
    $dbh = new DBManager();

// Immagini
    
?>