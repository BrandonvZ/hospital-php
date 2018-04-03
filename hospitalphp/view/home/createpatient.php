<?php
    if(isset($_POST['Create'])) {
        addPatient();
        header('location: ' . URL . 'home/patients');
    }
?>

<form method="POST" action="">
    <div class="create">
        <h1 style="color: black;"><b>Create</b></h1>

        <label class="createLabel"><b>Name</b></label>
        <input type="text" name="name" placeholder="Knuckles" required>
        <br>
        <label class="createLabel"><b>Species</b></label>
        <select type="text" placeholder="species" name="species" required>
            <?php
                foreach($species as $specie)
                {
                    echo "<option value=" . $specie['species_id'] .">" . $specie['species_description'] ."</option>";
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Client</b></label>
        <select type="text" placeholder="client" name="client" required>
            <?php
                foreach($clients as $client)
                {
                    echo "<option value=" . $client['client_id'] .">" . $client['client_firstname'] . " " . $client['client_lastname'] ."</option>";
                }
            ?>
        </select>
        <br>
        <label class="createLabel"><b>Gender</b></label>
        <input type='radio' name='gender' value='0' required>Male</input>
        <input type='radio' name='gender' value='1'>Female</input>
        <br>
        <label class="createLabel"><b>Status</b></label>
        <textarea style="max-width: 500px; max-height: 250px; min-height: 100px; min-width: 340px;" name="status"></textarea>
        <br>
        <button class="createButton" type="submit" name="Create" value="create">Create</button>
    </div>
</form>    