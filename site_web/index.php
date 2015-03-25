 <!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Le Système de Guanai</title>
		<link rel="stylesheet" type="text/css" href="desktop.css" media="screen and (min-width: 481px)">
		<link rel="stylesheet" type="text/css" href="smartphone.css" media="screen and (min-width: 0px) and (max-width: 480px)">
		
	</head>
	<body>
		<?php
			$xml = new SimpleXMLElement('systemSolaire.xml', Null, True);  
			$planet = $xml->xpath('/planet');

			foreach($planet as $ua) {  
				echo $ua->image;  
			}
			$newsRss = array();
			$newsRss["title"] = 
		?>
		
	</body>
</html>