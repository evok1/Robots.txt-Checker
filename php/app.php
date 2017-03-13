<?php 
	// Récupérer les url du tableau
		// pour chaque URL
	 		// Véirifier si le site est en ligne
	 		// Vérifier sur le robots.txt est présent
	 		// Vérifier sur le robots.txt bloque Google
	 		// Vérifier sur le site bloque Google
			// Vérifier sur le sitemap est présent
	 		// Afficher le Status


function checkingSite ($url) {
		
		// Check Http Status
		$headers = get_headers($url[$i]) ;
		$serverUp = $headers[0] ;
		print($serverUp);

		// Getting Robots.txt content
		$dataToCheck = file_get_contents($url[$i]) ;
		echo 'Données du Robos.txt : <br>', $dataToCheck, '<br>' ;

}



/*

echo 'Site à vérifier : ', $url[$i], '<br>' ;
		
		
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
		echo $url[$i], ' <br> status : ', $serverUp,' <br> sitemap : ', $sitemapStatus /*,' sitemap :', $sitemap, ' allow :', $allow, ' disallow :', $disallow*.

*/

?>