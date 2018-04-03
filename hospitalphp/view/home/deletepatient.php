<?php

    if(isset($_POST['ja'])) {
        deletePatients($id);
        header('location: ' . URL . 'home/patients');
    } 
    elseif(isset($_POST['nee'])) {
        header('location: ' . URL . 'home/patients');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Weet u zeker dat u <?php print_r($user['patient_name']); ?> wilt verwijderen</b></h1>
        <button type="submit" name="ja">Ja</button>
        <button type="submit" name="nee">Nee</button>
</form>    