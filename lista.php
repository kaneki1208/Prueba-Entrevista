<?

require 'config/database.php';  

$query = $mysqli->query("SELECT * FROM itemsalm")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <Table>
        <thead>
            <tr>
                <th>OS</th>
                <th>Clasificado</th>
                <th>Description</th>
                <th>Bloque</th>
                <th>Columna</th>
                <th>Fila</th>
                <th>Lado</th>
                <th>NotaSalida</th>
                <th>TipCarga</th>

            </tr>
        </thead>


        <TBody>
                <?php
                while($resul = $query->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$resul["OrdenServ"]."</td>";
                    echo "<td>".$resul["Clasificado"]."</td>";
                    echo "<td>".$resul["Description"]."</td>";
                    echo "<td>".$resul["Bloque"]."</td>";
                    echo "<td>".$resul["Columna"]."</td>";
                    echo "<td>".$resul["Fila"]."</td>";
                    echo "<td>".$resul["Lado"]."</td>";
                    echo "<td>".$resul["NotaSalida"]."</td>";
                    echo "<td>".$resul["TipCarga"]."</td>";
                
                
             
                echo "<tr>";
                }
                
                
                ?>
            
        </TBody>
    </Table>
</body>
</html>