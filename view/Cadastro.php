<?php
require_once "..\controller\ProdutoController.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $controller = new ProdutoController();
    $controller->cadastrar($_POST);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
<div class="container">
    <h1>Cadastro de Produto</h1>
    <form method="POST">
        <input type="text" name="codigo" placeholder="Código" required>
        <input type="text" name="produto" placeholder="Nome do Produto" required>
        <input type="text" name="data_validade" placeholder="Data de Validade">
        <input type="number" step="0.01" name="preco" placeholder="Preço" required>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="..\index.php" class="btn-voltar">Voltar ao Menu</a>
</div>
</body>
</html>
