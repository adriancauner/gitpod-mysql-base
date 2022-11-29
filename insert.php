<?php
require_once './vendor/autoload.php';

use ExemploPDOMySQL\MySQLConnection;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bd = new MySQLConnection();
    
    $comando = $bd->prepare('INSERT INTO generos(nome) VALUES(:nome)');
    $comando->execute ([':nome' => $_POST['nome']]);

    header('Location:/index.php');
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Gênero</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
</head>
<body>
    <main class ="container">
    <h1>Novo Gênero</h1>
    <form action="insert.php" method="Post">
        <div class="form-group">
        <label for="nome">Nome Gênero</label>
        <input class="form-control" type="text" required name="name"/>
</div>
<br/>
        <a class="btn btn-secondary" href="index.php">Voltar</a>
        <button class="btn btn-success" type="submit">Salvar</button>
    </form>
</main>
</body>
</html>