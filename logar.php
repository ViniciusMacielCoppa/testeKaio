<?php
    session_start();
    include_once ("conectaDB.php");

    $userNick = $_POST['nick'];
    $userSenha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE nome LIKE '$userNick'";

    $resultado = mysqli_query($conexao, $sql);
    $usuario_no_banco = mysqli_fetch_assoc($resultado); 

    $senhaOk = password_verify($userSenha, $usuario_no_banco["senha"]);


    if(!$senhaOk){
        header('Location: index.php');
    }else{
        header('Location: teste.php');

    }
    
    
    

    
?>