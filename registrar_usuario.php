<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
    $nivel = $_POST['nivel'];

    $stmt = $pdo->prepare('INSERT INTO usuario (email, senha, nivel) VALUES (?, ?, ?)');
    if ($stmt->execute([$email, $senha, $nivel])) {
        echo 'Usuário cadastrado com sucesso';
    } else {
        echo 'Erro no cadastro do usuário';
    }
}
?>
