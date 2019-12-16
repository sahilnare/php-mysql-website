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
						</div>";
			}
		}
		else {
			echo "No colleges";
		}
		$collegeName = $college_data[0]['nameCollege'];

		$sql = "SELECT * FROM cutoff WHERE nameCollege='$collegeName';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		$cutoff_data = array();
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$cutoff_data[] = $row;
			}
			echo "<table class=\"table\">
					<tr>
						<th>Year</th>
						<th>Branch</th>
						<th>Round</th>
						<th>Cutoff Rank</th>
					</tr>";
			foreach ($cutoff_data as $coll) {
						echo "<tr>
							<td>".$coll['year']."</td>
							<td>".$coll['branch']."</td>
							<td>".$coll['round']."</td>
							<td>".$coll['cutoffRank']."</td>
						</tr>";
			}
			echo "</table>";
		}
		else {
			echo "No data";
		}
	?>
	<a <?php echo"href=\"college-page-submit.php?idColleges=".$id."\"" ?> class="button is-link">Edit</a>
	</div>
</main>


<?php
	include "templates/footer.php";
?>