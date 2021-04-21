<?php
    /* 
        Indicamos que el código escrito en 
        config.php lo vamos a usar en este documento.
    */
    require('config.php');
    
    // Creamos $connection para agregar los datos que nos pide la conexión.
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT, DB_CHARSET);

    // Verificamos si existe un error o no con la conexión.
    if($connection->connect_errno) {
        echo "La conexión ha fallado.";
    } else {
        echo "La conexión ha sido éxitosa. :)";
    }

?>