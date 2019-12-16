<?php

if (isset($_POST['col-sub'])) {

	require 'dbh.inc.php';

	$name_college = $_POST['ins-name'];
	$location = $_POST['location'];

	if(empty($name_college) || empty($location)) {
		header("Location: ../submit.php?error=emptyfields&insname=".$name_college."&location=".$location);
		exit();
	}

	else if (!preg_match("/^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/", $name_college) && !preg_match("/^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/", $location)) {
		header("Location: ../submit.php?error=invalidnamelocation");
		exit();
	}

	else if (!preg_match("/^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/", $name_college)) {
		header("Location: ../submit.php?error=invalidname&insname=".$name_college);
		exit();
	}

	else if (!preg_match("/^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/", $location)) {
		header("Location: ../submit.php?error=invalidlocation&location=".$location);
		exit();
	}

	else {
		$sql = "SELECT nameCollege FROM colleges WHERE nameCollege=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../submit.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $name_college);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0) {
				header("Location: ../submit.php?error=collegetaken&location=".$location);
				exit();
			}
			else {
				$sql = "INSERT INTO colleges (nameCollege, location) VALUES (?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../submit.php?error=sqlerror");
					exit();
				}
				else {
					mysqli_stmt_bind_param($stmt, "ss", $name_college, $location);
					mysqli_stmt_execute($stmt);
					header("Location: ../submit.php?submition=success");
					exit();
				}
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}

else {
	header("Location: ../submit.php");
	exit();
}