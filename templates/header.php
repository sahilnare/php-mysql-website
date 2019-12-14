<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<title>CollegeRay</title>
</head>
<body>
	<header>
	<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="index.php">
				<img src="assets/img/alexei.jpg" width="112" height="28">
			</a>
			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbarBasicExample" class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item">Exams</a>

				<a href="colleges.php" class="navbar-item">Colleges</a>

				<a class="navbar-item">Blogs</a>

				<a class="navbar-item">About us</a>

				<a href="submit.php" class="navbar-item">Submit College</a>
			</div>

			<div class="navbar-end">
				<div class="navbar-item">
					<form action="search.php" method="post">
						<div class="field has-addons">
						  <div class="control">
						    <input class="input is-small" name="search" type="text" placeholder="Name or location of college">
						  </div>
						  <div class="control">
						    <button class="button is-link is-small" name="search-sub" type="submit">Search</button>
						  </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</nav>
	</header>
	