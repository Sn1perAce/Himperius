<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos</title>
  <link rel="stylesheet" href="css-folder\cartegorias.css">
</head>

<body>
  <div class="top"></div>
  <div class="menu">
    <div class="logo">
      <a href="index.html"><img src="images/Himperius.png" alt="Logo" height="80px"></a>
    </div>
    <div class="menu-buttons">
      <ul>
        <li><a href="index.html">Página Incial</a></li>
        <li><a href="#">Coleção</a></li>
        <li><a href="nossahistoria.html">Nossa História</a></li>
        <li><a href="#">Nossa Arte</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <?php include 'sql-quests\produtos.php'; ?>
  </div>
</body>

</html>
