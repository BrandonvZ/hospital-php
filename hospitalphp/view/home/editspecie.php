<?php

    if(isset($_POST['Update'])) {
        editSpecieConfirm($id);
        header('location: ' . URL . 'home/species');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Edit</b></h1>

        <label class="createLabel"><b>Specie</b></label>
        <input type="text" name="speciename" placeholder="Duck" value="<?php echo $user['species_description']; ?>" required>
        <br>
        <button class="createButton" type="submit" name="Update">Update</button>
    </div>
</form>    