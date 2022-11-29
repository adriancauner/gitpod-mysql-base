<?php
require_once './vendor/autoload.php';

use ExemploPDOMySQL\MySQLConnection;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bd = new MySQLConnection();
    
    $comando = $bd->prepare('INSERT INTO generos(nome) VALUES(:nome)');
    $comando-> execute ([':nome' => $_POST['nome']]);

    header('Location:/index.php')
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Gênero</title>
</head>
<body>
    <h1>Novo Gênero</h1>
    <form action="insert.php" method="Post">
        <label for="nome">Nome Gênero</label>
        <input type="text" required name="name"/>
        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>