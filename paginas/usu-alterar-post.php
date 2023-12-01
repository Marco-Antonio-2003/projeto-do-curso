<?php
require_once('classes\Conexaobd.php');
$conexao = Conexaobd::pegarConexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    // Atualizar os dados no banco de dados
    $updateQuery = "UPDATE tb_usuarios SET nome = :nome, sobrenome = :sobrenome, cpf = :cpf, nascimento = :nascimento, rua = :rua, bairro = :bairro, cep = :cep WHERE codigo = :codigo";
    $updateStmt = $conexao->prepare($updateQuery);
    $updateStmt->bindParam(':codigo', $codigo);
    $updateStmt->bindParam(':nome', $nome);
    $updateStmt->bindParam(':sobrenome', $sobrenome);
    $updateStmt->bindParam(':cpf', $cpf);
    $updateStmt->bindParam(':nascimento', $nascimento);
    $updateStmt->bindParam(':rua', $rua);
    $updateStmt->bindParam(':bairro', $bairro);
    $updateStmt->bindParam(':cep', $cep);

    if ($updateStmt->execute()) {
        // Redirecionar para a página de gerenciamento de usuários
        header('Location: gerenciar-usu.php');
        exit();
    } else {
        echo "Erro ao atualizar usuário.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
