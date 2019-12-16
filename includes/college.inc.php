<?php

if (isset($_POST['cutoff-sub'])) {

	require 'dbh.inc.php';

	$branch = $_POST['branch'];
	$round = $_POST['round'];
	$year = $_POST['year'];
	$cutoffRank = $_POST['cutoff-rank'];
	$name = $_POST['nameCollege'];
	$id = $_POST['idColleges'];


	if(empty($branch) || empty($round) || empty($year) || empty($cutoffRank)) {
		header("Location: ../college-page-submit.php?idColleges=".$id."&error=emptyfields");
		exit();
	}


	else if (!preg_match("/^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/", $branch)) {
		header("Location: ../college-page-submit.php?idColleges=".$id."&error=invalidbranch");
		exit();
	}

	else if (!preg_match("/^[0-9]+$/", $round)) {
		header("Location: ../college-page-submit.php?idColleges=".$id."&error=invalidround");
		exit();
	}

	else if (!preg_match("/^[0-9]+$/", $year)) {
		header("Location: ../college-page-submit.php?idColleges=".$id."&error=invalidyear");
		exit();
	}

	else if (!preg_match("/^[0-9]+$/", $cutoffRank)) {
		header("Location: ../college-page-submit.php?idColleges=".$id."&error=invalidcutoffrank");
		exit();
	}

	else {
		$sql = "SELECT * FROM cutoff WHERE nameCollege=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../college-page-submit.php?idColleges=".$id."&error=sqlerror");
			exit();
		}
		else {
			
			$sql = "INSERT INTO cutoff (nameCollege, branch, round, year, cutoffRank) VALUES (?, ?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("Location: ../college-page-submit.php?idColleges=".$id."&error=sqlerror");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "sssss", $name, $branch, $round, $year, $cutoffRank);
				mysqli_stmt_execute($stmt);
				header("Location: ../college-page-submit.php?idColleges=".$id."&submition=success");
				exit();
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}

else {
	header("Location: ../colleges.php");
	exit();
}