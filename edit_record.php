<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/index.css">
  <title>Editar producto</title>
</head>

<body>
  <div class="container">
    <h1 class="bg-dark text-light p-1 text-center">ACTUALIZAR</h1>

    <?php
    include("connection.php");
    if (!isset($_POST["update"])) {
      $id = $_GET["id"];
      $product_name = $_GET["product_name"];
      $brand = $_GET["brand"];
      $made_in = $_GET["made_in"];
      $price = $_GET["price"];
    } else {
      $id = $_POST["id"];
      $product_name = $_POST["product_name"];
      $brand = $_POST["brand"];
      $made_in = $_POST["made_in"];
      $price = $_POST["price"];

      $query = "UPDATE Product SET product_name='$product_name', brand='$brand', made_in='$made_in', price=$price WHERE id=$id";

      $connection->query($query);

      header("location: index.php");
    }


    ?>

    <form name="form1" class="form-group" method="POST" action="">
      <label for="id"></label>
      <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
      <br>
      <label for="product_name">Nombre</label>
      <input type="text" name="product_name" class="form-control" value="<?php echo $product_name ?>">
      <br>
      <label for="brand">Marca</label>
      <input type="text" name="brand" class="form-control" value="<?php echo $brand ?>">
      <br>
      <label for="made_in">Hecho en</label>
      <input type="text" name="made_in" class="form-control" value="<?php echo $made_in ?>">
      <br>
      <label for="price">Precio</label>
      <input type="text" name="price" class="form-control" value="<?php echo $price ?>">
      <br>
      <input type="submit" name="update" class="btn btn-success" value="Update">
    </form>

    <script src="./bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="./bootstrap/js/popper.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
  </div>
</body>

</html>