<header id="headerIndex">
    <h1 id="bannerh1Index">Dierenziekenhuis de Wae</h1>
    <img id="inBannerPhotoIndex" src="../public/images/dewae.jpg" alt="dewaeimg">
</header>
<nav id="navIndex">
    <ul>
        <li><a href="index">Home</a></li>
        <li><a class="activeItem" href="patients">Patiënts</a></li>
        <li><a href="clients">Cliënts</a></li>
        <li><a href="species">Species</a></li>
    </ul> 
</nav>
<main id="mainIndex">
    <img id="caroselIndex" src="../public/images/animalhospitalcarosel1.jpg">
    <h2><strong>Patiënts</strong></h2>
    <table id="myTable">
	<thead>
		<tr id="patientTr">
			<th onclick="sortTable(0)">ID</th>
			<th onclick="sortTable(1)">Name</th>
			<th onclick="sortTable(2)">Species</th>
			<th onclick="sortTable(3)">Client</th>
			<th onclick="sortTable(4)">Gender</th>
			<th class="notPatientTr">Status</th>
			<th class="notPatientTr" colspan="2">Action</th>
		</tr>
	</thead>
	<tbody id="patientSorting">
		<?php
	        foreach($patients as $patient){
	          echo "<tr><td>" . $patient['id'] . "</td><td>" . $patient['name'] . "</td>";
	          echo "<td>" . $patient['species_name'] . "</td>";
	          echo "<td>" . $patient['client_firstname'] . " " . $patient['client_lastname'] . "</td>";
	          if($patient['gender'] == 0)
	          {
	          	echo "<td>Male</td>";
	          } else {
	          	echo "<td>Female</td>";
	          }
	          echo "<td>" . $patient['status'] . "</td><td><a class='fa fa-pencil actionbutton' href='editpatient/" . $patient['id'] . "'></a><a class='fa fa-times actionbutton' href='deletepatient/" . $patient['id'] . "'></a></td></tr>";
	        }
	    ?>
	</tbody>
</table>
	<p><a class="createBtnUnder" href="createpatient">Create</a></p>
</main>
<footer id="footerIndex">
    <p id="footerText">This website and all its content belongs to Animal hospital de Wae© 2018</p>
</footer>
<script>
function sortTable(n) {

	var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
  	dir = "asc"; 

  	while (switching) {
    	switching = false;
    	rows = table.getElementsByTagName("TR");

		switch (n) {
	    case 0:
	    	for (i = 1; i < (rows.length - 1); i++) {
		      shouldSwitch = false;
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];

		      if (dir == "asc") {
		        if (Number(x.innerHTML) > Number(y.innerHTML)) {
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (Number(x.innerHTML) < Number(y.innerHTML)) {
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
	        break;
	    case 1:
	    	for (i = 1; i < (rows.length - 1); i++) {
		      shouldSwitch = false;
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];

		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
	        break;
	    case 2:
	    	for (i = 1; i < (rows.length - 1); i++) {
		      shouldSwitch = false;
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];

		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
	        break;
	    case 3:
	    	for (i = 1; i < (rows.length - 1); i++) {
		      shouldSwitch = false;
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];

		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
	        break;
	    case 4:
	    	for (i = 1; i < (rows.length - 1); i++) {
		      shouldSwitch = false;
		      x = rows[i].getElementsByTagName("TD")[n];
		      y = rows[i + 1].getElementsByTagName("TD")[n];

		      if (dir == "asc") {
		        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      } else if (dir == "desc") {
		        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
		          shouldSwitch= true;
		          break;
		        }
		      }
		    }
	        break;
	    default:
	    	alert('error');
	    	break;
		}
		if (shouldSwitch) {
	      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
	      switching = true;
	      switchcount ++; 
	    } else {
	      if (switchcount == 0 && dir == "asc") {
	        dir = "desc";
	        switching = true;
	      }
	    }  
  	}
}
</script>