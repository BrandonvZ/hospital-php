<?php

    if(isset($_POST['ja'])) {
        deleteSpecies($id);
        header('location: ' . URL . 'home/species');
    } 
    elseif(isset($_POST['nee'])) {
        header('location: ' . URL . 'home/species');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Weet u zeker dat u <?php echo $user['species_description']; ?> wilt verwijderen</b></h1>
        <button type="submit" name="ja">Ja</button>
        <button type="submit" name="nee">Nee</button>
</form>    