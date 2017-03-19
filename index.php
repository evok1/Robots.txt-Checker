<!--
# About me
Not a developer in real life but like to write some code sometimes.
Say hello at loic.j.julien@gmail.com
-->
<?php require 'php/app.php' ; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Robots.txt Checker : never be de-indexed by Google</title>
	<meta charset="utf-8">
	
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	<!-- Bootstrap CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/app.css">

</head>

<body>

	<!-- Container ======================================================== -->
	<div class="container">
		<h1>SEO status Check</h1>
		<table class="table">
			<thead>
				<th class="col-xs-3">URL</th>
				<th class="col-xs-2 text-center">Site en ligne</th>
				<th class="col-xs-2 text-center">Robots.txt Google Friendly</th>
				<th class="col-xs-2 text-center">Méta Robots Google Friendly</th>
			</thead>
			 <tbody>
				 <?php checkingSite($sites) ?>
			</tbody>
		</table>

		<div id="results">
			
		</div>
	</div>

	<!-- Container - End ======================================================== -->

	<!-- JS -->
	<script src="js/app.js"></script>

</body>
</html>