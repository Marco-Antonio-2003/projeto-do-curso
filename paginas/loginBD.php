<?php
// Iniciar sessão
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alugue";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// Preparar e vincular
$stmt = $conn->prepare("SELECT tipo FROM usuario WHERE login = ? AND senha = ?");
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // Login bem-sucedido
  while ($row = $result->fetch_assoc()) {
    $tipo = $row['tipo'];
    $_SESSION['login'] = $login;
    $_SESSION['tipo'] = $tipo;
    if ($tipo == 'admin') {
      header('Location: index.php');
    } else {
      header('Location: index.php');
    }
    exit();
  }
} else {
  // Credenciais inválidas
  echo "Login ou senha inválidos";
}

$stmt->close();
$conn->close();
?>
