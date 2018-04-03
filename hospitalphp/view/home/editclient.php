<?php

    if(isset($_POST['Update'])) {
        editClientConfirm($id);
        header('location: ' . URL . 'home/clients');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Edit</b></h1>

        <label class="createLabel"><b>Firstname</b></label>
        <input type="text" name="firstname" placeholder="Juan" value="<?php echo $user['client_firstname']; ?>" required>
        <br>
        <label class="createLabel"><b>Lastname</b></label>
        <input type="text" name="lastname" placeholder="Willems" value="<?php echo $user['client_lastname']; ?>" required>
        <br>
        <button class="createButton" type="submit" name="Update">Update</button>
    </div>
</form>    