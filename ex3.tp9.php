<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>entree</title>
	</head>
<body>
<?php
	$fich="bouchra.txt";
	$fich12="tor.txt";
	$fichier="Bonjour !!
un autre bonjour sur une nouvelle lighe ...
Encore un autre bonjour ...
Au revoir !";
if (file_exists('bouchra.txt')){
	$fentree=fopen($fich,"w");
	fwrite($fentree,$fichier);
	fclose($fentree);
}
    else{exit("imposible d'ouvrir le fichier");}
	if (file_exists("tor.txt")){
		$fsortie=fopen($fich12,"w");
		//strtoupper($fichier);
	fwrite($fsortie,strtoupper($fichier));
	fclose($fsortie);
}
    else{exit("imposible d'ouvrir le fichier");}
?>
</body>
</html>