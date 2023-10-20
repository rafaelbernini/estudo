<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT id_usuario, senha, nivel FROM usuario WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['senha'])) {
        session_start();
        $_SESSION['user_id'] = $user['id_usuario'];
        $_SESSION['user_level'] = $user['nivel'];

        if ($user['nivel'] === 'admin') {
            header('Location: admin.php');
        } else {
            header('Location: user.php');
        }
    } else {
        echo 'Credenciais inválidas';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label>Email: <input type="text" name="email" required></label><br>
        <label>Senha: <input type="password" name="password" required></label><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
