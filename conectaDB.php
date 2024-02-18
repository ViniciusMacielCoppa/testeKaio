<?php

    $servername = "localhost";
    $database = "balacubaco";
    $username = "root";
    $password = "";

    // Create connection
    $conexao = new mysqli($servername, $username, $password, $database);
    // Check connection
    if(!$conexao){
        die("Falha na conexão:" . mysqli_connect_error());
    }

?>