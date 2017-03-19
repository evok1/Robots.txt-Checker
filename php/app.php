<?php 

$sites = ['https://www.google.fr','https://www.youtube.com','https://www.apple.com/','https://www.microsoft.com',] ;

$site_en_ligne ;
$robots_txt_friendly ;
$meta_robot_friendly ;

function checkingSite ($data) {

	foreach ($data as &$url) {

		// Print Test URL
		// echo 'URL à tester : ', $url, '<br>' ;

		// Checking Http Status
		$headers = get_headers($url) ;
		$server_up = $headers[0] ;
		// echo $server_up ;
		if (strpos($server_up, '200') !== false) {
 			// echo 'Status : le site en ligne <br>' ;
 			$site_en_ligne = "<div class=\"bg-success message text-center \">OK</div>" ;
		} else {
			// echo 'Status : le site ne semble pas accessible <br>' ;
			$site_en_ligne = "Pas OK" ;
		}
		
		// Checking Robots.txt
		$robot_url = $url.'/robots.txt';
		$robot_contenu = file_get_contents($robot_url) ;
		if (strpos($robot_contenu, 'Disallow: /\n') !== false) {
 			// echo 'Robots.txt : Google est bloqué <br>' ;
 			$robots_txt_friendly = "Pas OK" ;
		} else {
			// echo 'Robots.txt : Google n\'est pas bloqué <br>' ;
			$robots_txt_friendly = "<div class=\"bg-success message text-center \">OK</div>" ;
		}

		// Checking meta robots
		$url_contenu = file_get_contents($url) ;
		if (strpos($url_contenu, '<meta name="robots" content="noindex, nofollow">') !== false) {
 			// echo 'Méta Robots : Google est bloqué <br>' ;
 			$meta_robot_friendly = "Pas OK" ;
		} else {
			// echo 'Méta Robots : Google n\'est pas bloqué <br>' ;
			$meta_robot_friendly = "<div class=\"bg-success message text-center \">OK</div>" ;
		}


		echo '<th scope="row">',$url,'</th><td>',$site_en_ligne,'</td><td>',$robots_txt_friendly,'</td><td>',$meta_robot_friendly,'</td></tr>' ;

	}

}

?>