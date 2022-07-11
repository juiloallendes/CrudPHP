<?php
include('conexion.php');	// Importamos el archivo conexion.php
$conexion = conectar();	// Creamos la variable conexion y le asignamos el valor de la funcion conectar()

//Crear Variable por datos a solicitar segun el NAME de la BD
$id = $_POST['id'];
$username = $_POST['username'];
$realname = $_POST['realname'];
$idgrupo = $_POST['idgrupo'];
$password = $_POST['password'];

//Insertar datos en la BD
$sql = "INSERT INTO usuario (id, username, realname, idgrupo) VALUES ('$id', '$username', '$realname', '$idgrupo')";
$query=mysqli_query($conexion,$sql);	// Creamos la variable query y le asignamos el valor de la funcion mysqli_query()

//Validacion con un if, si resulta que me devuelva a la pagina de ingreso, si no, me muestra un mensaje de error
if($query){
    echo('<script>alert("Registro insertado correctamente");</script>');
    Header("Location: alumno.php");
}else{
    echo('<script>window.location.href="ingreso.php";</script>');
}



?>