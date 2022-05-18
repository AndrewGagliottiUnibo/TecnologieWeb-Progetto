<?php
require_once ROOT_PATH . "/sito/inc/init.php";
require_once ROOT_PATH . "/sito/script/functions.php";

if (isset($_POST['oldPassword'], $_POST['newPassword'],  $_POST['confirm'])) {
    $usrId = $_SESSION['user_id'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirm = $_POST['confirm'];

    // Ottengo salt e password attuali dell'utente
    if (!($stmt = $mysqli->prepare("SELECT password, salt FROM members WHERE id = ? LIMIT 1"))) {
        echo ("Connection to db failed");
        return;
    }
    $stmt->bind_param('i', $usrId);
    $stmt->execute();
    $result = mysqli_fetch_array($stmt->get_result());
    $salt =  $result['salt'];
    $db_password =  $result['password'];

    // Codifico la vecchia password inserita per verificare che sia quella attuale
    $check = hash('sha512', $oldPassword . $salt);
    if ($check !== $db_password) {
        echo ("Password errata, inserisci la password corretta");
        Header('Location:' . ROOT_PATH . "public/?page=login");
        return;
    }
    //  Codifico la nuova password
    $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
    $newPassword = hash('sha512', $newPassword . $random_salt);

    // Aggiorno salt e password dell'utente
    if (!($stmt = $mysqli->prepare("UPDATE members SET password = ?, salt = ? WHERE id = ?"))) {
        echo ("Connection to db failed");
        Header('Location:' . ROOT_PATH . "public/?page=login");
        return;
    }
    $stmt->bind_param('ssi', $newPassword, $random_salt, $usrId);
    $stmt->execute();

    // Aggiorno i dati della sessione in seguito al cambio password
    $_SESSION['login_string'] = hash('sha512', $newPassword . $_SERVER['HTTP_USER_AGENT']);
    echo("pippo");
    Header('Location:' . ROOT_PATH . "public/?page=login");
}
