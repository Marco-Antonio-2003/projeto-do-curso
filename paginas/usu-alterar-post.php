<?php
require_once 'classes/Usuarios.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    $usuario = new Usuarios();
    $usuario->alterar($codigo, $nome, $sobrenome, $cpf, $nascimento, $rua, $bairro, $cep);

    include("usu-alterar.php");
    echo "Usuário alterado com sucesso!";
}
?>
