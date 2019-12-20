<?php
	include "templates/header.php";
?>


<main>
	<div class="container is-fluid">
	
	<?php
		require 'includes/dbh.inc.php';

		$id = mysqli_real_escape_string($conn, $_GET['idColleges']);

		$sql = "SELECT * FROM colleges WHERE idColleges='$id';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		$college_data = array();
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$college_data[] = $row;
				echo "<div class=\"card\">
						  <div class=\"card-content\">
						    <p class=\"title\">
						      ".$row['nameCollege']."
						    </p>
						    <p class=\"subtitle\">
						      ".$row['location']."
						    </p>
						  </div>
						</div><div><br /></div>";
			}
		}
		else {
			echo "No such college";
		}

		echo "<div class=\"card container is-fluid\">
			<p class=\"title\">Ranking</p>
			<p class=\"subtitle\">National Rank: </p>
		</div><div><br /></div>";

		echo "<div class=\"card container is-fluid\">
			<p class=\"title\">Courses</p>
			<p class=\"subtitle\">4 years and 5 years</p>
		</div><div><br /></div>";

		echo "<div class=\"card container is-fluid\">
			<p class=\"title\">Opening and Closing Ranks</p>
			<div class=\"tabs\">
				<ul>
					<li class=\"ranklist is-active\" onclick=\"tabClicker(event)\"><a>2019</a></li>
					<li class=\"ranklist\" onclick=\"tabClicker(event)\"><a>2018</a></li>
					<li class=\"ranklist\" onclick=\"tabClicker(event)\"><a>2017</a></li>
					<li class=\"ranklist\" onclick=\"tabClicker(event)\"><a>2016</a></li>
				</ul>
			</div>
		</div><div><br /></div>";

		echo "<div class=\"card container is-fluid\">
			<p class=\"title\">Fee Structures</p>
			<p class=\"subtitle\">Fees</p>
		</div><div><br /></div>";

		echo "<div class=\"card container is-fluid\">
			<p class=\"title\">Placements</p>
			<p class=\"subtitle\">Placements</p>
		</div><div><br /></div>";
	
		// $collegeName = $college_data[0]['nameCollege'];

		// $sql = "SELECT * FROM rank2018 WHERE name='$collegeName';";
		// $result = mysqli_query($conn, $sql);
		// $resultCheck = mysqli_num_rows($result);
		// $cutoff_data = array();
		// if ($resultCheck > 0) {
		// 	while ($row = mysqli_fetch_assoc($result)) {
		// 		$cutoff_data[] = $row;
		// 	}
		// 	echo "<table class=\"table\">
		// 			<tr>
		// 				<th>Round</th>
		// 				<th>Branch</th>
		// 				<th>Quota</th>
		// 				<th>Category</th>
		// 				<th>Seat Pool</th>
		// 				<th>Opening Rank</th>
		// 				<th>Closing Rank</th>
		// 			</tr>";
		// 	foreach ($cutoff_data as $coll) {
		// 				echo "<tr>
		// 					<td>".$coll['roundNo']."</td>
		// 					<td>".$coll['branch']."</td>
		// 					<td>".$coll['quota']."</td>
		// 					<td>".$coll['category']."</td>
		// 					<td>".$coll['seatPool']."</td>
		// 					<td>".$coll['opening']."</td>
		// 					<td>".$coll['closing']."</td>
		// 				</tr>";
		// 	}
		// 	echo "</table>";
		// }
		// else {
		// 	echo "No data";
		// }
	?>
	</div>
</main>

<script>
	//console.log("It works!");
	function tabClicker(event) {
		var tabcontent = document.getElementsByClassName("ranklist");
		var i;
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].className = tabcontent[i].className.replace(" is-active", "");
		}
		event.currentTarget.className += " is-active";
	}
</script>

<?php
	include "templates/footer.php";
?>