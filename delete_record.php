<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/index.css">
  <title>Eliminar registro</title>
</head>
<body>
  <div class="container">
    <h1 class="bg-dark text-light p-1 text-center">Eliminando producto</h1>
    <?php  //delete_record
      //connection
      require_once './connection.php';
        // verificamos que la variable 'id' exista en el URL y verificamos que sea valida
        if (isset($_GET['id']) && is_numeric($_GET['id']))     {
        // tomamos su valor
        $id = $_GET['id'];
        // le pedimos a la base de datos que borre el registro
        $result = $connection->query("DELETE FROM Product WHERE id=$id");
        // redireccionamos de regreso a peliculas.php
        echo "<br>1 producto ha sido eliminado.";
        echo "<br>En 3 segundos volverás a la página anterior.";
        mysqli_close($connection);
        header("refresh:3;url=index.php");
        } else
        // si no era válido, vamos de regreso de todas maneras
        {
          header("refresh:3;url=index.php");
        }
    ?>

  </div>
  <script src="./bootstrap/js/jquery-3.5.1.slim.min.js"></script>
  <script src="./bootstrap/js/popper.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

