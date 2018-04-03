<?php

    if(isset($_POST['ja'])) {
        deleteClients($id);
        header('location: ' . URL . 'home/clients');
    } 
    elseif(isset($_POST['nee'])) {
        header('location: ' . URL . 'home/clients');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Weet u zeker dat u <?php echo $user['client_firstname'] . " " .  $user['client_lastname']; ?> wilt verwijderen</b></h1>
        <button type="submit" name="ja">Ja</button>
        <button type="submit" name="nee">Nee</button>
</form>    