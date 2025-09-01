<?php
require_once "../controller/ProdutoController.php";
$controller = new ProdutoController();
$produtos = $controller->consultar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Produtos</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
<div class="container">
    <h1>Lista de Produtos</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Produto</th>
            <th>Validade</th>
            <th>Preço</th>
        </tr>
        <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?= $p['codigo'] ?></td>
            <td><?= $p['produto'] ?></td>
            <td><?= $p['data_validade'] ?></td>
            <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="../index.php" class="btn-voltar">Voltar ao Menu</a>
</div>
</body>
</html>
