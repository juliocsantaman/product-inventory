<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/index.css">
  <title>Inventario de productos</title>
</head>

<body>

  <div class="container">

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/product-01.jpg" class="d-block w-100" alt="film">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/product-02.jpg" class="d-block w-100" alt="demostration">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
          </div>
        </div>
        <div class="carousel-item">
        <img src="./img/product-03.jpg" class="d-block w-100" alt="cinema">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php
    include("connection.php");

    // Creamos nuestra sentencia SQL.
    $query = "SELECT * FROM Product ORDER BY id ASC";
    // Guardamos el resultado de la query.
    $results = $connection->query($query);
    echo "</br> </br>";
    echo "<div class='table-responsive'>";
    echo "<h3 class='bg-dark text-light text-center p-1'> Enlistando los productos </h3>";
    // Va a mostrar registros mientras existan en la variable $results.
    while ($row = $results->fetch_assoc()) {
      
      echo "<table class='table table-info'>";
      echo "<thead>";
      echo "<th>" . "ID" . "</th>";
      echo "<th>" . "Nombre" . "</th>";
      echo "<th>" . "Marca" . "</th>";
      echo "<th>" . "Hecho en" . "</th>";
      echo "<th>" . "Precio" . "</th>";
      echo "</thead>";
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['product_name'] . "</td>";
      echo "<td>" . $row['brand'] . "</td>";
      echo "<td>" . $row['made_in'] . "</td>";
      echo "<td>" . $row['price'] . "</td>";
      echo "<td>" . "<a class='btn btn-primary'" . "href='edit_record.php?id=$row[id] & product_name=$row[product_name] & brand=$row[brand] & made_in=$row[made_in] & price=$row[price]'>" . "Editar </a>" . "</td>";
      echo "<td>" . "<a class='btn btn-danger'" . "href='delete_record.php?id=$row[id]'>" . "Eliminar </a>" . "</td>";
      echo "</tr>";
      echo "</table>";
      
    }
    echo "</div>";

    $results->close();
    $connection->close();
    ?>

    <br>
    <h3 class="bg-dark text-light text-center p-1">INSERTA NUEVOS PRODUCTOS </h3>
    <form class="form-group" method='post' action='add_record.php'>
      <p>Captura todos los campos:</p>
      <label for="product_name">Nombre</label>
      <input class="form-control" type='text' name='product_name' size='30'>
      <br>
      <label for="brand">Marca</label>
      <input class="form-control" type='text' name='brand' size='30'>
      <br>
      <label for="made_in">Hecho en</label>
      <input class="form-control" type='text' name='made_in' size='1'>
      <br>
      <label for="price">Precio</label>
      <input class="form-control" type='text' name='price' size='1'>
      <br>
      <input class="form-control btn-success" type='submit' value='Capturar'>
    </form>
    <hr>
  </div>




  <script src="./bootstrap/js/jquery-3.5.1.slim.min.js"></script>
  <script src="./bootstrap/js/popper.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>