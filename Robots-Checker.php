<!--
# About me
Not a developer in real life but like to write some code sometimes.
Say hello at loic.j.julien@gmail.com
-->

<?php

// $robots = file_get_contents('http://www.loicjulien.fr/robots.txt') ;
$robots1 = 'Sitemap: http://www.loicjulien.fr/sitemap_index.xml User-agent: * Allow: / Disallow: /dossierpourrit' ;
$robots2 = 'Sitemap: http://www.loicjulien.fr/sitemap_index.xml User-agent: * Allow: / Disallow: /' ;
$robots3 = 'User-agent: * Allow: / Disallow: /dossierpourit' ;
$robots4 = 'Sitemap: http://www.loicjulien.fr/sitemap_index.xml User-agent: * Disallow: /dossierpourrit' ;
$robots5 = 'Disallow: /dossierpourrit' ;
$robots6 = 'Sitemap: http://www.loicjulien.fr/sitemap_index.xml User-agent: *' ;

function robotsCheck ($dataToCheck)
{
	$sitemap ;
	$allow ;
	$disallow ;

	// Recherche d'un sitemap
	if (preg_match('/Sitemap:/', $dataToCheck))
		$sitemap = true ;
		else $sitemap = false ;

	// Recherche d'un Allow: /
	if (preg_match('/Allow: \/$/', $dataToCheck))
		$allow = false ;
		else $allow = true ;

	// Recherche d'un Disallow: /
	if (preg_match('/Disallow: \/$/', $dataToCheck))
		$disallow = true ;
		else $disallow = false ;

	if ($sitemap == true and $allow == true and $disallow == false)
		$sitemapStatus = 'OK' ;
		else $sitemapStatus = 'Need modification !' ;

	echo 'Robots.txt status : ', $sitemapStatus ,' sitemap :', $sitemap, ' allow :', $allow, ' disallow :', $disallow, '<br>' ;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Robots.txt Checker : never be de-indexed by Google</title>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> -->
	<!-- Bootstrap css & js -->
	<!-- 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	-->

	<link rel="stylesheet" href="css/app.css">

</head>

<body>

	<!-- Container ======================================================== -->
	
	<div class="text-center" id="header">
		<h1 class="text-center">Robots.txt Checker</h1>
		Check is your robots.txt file is Google friendly and your website online !
	</div>
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8 col" id="content">
		<?php
		robotsCheck($robots1) ;
		robotsCheck($robots2) ;
		robotsCheck($robots3) ;
		robotsCheck($robots4) ;
		robotsCheck($robots5) ;
		robotsCheck($robots6) ;
		?>
		</div>
		<div class="col-xs-2">
	</div>

	<!-- Container - End ======================================================== -->

	<!-- JS -->
	<!-- <script src="js/app.js"></script> -->

</body>
</html>