<!--
# About me
Not a developer in real life but like to write some code sometimes.
Say hello at loic.j.julien@gmail.com
-->

<?php

// Checking if site is online
// Getting robots.txt data from site

// Checking robots.txt
function robotsCheck($url)
{
	// Going through the data array
	for ($i = 0; $i < count($url); ++$i) {
		// Check Http Status
		$headers = get_headers($url);
		$serverUp = $headers[0];

		// Getting Robots.txt content
		$dataToCheck = file_get_contents($url) ;

		// CHecking for Sitemap:
		if (preg_match('/Sitemap:/', $dataToCheck))
			$sitemap = true ;

		// CHecking for Allow: /
		if (preg_match('/Allow: \/$/', $dataToCheck))
			$allow = false ;
			else $allow = true ;

		// CHecking for  Disallow: /
		if (preg_match('/Disallow: \/$/', $dataToCheck))
			$disallow = true ;

		// Check if Robots.txt is Google friendly
		if ($sitemap == true and $allow == true and $disallow == false)
			$sitemapStatus = 'OK' ;
			else $sitemapStatus = 'Need modification !' ;

		// Printing results
		echo $url[i], ' > status : ', $serverUp,' > sitemap : ', $sitemapStatus /*,' sitemap :', $sitemap, ' allow :', $allow, ' disallow :', $disallow*/, '<br>' ;
	}
}

?>

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
			<h2>Données à vérifier</h2>
			<?php
				$sitesToCheck = array('http://www.loicjulien.fr/robots.txt',
					'http://www.anj-communication.fr/robots.txt',
					'http://www.nateev.fr/robots.txt',
					'http://www.barthloc.com/robots.txt',
					'http://us.marlavillas.com/robots.txt',
					) ;
				print_r($sitesToCheck) ;
			?>
		</div>
		<div class="col-xs-6" id="results">
			<h2>Données vérifiées</h2>
			<?php
				robotsCheck($sitesToCheck) ;
			?>
		</div>
	</div>

	<!-- Container - End ======================================================== -->

	<!-- JS -->
	<!-- <script src="js/app.js"></script> -->

</body>
</html>