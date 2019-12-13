<?php
	include "templates/header.php";
?>


<main>
	<div class="container is-fluid">
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