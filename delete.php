<?php

include("config/database.php");
$con=conectar();

$OrdenServ=$_GET['id'];

$sql="DELETE FROM itemsalm  WHERE OrdenServ='$OrdenServ'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>
