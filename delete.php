<?php

include("config/database.php");
$con=conectar();

$OrdenServ=$_POST['OrdenServ'];

$sql="DELETE FROM itemsalm  WHERE OrdenServ='$OrdenServ'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: consulta.php");
    }
?>
