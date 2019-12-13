<?php

if (isset($_GET['col-get'])) {
	require 'dbh.inc.php';

	$sql = "SELECT nameCollege,location FROM colleges";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['nameCollege'];
		}
	}
	else {
		echo "No colleges";
	}
}
else {
	header("Location: ../index.php");
	exit();
}

?>