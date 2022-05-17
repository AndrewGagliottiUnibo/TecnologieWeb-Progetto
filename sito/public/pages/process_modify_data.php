<?php
require_once ROOT_PATH . "/sito/inc/init.php";
require_once ROOT_PATH . "/sito/script/functions.php";

if (isset($_POST['oldPassword'], $_POST['newPassword'],  $_POST['confirm'])) {
    $usrId = $_SESSION['user_id'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirm = $_POST['confirm'];
    var_dump($oldPassword);
    var_dump($newPassword);

    //  Ottengo la password attuale
    $stmt = $mysqli->prepare("SELECT email, password, salt FROM members WHERE id = ? LIMIT 1");
    $stmt->bind_param('i', $usrId);
    $stmt->execute();
    $result = mysqli_fetch_array($stmt->get_result());
    $email =  $result['email'];
    $salt =  $result['salt'];
    $db_password =  $result['password'];
    $check = hash('sha512', $oldPassword . $salt);

    // controllo se la vecchia password coincide con quella attuale
    if ($check === $db_password) {
        //Codfico la nuova pass
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
        $newPassword = hash('sha512', $newPassword . $random_salt);

        $stmt = $mysqli->prepare("UPDATE members SET password = ?, salt = ? WHERE id = ?");
        $stmt->bind_param('ssi', $newPassword, $random_salt, $usrId);
        $stmt->execute();

        // logout
        $_SESSION = array();
        // Recupera i parametri di sessione.
        $params = session_get_cookie_params();
        // Cancella i cookie attuali.
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        // Cancella la sessione.
        session_destroy();
        login($email, $confirm, $mysqli);
    }
}
