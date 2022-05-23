<?php
include_once ROOT_PATH . "/sito/script/functions.php";
require_once ROOT_PATH . "/sito/inc/init.php";
//avviamo la procedura di registrazione
if (isset($_POST['email'], $_POST['p'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['p']; // Recupero la password criptata.
   if (registration($username, $email, $password, $mysqli) == true) {
      login($email, $password, $mysqli);
      Header('Location:' . ROOT_URL . "public?page=login");
   } else {
      // Login failed
      $_SESSION['error'] = "Registrazione Fallita";
   }
} else {
   // Wrong data
   echo 'variabili non inviate';
}
