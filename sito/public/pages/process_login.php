<?php
include_once ROOT_PATH . "/sito/script/functions.php";
require_once ROOT_PATH . "/sito/inc/init.php";
if (isset($_POST['email'], $_POST['p'])) {
   $email = $_POST['email'];
   $password = $_POST['p']; // Recupero la password criptata.
   if (login($email, $password, $mysqli) == true) {
      // Login eseguito, controlla se admin
      $admin;
      $stmt = $mysqli->prepare("SELECT admin FROM members WHERE email = ? LIMIT 1");
      $stmt->bind_param('s', $email); // esegue il bind del parametro '$email'.
      $stmt->execute(); // esegue la query appena creata.
      $stmt->store_result();
      $stmt->bind_result($admin); // recupera il risultato della query e lo memorizza nelle relative variabili.
      $stmt->fetch();

      if ($admin) {
         //echo 'Success: You have been logged in as an Admin!';
         Header('Location:' . ROOT_URL . "admin?page=adminLogged");
      } else {
         Header('Location:' . ROOT_URL . "public?page=login");
      }
   } else {
      // Login fallito
      echo 'Unsuccess login';
   }
} else {
   // Le variabili corrette non sono state inviate a questa pagina dal metodo POST.
}
