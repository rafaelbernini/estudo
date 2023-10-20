<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    <form method="post" action="registrar_produto.php">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Quantidade: <input type="number" name="quantidade" required></label><br>
        <label>Preço: <input type="number" name="preco" step="0.01" required></label><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
