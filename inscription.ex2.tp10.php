<?php
$fichier="compte1.txt";
if(isset($_POST['envoi'])){
$val1=$_POST['login'];
$val2=$_POST['pwd'];
$val3=$_POST['pwd12'];
if($val3==$val2){
  if($fich=fopen($fichier,"a+")){
   while(!feof($fich)){
    $str=fgets($fich);
     $tab=explode(" ", $str);
 if($val1==trim($tab[0])  ){
  header('location: inscription.html');
  exit;
   }
 }
  //fwrite($fich, $_POST['login']);
    fwrite($fich, $_POST['login']." ". $_POST['pwd']."\n");
  fclose($fich);
session_start();
  $_SESSION['monlogin']=$_POST['login'];
  header('location: member.php');
  exit;
 }
}
else{ header('location: inscription.html');
  exit;
}
}
 
?>