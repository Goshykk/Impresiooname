<?php
require 'conexion.php';

$Name = $_POST['name'];
$LastName = $_POST['lname'];
$LastName2 = $_POST['lname2'];
$Email = $_POST['email'];
//$Password = $_POST['pass'];
$Tipo = $_POST['Tipo'];

$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra=8;
for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
  $x = rand(0,$n);
  $pass.= $caracteres[$x];
}

	$sql= "CALL SP_User('".$Name."', '".$LastName."', '".$LastName2."', '".$Email."', '".$pass."', '".$Tipo."')";        
        $result1 = mysqli_query($conexion, $sql);
       $consulta = mysqli_query($conexion, "SELECT * from User");
        $i = mysqli_num_rows($consulta);
header("Location: /concho/indexG.html");

?>