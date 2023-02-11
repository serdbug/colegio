<?php

include('database.php');
$perro = $_REQUEST["midato"];

echo $perro;




//----------------------------------------------------------

 echo "<table>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Direccion</th>";
echo "<th>Nota</th>";
echo "<th>Cara</th>";
echo "<th>Actitud</th>";
echo "<th>Faltas</th>";
echo "</tr>";

     


$consulta = "SELECT customerid, city , id , address FROM alumnos WHERE postalcode='$perro'  ORDER by ID DESC ";
//WHERE customerid='$perro'

if ($resultado = $mysqli->query($consulta)) {

	  


    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
       
        


echo "<tr>";

echo '<td><input type="text" id="nombre'.$fila["id"].'" value="' . $fila["customerid"].'"></td>';

echo '<td><input type="text" id="ctgr'.$fila["id"].'" value="' .  $fila["city"] . '"></td>';

echo '<td><input type="text" id="direccion'.$fila["id"].'" value="' .  $fila["address"] . '"></td>';

echo "<td>  </td>";

echo "<td>  </td>";

echo "<td>  </td>";

echo "<td>  </td>";
echo '<td><button type="submit" id="update" onclick = "accion('.$fila["id"].');">GUARDAR</button></td>';
echo "</tr>";



    }

    /* liberar el conjunto de resultados */
    $resultado->free();
    echo "</table>";
}

/* cerrar la conexión */
$mysqli->close();
?>