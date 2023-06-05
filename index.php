<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportacion</title>
</head>
<body>
    <div class="row">
        <div class="table table-bordered">
            <center>
        <h3>Tabla Estudiantes</h3>
        <br>
        <div class="card-header">
                    <h5>Exportar Excel</h5>
                </div>
        </center>
        <br>
        <table class="table">
  <head>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">EDAD</th>
    </tr>
  </head>
            
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
        <center>
        <br>
        <a href="./excel.php" class="btn btn-success">> EXPORTAR <</a>
        
                <div>
                <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        </head>
        <body>
            </body>
            </html>
                    </div>
                    </div>
                    </center>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                </div>
            </body>
            </html>