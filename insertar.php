<?php
include("config/database.php");
$con=conectar();

$OrdenServ=$_POST['OrdenServ'];
$Clasificado=$_POST['Clasificado'];
$Description=$_POST['Description'];
$Bloque=$_POST['Bloque'];
$Columna=$_POST['Columna'];
$Fila=$_POST['Fila'];
$Lado=$_POST['Lado'];
$NotaSalida=$_POST['NotaSalida'];
$TipCarga=$_POST['TipCarga'];

$sql="INSERT INTO itemsalm VALUES('$OrdenServ','$Clasificado','$Description','$Bloque','$Columna','$Fila','$Lado','$NotaSalida','$TipCarga')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Ingresos.php");
    
}else {
}
?>