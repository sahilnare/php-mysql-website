<?php
	include "templates/header.php";
?>

<div class="container is-fluid">
	<h2>Searched Results: </h2>
	<?php
		require 'includes/dbh.inc.php';

		if (isset($_POST['search-sub'])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			// $search = $_POST['search'];
			$sql = "SELECT * FROM colleges WHERE nameCollege LIKE '%$search%' OR location LIKE '%$search%';";
			//code change
			// $stmt = mysqli_stmt_init($conn);
			// if (!mysqli_stmt_prepare($stmt, $sql)) {
			// 	header("Location: ../search.php?error=sqlerror");
			// 	exit();
			// }
			// else {
			// 	mysqli_stmt_bind_param($stmt, "ss", $search, $search);
			// 	mysqli_stmt_execute($stmt);
			// 	mysqli_stmt_store_result($stmt);
			// 	$resultCheck = mysqli_stmt_num_rows($stmt);
			// 	$college_data = array();
			// 	if($resultCheck > 0) {
			// 		while($row = mysqli_fetch_assoc($stmt)) {
			// 			$college_data[] = $row;
			// 		}
			// 		echo "<table class=\"table\"><tr><th>Name</th><th>Location</th></tr>";
			// 		foreach ($college_data as $coll) {
			// 			echo "<tr><td>".$coll['nameCollege']."</td><td>".$coll['location']."</td></tr>";
			// 		}
			// 		echo "</table>";
			// 	}
			// 	else {
			// 		echo "<h2>No results matching the search</h2>";
			// 	}
			// }
			//code change
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);
			$college_data = array();

			if($queryResult > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$college_data[] = $row;
				}
				echo "<table class=\"table\"><tr><th>Name</th><th>Location</th></tr>";
				foreach ($college_data as $coll) {
					echo "<tr><td><a href=\"college-page.php?idColleges=".$coll['idColleges']."\">".$coll['nameCollege']."</td><td>".$coll['location']."</a></td></tr>";
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