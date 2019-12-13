<?php
	include "templates/header.php";
?>

<div class="container is-fluid">
	<h2>Searched Results: </h2>
	<?php
		require 'includes/dbh.inc.php';

		if (isset($_POST['search-sub'])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM colleges WHERE nameCollege LIKE '%$search%' OR LOCATION LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);
			$college_data = array();

			if($queryResult > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$college_data[] = $row;
				}
				echo "<table class=\"table\"><tr><th>Name</th><th>Location</th></tr>";
				foreach ($college_data as $coll) {
					echo "<tr><td>".$coll['nameCollege']."</td><td>".$coll['location']."</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "<h2>No resluts matching the search</h2>";
			}
		}
		else {
			header("Location: index.php");
			exit();
		}


	?>
</div>