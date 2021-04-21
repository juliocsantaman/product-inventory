<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./styles/index.css">
	<title>Insertando registro</title>
</head>

<body>
	<div class="container">
		<h1 class="bg-dark text-light p-1 text-center">Guardando producto</h1>
		<?php
		require_once 'connection.php';

		$_query = "INSERT INTO Product (product_name, brand, made_in, price) 
		VALUES 
		('$_POST[product_name]','$_POST[brand]','$_POST[made_in]', $_POST[price])"; //query de SQL
		
		$results = $connection->query($_query); //objeto nuevo
		if (!$results) { //revisamos errores
			die($connection->error);
		}
		// Si todo sale bien, hay que avisarle al usuario
		echo "<br>1 producto ha sido capturado.";
		echo "<br>En 3 segundos volverás a la página anterior.";
		mysqli_close($connection);
		header("refresh:3;url=index.php");
		//refresca la página en 3 segundos y redirige a la URL indicada
		?>

	</div>
	<script src="./bootstrap/js/jquery-3.5.1.slim.min.js"></script>
  <script src="./bootstrap/js/popper.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>