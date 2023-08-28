<html>
   <head>
	<meta charset="utf-8">
	<title>bases de donnees</title>
   </head>
<body>
	<h4> la table 'acheteurs' de BD 'superMarche' :</h4>
	<table border="1" cellspacing="0" width="300">
	  <tr> <th>Id_acheteur</th> <th> Nom</th><th> Compte</th></tr>
	
	<?php
    $connexion=mysqli_connect("localhost","root","");
    if(!$connexion){echo "desole,la connexion est imposible";exit;}
    if(!mysqli_select_db($connexion,"superMarche")){echo "desole,acces a la base est imposible";exit;}
    $result=mysqli_query($connexion,"select*from acheteurs");
    if($result){
    	while($line=mysqli_fetch_row($result)){
    		echo '<tr align="center"><td>'.$line[0].'</td><td>'.$line[1].'</td><td>'.$line[2].'</td></tr>';
    	}
    }
    else{
    	echo "Erreur dans l'exucution de la requete.".mysqli_error($connexion);
    }
    mysqli_close($connexion);
?>
</table>
</body>
</html>
