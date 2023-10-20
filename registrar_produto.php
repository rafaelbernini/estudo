<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $stmt = $pdo->prepare('INSERT INTO produto (nome, quantidade, preco) VALUES (?, ?, ?)');
    if ($stmt->execute([$nome, $quantidade, $preco])) {
        echo 'Produto cadastrado com sucesso';
    } else {
        echo 'Erro no cadastro do produto';
    }
}
?>
