<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="post" action="registrar_usuario.php">
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <label>Nível: 
            <select name="nivel" required>
                <option value="admin">Administrador</option>
                <option value="user">Usuário Comum</option>
            </select>
        </label><br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.php">Voltar para a página de login</a>
</body>
</html>
