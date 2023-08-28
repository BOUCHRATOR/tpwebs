<?php 
$nom=$_POST["nom"];
$titre=$_POST["liste"];

switch ($titre) {
	case "M":$titre="Monsieur";
		break;
	case "Mme":
		$titre="Madame";
		break;
	case "Melle":
		$titre="Mademoiselle";
		break;
	
}
print( "<span style='font-size:50px;'>Bonjour <i>$titre</i> $nom !</span>");
?>