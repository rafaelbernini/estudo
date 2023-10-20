<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_level'] !== 'user') {
    header('Location: index.php');
}

include('db.php');

$stmt = $pdo->query('SELECT * FROM produto');
$produtos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuário</title>
</head>
<body>
    <h2>Painel do Usuário</h2>
    <h3>Lista de Produtos</h3>
    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li>
                - Nome: <?= $produto['nome'] ?>
                - Quantidade: <?= $produto['quantidade'] ?>
                - Preço: <?= $produto['preco'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="logout.php">Sair</a>
</body>
</html>