<?php
$table = "notifications";
$stmt;
if (isset($_SESSION['user_id'])) {
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
}
?>



<section class="notifications_section">
    <?php if (login_check($mysqli)) : ?>
        <?php if (mysqli_num_rows($result) == 0) : ?>
            <h2>Nessuna notifica da mostrare!</h2>
            <a class="commit_button" href="<?php echo ROOT_URL; ?>shop?page=catalogo">Visita il nostro catalogo!</a>
        <?php else : ?>

            <table id="notifications_table">
                <caption>Notifiche</caption>
                <tr>
                    <th scope="col">Messaggio</th>
                    <th scope="col">Data</th>
                    <th><button class="material-icons" name="all">
                            delete_sweep
                        </button></th>
                </tr>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['datetime']; ?></td>
                        <td><button class="material-icons" name="<?php echo $row['id']; ?>">
                                delete
                            </button></td>
                    </tr>
                <?php } ?>
            </table>
        <?php endif; ?>
    <?php else : ?>
        <h2>Devi loggare per visualizzare questa pagina!</h2>
        <a class="commit_button" href="<?php echo ROOT_URL; ?>public?page=login">Vai nell'area di login!</a>
    <?php endif; ?>
</section>