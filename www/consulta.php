
<html><head><meta charset="utf-8"></head>

<body>

<table width="70%" border="1px" align="center">
<tr align="center">
        <td>id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Altura</td>
    </tr>
<?php

$mysqli = new mysqli("mysql", "root", "1234", "Tarea6");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
echo "Conexión exitosa";

if ($result = $mysqli->query("SELECT * FROM USUARIO")) {
    #echo "Returned rows are: ", $result->num_rows ;
    
    $numfilas = $result->num_rows;
    #echo "El número de elementos es ".$numfilas;
    echo "</br>";
    
    for ($x=0;$x<$numfilas;$x++) {
      $fila = $result->fetch_object();
      echo "<tr>";
      echo "<td>".$fila->idUSUARIO." </td>";
      echo "<td>".$fila->nombre." </td>";
      echo "<td>".$fila->apellido."</td> ";
      echo "<td>".$fila->ALTURA."</td> ";
      echo "</tr>";
    }
    

    $result -> free_result();
  }
  $mysqli -> close();
?>
 </table>
</body>

</html>