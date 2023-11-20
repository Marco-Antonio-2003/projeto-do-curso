<?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alugue";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o ID do carro foi fornecido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Excluir o carro do banco de dados
    $sql = "DELETE FROM tb_adicionar_carro WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Carro excluído com sucesso!";
        include("lista-de-carros.php");
    } else {
        echo "Erro ao excluir carro: " . $stmt->error;
    }

    // Fechar a instrução e a conexão com o banco de dados
    $stmt->close();
    $conn->close();
} else {
    echo "ID do carro não fornecido.";
}
?>
