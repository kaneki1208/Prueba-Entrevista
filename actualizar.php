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
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="Ingresos.php">Ingresos<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="Salida.php">Salidas</a>
                                </li>                            
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="Consulta.php">Consulta</a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                                
                                <input type="hidden" name="OrdenServ" value="<?php echo $row['OrdenServ']  ?>">
                                <h5><b>Clasificación</b></h5>
                                <input type="text" class="form-control mb-3" name="Clasificado" placeholder="Clasificado" value="<?php echo $row['Clasificado']  ?>">
                                <h5><b>Descripcion</b></h5>
                                <input type="text" class="form-control mb-3" name="Description" placeholder="Description" value="<?php echo $row['Description']  ?>">
                              
                                <div class="row" >
                                <div  class="col-md-3">
                                <h5><b>Bloque</b></h5>
                                <select name="Bloque" id="cars" value="<?php echo $row['Bloque']  ?>">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                                </div>
                                <div  class="col-md-3">

                                <h5><b>Columna</b></h5>
                                <select name="Columna" id="cars" value="<?php echo $row['Columna']  ?>">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>    
                                </div>    
                                <div  class="col-md-3">
                                <h5><b>Fila</b></h5>
                                <select name="Fila" id="cars" value="<?php echo $row['Fila']  ?>">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                </div>
                                <div  class="col-md-3">
                                <h5><b>Lado</b></h5>
                                <select name="Lado" id="cars" value="<?php echo $row['Lado']  ?>">
                                    <option value="DERECHO">D</option>
                                    <option value="IZQUIERDO">I</option>
                                    <option value="UNICO">U</option>
                                </select>
                                </div>
                                </div>
                                <h5><b>Nota de Salida</b></h5>

                                <input type="text" class="form-control mb-3" name="NotaSalida" placeholder="NotaSalida" value="<?php echo $row['NotaSalida']  ?>">
                                <h5><b>Tipo de Carga</b></h5>

                                <input type="text" class="form-control mb-3" name="TipCarga" placeholder="TipCarga" value="<?php echo $row['TipCarga']  ?>">

                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
    <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2022 KOMATSU MITSUI</p>
                </footer>
            </div>  
        </div>

    
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>