<?php
    include'conexion.php';

    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $validar_login=mysqli_query($cone,"SELECT*FROM datos WHERE
    usuario='$usuario'and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login)>0){
         header("location:../admin.php");
         exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe,por favor verifique los datos introducidos");
            window.location = "../index.html";
        </script>
      ';
    }
        exit;
?>