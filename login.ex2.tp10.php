
<html>
   <head>
	<meta charset="utf-8">
	<title>page login</title>
	<style type="text/css">
		span{
			color: red;
		}
	</style>
   </head>
<body>
	<?php
if (isset($_POST['connex'])){
$fich="compte1.txt";
$line="";
	if($y=fopen($fich,"r")){
  while(!feof($y)){
  	$line=fgets($y);
  	 $tab=explode(' ', $line);
 $val1=$_POST['login'];
 $val2=$_POST['pwd'];
 if($val1==trim($tab[0])&& $val2==trim($tab[1])){
 	session_start();
 	$_SESSION['monlogin']=$_POST['login'];
 	header('location: member.php');
 	exit;
 }
 }
  
  fclose($y);}
  echo "<span >Valeur incorrecte de l'identification et/ou de mot de passe. Ressayer!</span>";
 }

?>
	<form action="login.php" method="post">
	<table>
	
    <tr><td>login:</td><td><input type="text" name="login" size="35"></td></tr>
    <tr><td>Mot de passe :</td><td><input type="password" name="pwd" size="35"></td></tr>
    <tr><td></td><td> <input type="submit" name="connex" value="connexion" size="35"></td></tr>
	
	</table>
	</form>
	Nouveau sur ce site ?   <a href="inscription.html">  Creer un compte</a>
</body>
</html>

