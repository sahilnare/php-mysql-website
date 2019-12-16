<?php
	include "templates/header.php";
?>


<main>
	<div class="container is-fluid">
	<?php
		if(isset($_GET['error'])) {
			if($_GET['error'] == "emptyfields") {
				echo "<h3>Fill in all the fields!</h3>";
			}
			else if($_GET['error'] == "invalidbranch") {
				echo "<h3>The branch entered is invalid!</h3>";
			}
			else if($_GET['error'] == "invalidround") {
				echo "<h3>The round entered is invalid!</h3>";
			}
			else if($_GET['error'] == "invalidyear") {
				echo "<h3>The year entered is invalid!</h3>";
			}
			else if($_GET['error'] == "invalidcutoffrank") {
				echo "<h3>The cut-off rank entered is invalid!</h3>";
			}
		}
		else if (isset($_GET['submition'])) {
			if ($_GET['submition'] == "success") {
				echo "<h3>Submition successful!</h3>";
			}
		}
	?>
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
	?>
	<form action="includes/college.inc.php" method="post">

		<div class="field">
		  <label class="label">Name of College</label>
		  <div class="control">
		    <input class="input" type="text" name="nameCollege" placeholder="Name" <?php echo "value=\"".$college_data[0]['nameCollege']."\"" ?>>
		  </div>
		</div>

		<div class="field">
		  <label class="label">ID of College</label>
		  <div class="control">
		    <input class="input" type="text" name="idColleges" placeholder="Name" <?php echo "value=\"".$college_data[0]['idColleges']."\"" ?>>
		  </div>
		</div>

		<div class="field">
		  <label class="label">Branch</label>
		  <div class="control">
		    <input class="input" type="text" name="branch" placeholder="Branch">
		  </div>
		</div>

		<div class="field">
		  <label class="label">Round</label>
		  <div class="control">
		    <input class="input" type="text" name="round" placeholder="Round">
		  </div>
		</div>

		<div class="field">
		  <label class="label">Year</label>
		  <div class="control">
		    <input class="input" type="text" name="year" placeholder="Year">
		  </div>
		</div>

		<div class="field">
		  <label class="label">Cutoff Rank</label>
		  <div class="control">
		    <input class="input" type="text" name="cutoff-rank" placeholder="Cutoff Rank">
		  </div>
		</div>



		<div class="field is-grouped">
		  <div class="control">
		    <button class="button is-link" name="cutoff-sub" type="submit">Submit</button>
		  </div>
		</div>
	</form>
	</div>
</main>


<?php
	include "templates/footer.php";
?>