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
			else if($_GET['error'] == "invalidnamelocation") {
				echo "<h3>The name and location entered are invalid!</h3>";
			}
			else if($_GET['error'] == "invalidname") {
				echo "<h3>The name entered is invalid!</h3>";
			}
			else if($_GET['error'] == "invalidlocation") {
				echo "<h3>The location entered is invalid!</h3>";
			}
			
			else if($_GET['error'] == "collegetaken") {
				echo "<h3>The college is already registered!</h3>";
			}
		}
		else if (isset($_GET['submition'])) {
			if ($_GET['submition'] == "success") {
				echo "<h3>Submition successful!</h3>";
			}
		}
	?>
	<form action="includes/submit.inc.php" method="post">
		<div class="field">
		  <label class="label">Name of Institue</label>
		  <div class="control">
		    <input class="input" type="text" name="ins-name" placeholder="Name">
		  </div>
		</div>

		<div class="field">
		  <label class="label">Location</label>
		  <div class="control">
		    <input class="input" type="text" name="location" placeholder="Location">
		  </div>
		</div>


		<div class="field is-grouped">
		  <div class="control">
		    <button class="button is-link" name="col-sub" type="submit">Submit</button>
		  </div>
		</div>
	</form>
	</div>
</main>


<?php
	include "templates/footer.php";
?>