<html>
   <head>
	<meta charset="utf-8">
	<title>page des membres</title>
   </head>
<body>
	<?php
  session_start();
  if(!isset($_SESSION['monlogin'])){header('location:./login.php');}
   echo "Bonjour<b>".$_SESSION['monlogin']."<b>!<br>";
   echo '<a href="./logout.php">Deconnexion</a>'

?>
	
</body>
</html>
