<!--
# About me
Not a developer in real life but like to write some code sometimes.
Say hello at loic.j.julien@gmail.com
-->
<?php require 'php/app.php' ; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Robots.txt Checker : never be de-indexed by Google</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	<!-- Bootstrap css & js -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="css/app.css">

</head>

<body>

	<!-- Container ======================================================== -->
	<div class="row">	
		<div class="text-center" id="header">
			<h1 class="text-center">Robots.txt Checker</h1>
			Check is your robots.txt file is Google friendly and your website online !
		</div>
	</div>

	<div class="row">
		<div class="col-xs-6" id="content">
			<h2>Sites to check</h2>
				<textarea id="dataToCheck">http://www.loicjulien.fr/robots.txt
http://www.anj-communication.fr/robots.txt
http://www.nateev.fr/robots.txt
http://frankgonnet.tcitron.eneka.fr/robots.txt
http://us.marlavillas.com/robots.txt</textarea>
				<!--<button id="save" class="btn">SAVE</button> -->
				<button id="check" class="btn">CHECK</button>
		</div>
		<div class="col-xs-6" id="results">
			<h2>Checked sites</h2>
			<?php
				robotsCheck($sitesToCheck) ;
			?>
		</div>
	</div>

	<!-- Container - End ======================================================== -->

	<!-- JS -->
	<script src="js/app.js"></script>

</body>
</html>