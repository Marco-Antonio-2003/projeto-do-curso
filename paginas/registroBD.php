<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alugue";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO usuario (nome, email, login, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $email, $login, $senha);

// Execute the statement
$stmt->execute();

header('Location: index.php');

$stmt->close();
$conn->close();
?>
