<?php
require_once 'classes/Usuarios.php';

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

 
    $usuario = new Usuarios();
    $usuario->alterar($codigo, $nome, $sobrenome, $cpf, $nascimento, $rua, $bairro, $cep);

    include("usu-alterar.php");
    echo "Usuário alterado com sucesso!";
}
?>
