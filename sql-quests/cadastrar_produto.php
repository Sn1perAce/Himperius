<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himperius";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $imagem = '';

    
    if ($_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $imagem = $_FILES['imagem']['name'];
        $imagem_temp = $_FILES['imagem']['tmp_name'];
        $caminho_destino = 'products_images/' . $imagem;
        
        
        if (move_uploaded_file($imagem_temp, $caminho_destino)) {
      
            $sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('$nome', '$descricao', '$preco', '$imagem')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Produto cadastrado com sucesso!";
                echo '<br><br><a href="\HimperiUS\pagina-cadastro-produtos.php">Voltar à página de cadastro</a>';
            } else {
                echo "Erro ao cadastrar o produto: " . $conn->error;
            }
        } else {
            echo "Erro ao mover o arquivo de imagem para o diretório de destino.";
        }
    } else {
        echo "Erro no envio do arquivo de imagem.";
    }

    $conn->close();
}
?>
