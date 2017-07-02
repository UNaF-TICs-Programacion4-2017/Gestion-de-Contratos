<?php
function leerDatosHaciaAdelante($gbd) {
  //$sql = 'SELECT hand, won, bet FROM mynumbers ORDER BY BET';
  $sql = 'SELECT desde, hasta, universidad, titulo, rela_usuario FROM titulos_obtenidos WHERE rela_usuario = \''.$idusuario.'\''
  try {
    $sentencia = $gbd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $sentencia->execute();
    while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
      //$datos = $fila[0] . "\t" . $fila[1] . "\t" . $fila[2] . "\n";
      //print $datos;
      echo "<tr>";                                              
      echo "<td>".$fila['desde']."</td>";
      echo "<td>".$fila['hasta']."</td>"; 
      echo "<td>".$fila['titulo']."</td>";
      echo "<td>".$fila['universidad']."</td>";
      echo "<td><a href= \"cv_estudios_cursados_modificar.php?id_titulo=$fila[id_titulo]\">Modificar</a></td>";
      echo "<td><a href=\"cv_estudios_cursados_borrar.php?id_titulo=$fila[id_titulo]\" onClick=\"return confirm('Estas seguro de querer borrar?')\" >Borrar</a></td>"; 
    }
    $sentencia = null;
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }
}
?>