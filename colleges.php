<?php
	include "templates/header.php";
?>


<main>
	<div class="container is-fluid">
	<!-- <form action="includes/getcollege.inc.php" method="get">
		
		<div class="field is-grouped">
		  <div class="control">
		    <button class="button is-link" name="col-get" type="submit">Get Colleges</button>
		  </div>
		</div>
	</form> -->
	<?php
		require 'includes/dbh.inc.php';

		$sql = "SELECT nameCollege,location FROM colleges";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		$college_name = array();
		$college_location = array();
		$college_data = array();

		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				// array_push($college_name, $row['nameCollege']);
				// array_push($college_location, $row['location']);
				$college_data[] = $row;
			}
			//print_r($college_data);
			echo "<table class=\"table\"><tr><th>Name</th><th>Location</th></tr>";
			foreach ($college_data as $coll) {
				echo "<tr><td>".$coll['nameCollege']."</td><td>".$coll['location']."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "No colleges";
		}
	?>

	</div>
</main>


<?php
	include "templates/footer.php";
?>