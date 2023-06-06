        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exportacion y Importacion</title>
        </head>
        <body>
            <div class="row">
                <div class="table table-bordered">
                    <center>
                <h1>Tabla Estudiantes</h1>
                <br>
                <div class="card-header">
                            <h4>Exportar Excel</h4>
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
                <br><br>    <hr>
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

            <?php
            session_start();
            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title></title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
            </head>
            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <center>
                            <div class="card-header">
                            <h4>Importar Excel</h4>
                        </div>
                            </center>
                            <hr>
                            <?php
                            if(isset($_SESSION ['status']))
                            {
                                echo "<h5>".$_SESSION ['status']."</h5>";
                                unset($_SESSION['status']);
                            }
                            ?>
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="Card card-body shadow">
                                    <div class="row">
                                        <div class="col-md-2 my-auto">
                                            <h5>Selecione un archivo</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="import_file" class="form-control" />
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" name="import_file_btn" class="btn btn-success"> > IMPORTAR <</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </body>
            </html>            