<?php
    include('conexion.php');	// Importamos el archivo conexion.php
    $conexion = conectar();	// Creamos la variable conexion y le asignamos el valor de la funcion conectar()

    //Crea variable para solicitar el dato del id del estudiante a eliminar
    $id = $GET['id'];
    //Eliminar datos de la BD
    $sql = "DELETE FROM usuario WHERE id = '$id'";
    $query=mysqli_query($conexion,$sql);	// Creamos la variable query y le asignamos el valor de la funcion mysqli_query()

    //Validacion con un if, si resulta que me devuelva a la pagina de ingreso, si no, me muestra un mensaje de error
    if($query){
        echo('<script>alert("Registro eliminado correctamente");</script>');
        Header("Location: alumno.php");
    }else{
        echo('<script>window.location.href="ingreso.php";</script>');
    }

?>