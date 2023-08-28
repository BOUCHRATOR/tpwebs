<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> php</title>
	<style type="text/css">
		body{
			border: 1px dotted black;
			padding:10px;
			width: 200px;
		}
		span{
			font-size: 17pt;
		}

	</style>
	</head>
<body>
	 	<?php
	 		$fichier="cpt.txt";
            $cp=0;
	 		if(file_exists("$fichier")){
	 		$cp=file_get_contents($fichier);
	 		$cp++;
	 		file_put_contents($fichier,$cp);
	 		
	 		}else{file_put_contents($fichier,1);
	 		}
	 		print "cette page visitee le <span> $cp</span> fois";

	 	?>
</body>
</html> 