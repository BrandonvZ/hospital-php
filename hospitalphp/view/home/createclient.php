<?php

    if(isset($_POST['Create'])) {
        addClient();
        header('location: ' . URL . 'home/clients');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

        <label class="createLabel"><b>Firstname</b></label>
        <input type="text" name="firstname" placeholder="Juan" required>
        <br>
        <label class="createLabel"><b>Lastname</b></label>
        <input type="text" name="lastname" placeholder="Willems" required>
        <br>
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>    