<?php
include_once ROOT_PATH . "/sito/script/functions.php";
require_once ROOT_PATH . "/sito/inc/init.php";
if (isset($_POST['email'], $_POST['p'])) {
   $email = $_POST['email'];
   $password = $_POST['p']; // Recupero la password criptata.
   if (login($email, $password, $mysqli) == true) {
      if (isAdmin($mysqli)) {
         //echo 'Success: You have been logged in as an Admin!';
         Header('Location:' . ROOT_URL . "admin?page=admin_logged");
      } else {
         Header('Location:' . ROOT_URL . "public?page=login");
      }
   } else {
      // Login fallito
      echo 'Unsuccess login';
      Header('Location:' . ROOT_URL . "public?page=login");
   }
} else {
   // Le variabili corrette non sono state inviate a questa pagina dal metodo POST.
}
