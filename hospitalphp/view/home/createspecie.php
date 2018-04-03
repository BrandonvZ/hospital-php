<?php

    if(isset($_POST['Create'])) {
        addSpecie();
        header('location: ' . URL . 'home/species');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

        <label class="createLabel"><b>Specie</b></label>
        <input type="text" name="speciename" placeholder="Duck" required>
        <br>
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>    