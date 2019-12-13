<?php

if (isset($_GET['col-get'])) {
	require 'dbh.inc.php';

	$sql = "SELECT nameCollege,location FROM colleges";
}
else {
	header("Location: ../index.php");
	exit();
}