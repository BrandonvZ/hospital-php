<header id="headerIndex">
    <h1 id="bannerh1Index">Dierenziekenhuis de Wae</h1>
    <img id="inBannerPhotoIndex" src="../public/images/dewae.jpg" alt="dewaeimg">
</header>
<nav id="navIndex">
    <ul>
        <li><a href="index">Home</a></li>
        <li><a href="patients">Patiënts</a></li>
        <li><a class="activeItem" href="clients">Cliënts</a></li>
        <li><a href="species">Species</a></li>
    </ul> 
</nav>
<main id="mainIndex">
    <img id="caroselIndex" src="../public/images/animalhospitalcarosel3.jpg">
    <h2><strong>Clients</strong></h2>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($clients as $client)
            {
                echo "<tr>
                    <td>" . $client['client_id'] . "</td>
                    <td>" . $client['client_firstname'] . "</td>
                    <td>" . $client['client_lastname'] . "</td>
                    <td><a class='fa fa-pencil actionbutton' href='editclient/" . $client['client_id'] . "'></a><a class='fa fa-times actionbutton' href='deleteclient/" . $client['client_id'] . "'></a></td></tr>";
                "</tr>";
            }
        ?>
    </tbody>
</table>
    <p><a class="createBtnUnder" href="createclient">Create</a></p>
</main>
<footer id="footerIndex">
    <p id="footerText">This website and all its content belongs to Animal hospital de Wae© 2018</p>
</footer>