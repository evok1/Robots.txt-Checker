<?php 

// Sites to Check
$sites = ['https://www.google.fr','https://www.youtube.com','https://www.apple.com/','https://www.microsoft.com','http://barthloc.com','http://juku.fr'] ;

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
			$site_en_ligne = "<div class=\"bg-danger message text-center \">ERROR</div>" ;
		}

		// ====================================================================================
		// Checking Robots.txt

		$robot_url = $url.'/robots.txt';
		$robots_status = get_headers($robot_url) ;
		$robots_up = $robots_status[0] ;
			if (strpos($robots_up, '200') == true) {
				$robot_contenu = file_get_contents($robot_url) ;
					if (strpos($robot_contenu, 'Disallow: /\n') !== false) {
			 			$robots_txt_friendly = "<div class=\"bg-danger message text-center \">Disallow !</div>" ;
					} else {
						$robots_txt_friendly = "<div class=\"bg-success message text-center \">OK</div>" ;
					}
			} else {
				$robots_txt_friendly = "<div class=\"bg-warning message text-center \">Not found</div>" ;
		}

		// ====================================================================================
		// Checking meta robots

		$url_contenu = file_get_contents($url) ;
		if (strpos($url_contenu, 'noindex') !== false) {
 			$meta_robot_friendly = "<div class=\"bg-danger message text-center \">Noindex !</div>" ;
		} else 
{			$meta_robot_friendly = "<div class=\"bg-success message text-center \">OK</div>" ;
		}

		// ====================================================================================
		// Returning data in a HTML table
		echo '<th scope="row">',$url,'</th><td>',$site_en_ligne,'</td><td>',$robots_txt_friendly,'</td><td>',$meta_robot_friendly,'</td></tr>' ;

	}

}

?>