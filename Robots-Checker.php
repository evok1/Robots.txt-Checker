<!--
# About me
Not a developer in real life but like to write some code sometimes.
Say hello at loic.j.julien@gmail.com
-->

<!--
Allow: /
Disallow: /
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
echo '<br>', 'Testing ', $dataToCheck, '<br>' ;

$sitemap ;
$allow ;
$disallow ;

// Recherche d'un sitemap
if (preg_match('/Sitemap:/', $dataToCheck))
	$sitemap = true ;
	//echo 'Sitemap présent', '<br>' ;
	else $sitemap = false ;

// Recherche d'un Allow: /
if (preg_match('/Allow: \/$/', $dataToCheck))
	$allow = false ;
	//echo 'N\'est pas présent', '<br>' ;
	else $allow = true ;

// Recherche d'un Disallow: /
if (preg_match('/Disallow: \/$/', $dataToCheck))
	$disallow = true ;
	//echo 'Disallow: / n\'est pas présent', '<br>' ;
	else $disallow = false ;

if ($sitemap == true and $allow == true and $disallow == false)
	$sitemapStatus = 'OK' ;
	else $sitemapStatus = 'Need modification !' ;

echo 'Robots.txt status : ', $sitemapStatus ,' sitemap :', $sitemap, ' allow :', $allow, ' disallow :', $disallow, '<br>' ;
}

robotsCheck($robots1) ;
robotsCheck($robots2) ;
robotsCheck($robots3) ;
robotsCheck($robots4) ;
robotsCheck($robots5) ;
robotsCheck($robots6) ;

/*
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);
 
// Notez notre utilisation de ===.  == ne fonctionnerait pas comme attendu
// car la position de 'a' est la 0-ième (premier) caractère.
if ($pos === false) {
	echo "La chaîne '$findme' ne se trouve pas dans la chaîne '$mystring'";
} else {
	echo "La chaine '$findme' a été trouvée dans la chaîne '$mystring'";
	echo " et débute à la position $pos";
}
*/

/*
if (preg_match('/Sitemap:/', $robots))
	$robotSitemap = 'Sitemap présent' ;
if (preg_match('/Allow: \//', $robots))
    	$robotAllow = 'Allow: / présent' ;
if (preg_match('/Disallow: \//', $robots))
	$robotDisallow = 'Disallow: / présent' ;
*/

/*
function searchRobotsTxt ($data)
{
if (preg_match('/Sitemap:/', $data))
	$robotSitemap = 'Sitemap présent' ;
if (preg_match('/Allow: \//', $data))
    	$robotAllow = 'Allow: / présent' ;
if (preg_match('/Disallow: \//', $data))
	$robotDisallow = 'Disallow: / présent' ;
}
*/

// searchRobotsTxt($robots) ;

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

</head>

<body>

	<!-- Container ======================================================== -->
	
	<div class="text-center" id="header">
		<h1 class="text-center">Robots.txt Checker</h1>
		Check is your robots.txt file is Google friendly and your website online !
	</div>
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8 col" id="content">

		</div>
		<div class="col-xs-2">
	</div>

	<!-- Container - End ======================================================== -->

	<!-- JS -->
	<!-- <script src="js/app.js"></script> -->

</body>
</html>