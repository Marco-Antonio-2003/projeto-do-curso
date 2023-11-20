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
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['CPF'];
    $nascimento = $_POST['nascimento'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    // Preparar e executar a instrução SQL para inserir os dados na tabela
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (nome, sobrenome, cpf, nascimento, rua, bairro, cep) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nome, $sobrenome, $cpf, $nascimento, $rua, $bairro, $cep);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

    // Fechar a instrução e a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}
include("alugar.php");
?>
