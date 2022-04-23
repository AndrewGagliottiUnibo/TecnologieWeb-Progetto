<?php
// Costanti globali
    define("ROOT_URL", "http://localhost/" . "TecnologieWeb-Progetto/sito/");
    define("IMAGE_URL", "http://localhost/" . "TecnologieWeb-Progetto/immagini/");
    define("ROOT_PATH", dirname(__FILE__, 3));
    
// Setup database
    require_once ROOT_PATH . "/sito/db/db_manager.php";
    require_once ROOT_PATH . "/sito/db/ProductManager.php";
    require_once ROOT_PATH . "/sito/db/CartManager.php";

// Cart
    
    session_start();
    
?>