<?php
// Iniciar sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['login'])) {
  // Se o usuario não estiver logado, redirecione para a página de login
  header('Location: login.php');
  exit();
}

// Verificar o tipo de usuário
if ($_SESSION['tipo'] != 'admin') {
  // Se o usuário não for um adm, redirecione para a página de usuario
  // Se o usuário não for um adm, exibe um alerta
  echo "<script>alert('Você não tem permissão de administrador para realizar esta ação.');</script>";
  header('Location: index.php');
}
?>
