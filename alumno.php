<?php
    include('conexion.php');	// Importamos el archivo conexion.php
    $conexion = conectar();	// Creamos la variable conexion y le asignamos el valor de la funcion conectar()

     $sql = "SELECT * FROM usuario";	// Creamos la variable sql y le asignamos el valor de la consulta
     $query=mysqli_query($conexion,$sql);	// Creamos la variable query y le asignamos el valor de la funcion mysqli_query()
     $row=mysqli_fetch_array($query);	// Creamos la variable row y le asignamos el valor de la funcion mysqli_fetch_array()

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumno Ingreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Formulario</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="id" placeholder="id usuario">
                    <input type="text" class="form-control mb-3" name="username" placeholder="nombre de usuario">
                    <input type="text" class="form-control mb-3" name='realname' placeholder='Nombre cliente'>
                    <input type="password" class="form-control mb-3" name='password' placeholder='Contrasena' require>
                    <input type="text" class="form-control mb-3" name='idgrupo' placeholder='ID Grupo'>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Nombre de Usuario</th> 
                                <th>Nombre CLiente</th>
                                <th>ID Grupo</th>
                                <th>Accion 1</th>
                                <th>Accion 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?> 
                                    
                                <tr>
                                    <th> <?php echo $row['id']?></th>
                                    <th> <?php echo $row['username']?></th>
                                    <th> <?php echo $row['realname']?></th>
                                    <th> <?php echo $row['idgrupo']?></th>
                                    <th>
                                        <a 
                                            href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar
                                        </a>
                                    </th>
                                    <th>
                                        <a 
                                            href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar
                                        </a>
                                    </th>
                                    
                                </tr>
                            <?php
                                }       
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>