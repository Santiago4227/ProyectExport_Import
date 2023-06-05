<?php
require 'vendor/autoload.php';
header("content-type: application/xls");
header("content-Disposition: attachment; filename= archivo.xls");
?>
<table>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </tr>

            <?php
            include ("./conexion.php");
            $sql="SELECT * FROM nombres";
            $ejecutar=mysqli_query($conexion, $sql);
            while($fila=mysqli_fetch_array($ejecutar)) {

            ?>
            <tr>
                <td> <?php echo $fila[0] ?></td>
                <td> <?php echo $fila[1] ?></td>
                <td> <?php echo $fila[2] ?></td>
                <td> <?php echo $fila[3] ?></td>
            </tr>
            <?php } ?>
        </table>