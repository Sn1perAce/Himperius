
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himperius";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="produto">';
        if (!empty($row["imagem"]) && file_exists('sql-quests\products_images/' . $row["imagem"])) {
            echo '<img src="sql-quests\products_images/' . $row["imagem"] . '" alt="' . $row["nome"] . '">';
        } else {

            echo '<img src="images\not_disponible.png" alt="Imagem não disponível">';
        }
        echo '<h3>' . $row["nome"] . '</h3>';
        echo '<p>' . $row["descricao"] . '</p>';
        echo '<h3>Preço: R$ ' . number_format($row["preco"], 2, ',', '.') . '</h3>';
        echo '</div>';
    }
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>
