<?php
require_once ROOT_PATH . "/sito/inc/init.php";
// Mando delle notifiche riguardo l'ordine appena effettuato
$id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$message = "Hai effettuato un ordine!";
$date = date("Y/m/d h:i:s");


// Invio una notifica all'user
if (!($stmt = $mysqli->prepare("INSERT INTO notifications (user, message, datetime) VALUES (?, ?, ?)"))) {
    return;
}
$stmt->bind_param('iss', $id, $message, $date);
$stmt->execute();

$message = "Un ordine è stato effettuato da " . $username;
// Invio una notifica agli admin
if (!($stmt = $mysqli->prepare("INSERT INTO notifications_admin (user, message, datetime) VALUES (?, ?, ?)"))) {
    return;
}
$stmt->bind_param('iss', $id, $message, $date);
$stmt->execute();

//Ottengo il cart id per rimuoverlo
if (!($stmt = $mysqli->prepare("SELECT id FROM cart WHERE client_id = ?"))) {
    return;
}
$stmt->bind_param('i', $id);
$stmt->execute();
$result = mysqli_fetch_array($stmt->get_result());
$cart_id =  $result['id'];

// rimuovo i prodotti dal carrello
if (!($stmt = $mysqli->prepare("DELETE FROM cart_item WHERE cart_id = ?"))) {
    return;
}
$stmt->bind_param('i', $cart_id);
$stmt->execute();

// rimuovo il carrello
if (!($stmt = $mysqli->prepare("DELETE FROM cart WHERE id = ?"))) {
    return;
}
$stmt->bind_param('i', $cart_id);
$stmt->execute();
