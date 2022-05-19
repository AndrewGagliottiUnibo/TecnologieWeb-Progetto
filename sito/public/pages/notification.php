<?php
$table = "notifications";
if (isAdmin($mysqli)) {
    $table = "notifications_admin";
    $stmt = $mysqli->prepare("SELECT * FROM " . $table);
} else {
    $id = $_SESSION['user_id'];
    $stmt = $mysqli->prepare("SELECT * FROM " . $table . " WHERE  user = ?");
    $stmt->bind_param('i', $id);
}

$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();

?>

<section>
    <table>
        <caption>Notifiche</caption>
        <tr>
            <th scope="col">Messaggio</th>
            <th scope="col">Data</th>
            <th><button class="material-icons">
                    delete_sweep
                </button></th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['datetime']; ?></td>
                <td><button class="material-icons">
                        delete
                    </button></td>
            </tr>
        <?php } ?>
    </table>
</section>