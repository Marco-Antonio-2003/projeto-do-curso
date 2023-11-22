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

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $motorizacao = $_POST['motorizacao'];
    $combustivel = $_POST['combustivel'];
    $direcao = $_POST['direcao'];
    $cambio = $_POST['cambio'];
    $portas = $_POST['portas'];
    $foto = $_POST['foto'];
    $ar = $_POST['ar'];
    $abs = $_POST['abs'];
    $preco = $_POST['preco'];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO tb_adicionar_carro (nome, marca, modelo, ano, motorizacao, combustivel, direcao, cambio, portas, foto, ar, abs,preco) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $nome, $marca, $modelo, $ano, $motorizacao, $combustivel, $direcao, $cambio, $portas, $foto, $ar, $abs,$preco);

    if ($stmt->execute()) {
        echo "Veículo adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar veículo: " . $stmt->error;
    }

    // Fechar a instrução e a conexão com o banco de dados
    $stmt->close();
    $conn->close();

    include("adicionar-carro.php");
}
?>
