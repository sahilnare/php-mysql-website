<?php
	include "templates/header.php";
?>


<main>
	<div class="container is-fluid">
	<form action="includes/getcollege.inc.php" method="get">
		
		<div class="field is-grouped">
		  <div class="control">
		    <button class="button is-link" name="col-get" type="submit">Get Colleges</button>
		  </div>
		</div>
	</form>
	</div>
</main>


<?php
	include "templates/footer.php";
?>