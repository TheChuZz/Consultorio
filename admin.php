<?php 
	$conexion=mysqli_connect('localhost','root','','registro');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../consultorio/style/style_admin.css">
	<title>ADMIN</title>
</head>
<body>
	<header>
	<div class="cabeza">
            <div class="title">
                <div class="login">
                    <a href="../consultorio/index.html">cerrar secion</a>
                </div>
            </div>
            <div class="enlaces">
                <a href="../consultorio/index.html">Inicio</a>
            </div>
        </div>
	</header>

	<main>
		<div class="conte">
			<div class="titulo">
				<h1>Usuarios recientemente agregados</h1>
			</div>
			<div class="datos">
			
	<table>
		<tr>
			<td>NOMBRE</td>
			<td>CORREO</td>
			<td>NUMERO</td>
			<td>CONSULTA</td>
		</tr>
		<?php 
		$sql="SELECT * from consulta";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['numero'] ?></td>
			<td><?php echo $mostrar['consulta'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	</div>
	</div>
	</main>	
</body>
</html>