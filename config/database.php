<?php
function conectar(){
    $host="localhost";
    $user="piero";
    $pass="123456";

    $bd="komatsu";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>