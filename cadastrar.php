<?php
    include_once("conectaDB.php");



        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $password_hash = password_hash($senha, PASSWORD_BCRYPT);

        $sql = "INSERT INTO usuario (nome, senha) VALUES ('$nome', '$password_hash')";

        header('location: index.php');

        $resultado = mysqli_query($conexao,$sql);

    
    mysqli_close($conexao);
?>