<?php
//$conexion =  new mysqli('localhost', "root", "", 'visitasjesuitas'); //LOCAL
$conexion =  new mysqli('2daw.esvirgua.com', "user2daw_15", "N$7Lm+6sdAf&", 'user2daw_BD1-15'); //HOST

$sql = "SELECT * FROM lugar";
$resultado = $conexion ->query($sql);

echo "<table><tr><th style='border: 1px solid black'>IP</th><th style='border: 1px solid black'>Lugar</th><th style='border: 1px solid black'>Descripcion</th><th style='border: 1px solid black'>Borrado</th><th style='border: 1px solid black'>Modificar</th></tr></tr>";
while($fila = $resultado ->fetch_array()){
    echo "<tr><td style='border: 1px solid black'>".$fila["ip"]."</td><td style='border: 1px solid black'>".$fila["lugar"]."</td><td style='border: 1px solid black'>".$fila["descripcion"]."</td><td style='border: 1px solid black'><a href='procesos.php?ip=".$fila["ip"]."&opcion=1'>Borrar</a></td><td style='border: 1px solid black'><a href='procesos.php?ip=".$fila["ip"]."&opcion=2'>Modificacion</a></td></tr>";
}
echo "</table>";