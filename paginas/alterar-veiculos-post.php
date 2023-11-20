<?php

require_once 'classes/Veiculos.php';
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
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $motorizacao = $_POST['motorizacao'];
    $combustivel = $_POST['combustivel'];
    $direcao = $_POST['direcao'];
    $cambio = $_POST['cambio'];
    $portas = $_POST['portas'];
    $codigo = $_POST['codigo'];
    $status = $_POST['status'];
 

    $veiculos = new Veiculos();
    $veiculos->alterar($id, $nome, $marca, $modelo, $ano, $motorizacao, $combustivel, $direcao,$cambio,$portas,$codigo,$status);

    include("alterar-veiculo.php");
    echo "Veiculo alterado com sucesso!";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
