<?php
	include "templates/header.php";
?>


<main>
	<div class="container is-fluid">
	<form action="search.php" method="post">
		<div class="field">
		  <label class="label">Search</label>
		  <div class="control">
		    <input class="input" type="text" name="search" placeholder="Type the name or location of any institute">
		  </div>
		</div>

		<div class="field is-grouped">
		  <div class="control">
		    <button class="button is-link" name="search-sub" type="submit">Search</button>
		  </div>
		</div>
	</form>
	</div>
	<div class="container is-fluid">
		<?php
			require 'includes/dbh.inc.php';

			$sql = "SELECT * FROM colleges";
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
				echo "<table class=\"table\"><tr><th>Name</th><th>Location</th><th>Type</th></tr>";
				foreach ($college_data as $coll) {
					echo "<tr><td><a href=\"college-page.php?idColleges=".$coll['idColleges']."\">".$coll['nameCollege']."</td><td>".$coll['location']."</a></td><td>".$coll['type']."</td></tr>";
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