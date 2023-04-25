<?php
 require 'conexion2.php';
  
 $nombre  = $_POST['nombre'];
 $email  = $_POST['email'];
 $numero = $_POST['numero'];
 $comentarios = $_POST['comentarios'];

$insertar = "INSERT INTO consulta VALUES ('$nombre','$email','$numero','$comentarios') ";

$query = mysqli_query($cone, $insertar);

if($query){

   echo "<script> alert('Registro Correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('Error');
    location.href = '../index.html';
    </script>";
}

?>

