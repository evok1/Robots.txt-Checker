<?php

// Checking if site is online
// Getting robots.txt data from site

// Checking robots.txt
function robotsCheck($url)
{
	// Going through the data array
	for ($i = 0 ; $i < count($url) ; ++$i) {
		
		echo 'Site à vérifier : ', $url[$i], '<br>' ;

		// Check Http Status
		$headers = get_headers($url[$i]) ;
		$serverUp = $headers[0] ;

		// Getting Robots.txt content
		$dataToCheck = file_get_contents($url[$i]) ;

		echo 'Données du Robos.txt : <br>', $dataToCheck, '<br>' ;

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
		echo $url[$i], ' <br> status : ', $serverUp,' <br> sitemap : ', $sitemapStatus /*,' sitemap :', $sitemap, ' allow :', $allow, ' disallow :', $disallow*/, '<br> <br>' ;
	}
}

?>