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

// Verificar se 'id' está definido e é um número
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    // ID do carro que foi alugado
    $id_carro_alugado = $_POST['id'];
  
    // Atualizar o valor de 'alugado' para 1
    $sql = "UPDATE tb_adicionar_carro SET alugado = 1 WHERE id = $id_carro_alugado";
  
    if ($conn->query($sql) === TRUE) {
      
    } else {
      echo "Erro ao atualizar registro: " . $conn->error;
    }
  } else {
    echo "ID inválido";
  }
  
  $conn->close();
  
  header('Location: index.php');

?>