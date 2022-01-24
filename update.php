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

$sql="UPDATE itemsalm SET  Clasificado='$Clasificado',Description='$Description',Bloque='$Bloque',Columna='$Columna',Fila='$Fila',Lado='$Lado',NotaSalida='$NotaSalida',TipCarga='$TipCarga' WHERE OrdenServ='$OrdenServ'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: consulta.php");
    }
?>