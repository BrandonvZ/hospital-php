<header id="headerIndex">
    <h1 id="bannerh1Index">Dierenziekenhuis de Wae</h1>
    <img id="inBannerPhotoIndex" src="../public/images/dewae.jpg" alt="dewaeimg">
</header>
<nav id="navIndex">
    <ul>
        <li><a href="index">Home</a></li>
        <li><a href="patients">Patiënts</a></li>
        <li><a href="clients">Cliënts</a></li>
        <li><a class="activeItem" href="species">Species</a></li>
    </ul> 
</nav>
<main id="mainIndex">
    <img id="caroselIndex" src="../public/images/animalhospitalcarosel2.jpg">
    <h2><strong>Species</strong></h2>
    <table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Description</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
            foreach($species as $specie)
            {
                echo "<tr>
                    <td>" . $specie['species_id'] . "</td>
                    <td>" . $specie['species_description'] . "</td>
                    <td><a class='fa fa-pencil actionbutton' href='editspecie/" . $specie['species_id'] . "'></a><a class='fa fa-times actionbutton' href='deletespecie/" . $specie['species_id'] . "'></a></td></tr>";
                "</tr>";
            }
        ?>
	</tbody>
</table>
	<p><a class="createBtnUnder" href="createspecie">Create</a></p>
</main>
<footer id="footerIndex">
    <p id="footerText">This website and all its content belongs to Animal hospital de Wae© 2018</p>
</footer>