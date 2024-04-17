<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" type="text/css" href="css-folder\cadastro.css">

</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="sql-quests\cadastrar_produto.php" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0" required><br><br>

        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem"><br><br>

        <input type="submit" value="Cadastrar">

    </form>

    <br><br>
    <a class="button-ref" href="index.html">Voltar!</a>
    
</body>
</html>
