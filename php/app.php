<?php 

// Sites to Check
$sites = ['https://www.google.fr','https://www.youtube.com','https://www.apple.com/','https://www.microsoft.com','http://www.loicjulien.fr','http://www.doko.fr','http://barthloc.com','http://www.adem-expertise.com'] ;

// Variable
$site_en_ligne ;
$robots_txt_friendly ;
$meta_robot_friendly ;

function checkingSite ($data) {

	foreach ($data as &$url) {

		// ====================================================================================
		// Checking Http Status

		$headers = get_headers($url) ;
		$server_status = $headers[0] ;
		// echo $server_up ;
		if (strpos($server_status, '200') !== false) {
 			$site_en_ligne = "<div class=\"bg-success message text-center \">200</div>" ;
		} elseif (strpos($server_status, '301') !== false) {
			$site_en_ligne = "<div class=\"bg-warning message text-center \">301</div>" ;
		} else {
			$site_en_ligne = "<div class=\"bg-danger message text-center \">ERREUR</div>" ;
		}

		// ====================================================================================
		// Checking Robots.txt

		$robot_url = $url.'/robots.txt';
		$robots_status = get_headers($robot_url) ;
		$robots_up = $robots_status[0] ;
			if (strpos($robots_up, '200') == true) {
				$robot_contenu = file_get_contents($robot_url) ;
					if (strpos($robot_contenu, 'Disallow: /\n') !== false) {
			 			$robots_txt_friendly = "<div class=\"bg-danger message text-center \">En Disallow !</div>" ;
					} else {
						$robots_txt_friendly = "<div class=\"bg-success message text-center \">OK</div>" ;
					}
			} else {
				$robots_txt_friendly = "<div class=\"bg-warning message text-center \">Pas trouvé</div>" ;
		}

		// ====================================================================================
		// Checking meta robots

		$url_contenu = file_get_contents($url) ;
		if (strpos($url_contenu, '<meta name="robots" content="noindex') !== false) {
 			$meta_robot_friendly = "<div class=\"bg-danger message text-center \">En noindex !</div>" ;
		} else 
{			$meta_robot_friendly = "<div class=\"bg-success message text-center \">OK</div>" ;
		}

		// ====================================================================================
		// Returning data in a HTML table
		echo '<th scope="row">',$url,'</th><td>',$site_en_ligne,'</td><td>',$robots_txt_friendly,'</td><td>',$meta_robot_friendly,'</td></tr>' ;

	}

}

?>