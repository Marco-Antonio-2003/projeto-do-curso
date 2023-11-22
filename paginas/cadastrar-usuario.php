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

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO tb_usuarios (nome, sobrenome, CPF, nascimento, rua, bairro, cep) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nome, $sobrenome, $CPF, $nascimento, $rua, $bairro, $cep);

// Define os parâmetros e executa
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$CPF = $_POST['CPF'];
$nascimento = $_POST['nascimento'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();

?>
