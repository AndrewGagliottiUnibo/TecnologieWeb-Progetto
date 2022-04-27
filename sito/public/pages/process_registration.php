<?php
include_once ROOT_PATH . "/sito/script/functions.php";
require_once ROOT_PATH . "/sito/inc/init.php";
sec_session_start(); // usiamo la nostra funzione per avviare una sessione php sicura
//avviamo la procedura di registrazione
if(isset($_POST['email'], $_POST['p'])) {
$username = $_POST['username']; 
   $email = $_POST['email'];
   $password = $_POST['p']; // Recupero la password criptata.
   var_dump($password);
   if(registration($username, $email, $password, $mysqli) == true) {
      // Login eseguito
      echo 'Success: You have been registred in!';
   } else {
      // Login fallito
      echo 'Unsuccess registration';
   }
} else { 
   // Le variabili corrette non sono state inviate a questa pagina dal metodo POST.
   echo 'variabili non inviate';
}
?>