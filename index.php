<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="logar.php" method="post" id="formulario">
        <input type="text" name="nick">
        <input type="text" name="senha">
        <input type="submit" name="login" value="Logar">
    </form>

    <form action="cadastrar.php" method="post" id="formulario">
        <input type="text" name="nome">
        <input type="text" name="senha">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>



</body>
</html>