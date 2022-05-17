<?php
require_once ROOT_PATH . "/sito/inc/init.php";
require_once ROOT_PATH . "/sito/script/functions.php";

if (isset($_POST['oldPassword'], $_POST['password'],  $_POST['confirm'])) {
    $usrId = $_SESSION['user_id'];
    $oldPassword = $_POST['oldPassword'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    //Passowrd selection
    $stmt = $mysqli->prepare("SELECT password FROM members WHERE id = ?");
    $stmt->bind_param('i', $usrId);
    $stmt->execute();
    $result = $stmt->get_result();
    $check =  mysqli_fetch_array($result)['password'];

    var_dump($check);
    var_dump($oldPassword);
    var_dump($password);
    // Check if product already exist
    if ($check === $oldPassword) {
        var_dump($check);
        //if ($password === $confirm) {
            $stmt = $mysqli->prepare("UPDATE members SET password = ? WHERE id = ?");
            $stmt->bind_param('si', $password, $usrId);
            $stmt->execute();
            echo('tutto ok');
        //}
    }
}
