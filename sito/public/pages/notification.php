<?php
$table = "notifications";
if (isAdmin($mysqli)) {
    $table = "notifications_admin";
}

$stmt = $mysqli->prepare("SELECT * FROM " . $table);
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();

?>


<table>
    <caption>Notifiche</caption>
    <tr>
        <th scope="col">Messaggio</th>
        <th scope="col">Data</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['datetime']; ?></td>
        </tr>
    <?php } ?>
</table>