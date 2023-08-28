<!DOCTYPE html>
<html>
   <head>
	<meta charset="utf-8">
	<title>exercice1</title>
   </head>
<body>
	<?php
     if(isset($_COOKIE['combiendevisite'])){
		$count=$_COOKIE['combiendevisite'];
		echo 'Vous avez effectue '. $count .'visite <br>';
		$count++;
	} else{ $count=1;}	
	if(isset($_COOKIE['dernierevisite'])){
		$date=$_COOKIE['dernierevisite'];
		echo 'Votre derniere visite etait le '.$date.'<br>';
	} 
	else{ echo' Bienvenue a cette premiere visite !<br>';}	
	$dure=time()+2592000;
	setcookie("dernierevisite",date('d/m/Y'),$dure);
	
    setcookie("combiendevisite","$count",$dure);
	 ?>		
	 	
</body>
</html>