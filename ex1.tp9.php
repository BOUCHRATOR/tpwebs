<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>calcul de n! avec php</title>
	<style type="text/css">
		form{
			border: 1px dotted black;
			padding: 10px;
			width: 340px;
		}

	</style>
	</head>
<body>
	 		<form method="POST" action="ex1.php" enctype="multipart/form-data" name="t4">
	 			<label>Entrer un entier positif:
	 			<input type="text" size="10" name="nombre">
	 			<input type="submit" name="envoi" value="Envoi" >
	 			</label>
	 		</form>
	 		
	 		<?php
	 			if (isset($_POST["nombre"])){ $nombre=$_POST["nombre"]; }
	 			 function fact_php($nombre){  
	 			if($nombre==0||$nombre==1){ return 1; }
	 			else{
	 			 $fact=$nombre*fact_php($nombre-1); 
	 			 return $fact;}
	 			} 
	 			
	 		?>
	 		<script type="text/javascript">
	 			var nb=<?php echo $nombre ;?>;
	 			var result=<?php echo fact_php($nombre); ?>;
	 			alert(nb+"!="+result);
	 		</script>

</body>
</html>