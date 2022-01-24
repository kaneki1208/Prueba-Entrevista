<?php 
    include("config/database.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM itemsalm WHERE OrdenServ='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="OrdenServ" value="<?php echo $row['OrdenServ']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Clasificado" placeholder="Clasificado" value="<?php echo $row['Clasificado']  ?>">
                                <input type="text" class="form-control mb-3" name="Description" placeholder="Description" value="<?php echo $row['Description']  ?>">
                                <input type="text" class="form-control mb-3" name="Bloque" placeholder="Bloque" value="<?php echo $row['Bloque']  ?>">
                                <input type="text" class="form-control mb-3" name="Columna" placeholder="Columna" value="<?php echo $row['Columna']  ?>">
                                <input type="text" class="form-control mb-3" name="Fila" placeholder="Fila" value="<?php echo $row['Fila']  ?>">
                                <input type="text" class="form-control mb-3" name="Lado" placeholder="Lado" value="<?php echo $row['Lado']  ?>">
                                <input type="text" class="form-control mb-3" name="NotaSalida" placeholder="NotaSalida" value="<?php echo $row['NotaSalida']  ?>">
                                <input type="text" class="form-control mb-3" name="TipCarga" placeholder="TipCarga" value="<?php echo $row['TipCarga']  ?>">

                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>