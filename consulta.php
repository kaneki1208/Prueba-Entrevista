<?php 
    include("config/database.php");
    $con=conectar();

    $sql="SELECT *  FROM itemsalm";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Identificación de Inventario</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
</head>
<body>
    <div class="tm-container">        
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">KOMATSU MITSUI</h1>
                            <p class="tm-slogon">Sistema de Identificación de Inventario</p>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item ">
                                    <a class="nav-link tm-nav-link" href="Index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="Ingresos.php">Ingresos<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="Salida.php">Salidas</a>
                                </li>                            
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="Consulta.php">Consulta</a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>

            <div class="container mt-5">
                        <div class="col-md-16">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>OrdenServ</th>
                                        <th>Clasificado</th>
                                        <th>Description</th>
                                        <th>NotaSalida</th>
                                        <th>Posición</th>
                                        <th></th>
                                        <th></th><th></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['OrdenServ']?></th>
                                                <th><?php  echo $row['Clasificado']?></th>
                                                <th><?php  echo $row['Description']?></th>
                                                <th><?php  echo $row['NotaSalida']?></th>   
                                                <th><?php  echo $row['Bloque']."-".$row['Columna']."-".$row['Fila']."-".$row['Lado']?></th>   

                                                <th></th>
                                               
                                                <th align="right"><a href="actualizar.php?id=<?php echo $row['OrdenServ'] ?>" class="btn btn-info">Editar</a></th>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                    
                    </div>  
            </div>
            
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
    </body>
</html>