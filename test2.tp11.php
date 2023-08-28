<html>
   <head>
	<meta charset="utf-8">
	<title>bases de donnees</title>
   </head>
<body>
	<?php
    $connexion=mysqli_connect("localhost","root","");
    if(!$connexion){echo "desole,la connexion est imposible";exit;}
    if(!mysqli_select_db($connexion,"superMarche")){echo "desole,acces a la base est imposible";exit;}
   $requete=mysqli_query($connexion,"INSERT INTO Acheteurs VALUES(4,'Boularcha',3467)");
    
    if(!$requete){
      echo "il ya un erreur";
    }
    mysqli_close($connexion);
?>
</table>
</body>
</html>
