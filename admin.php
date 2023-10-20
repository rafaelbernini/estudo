<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_level'] !== 'admin') {
    header('Location: index.php');
}

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $stmt = $pdo->prepare('INSERT INTO produto (nome, quantidade, preco) VALUES (?, ?, ?)');
    $stmt->execute([$nome, $quantidade, $preco]);
}

$stmt = $pdo->query('SELECT * FROM produto');
$produtos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <h2>Painel Administrativo</h2>
    <h3>Adicionar Produto</h3>
    <form method="post">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Quantidade: <input type="number" name="quantidade" required></label><br>
        <label>Preço: <input type="number" name="preco" step="0.01" required></label><br>
        <input type="submit" value="Adicionar">
    </form>
    <h3>Lista de Produtos</h3>
    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li>Nome: <?= $produto['nome'] ?> - Quantidade: <?= $produto['quantidade'] ?> - Preço: <?= $produto['preco'] ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="logout.php">Sair</a>
</body>
</html>