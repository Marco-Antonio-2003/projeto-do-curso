<?php
// Conecte-se ao banco de dados
$conexao = new mysqli('localhost', 'root', '', 'alugue');

// Verifique a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Substitua 123 pelo ID do usuário que você deseja alterar
$id_usuario = 123;

// Execute a consulta SQL
$resultado = $conexao->query("SELECT * FROM tb_usuarios WHERE codigo = $id_usuario");

// Verifique se algum resultado foi retornado
if ($resultado->num_rows > 0) {
    // Se sim, armazene os dados na variável $linha
    $linha = $resultado->fetch_assoc();
} else {
    // Se não, defina $linha como um array vazio para evitar erros ao tentar acessar seus índices
    $linha = [];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Alterar Usuário</h2>
        <form action="usu-alterar-post.php" method="post">
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" id="codigo" placeholder="Digite o código" name="codigo">
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
            </div>

            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="Digite o Sobrenome" name="sobrenome">
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" placeholder="Digite o cpf" name="cpf">
            </div>
            
            <div class="form-group">
                <label for="nascimento">Nascimento:</label>
                <input type="text" class="form-control" id="nascimento" placeholder="Digite o nascimento" name="nascimento">
            </div>

            <div class="form-group">
                <label for="rua">Rua:</label>
                <input type="text" class="form-control" id="rua" placeholder="Digite a rua" name="rua">
            </div>

            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" name="bairro">
            </div>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o cep" name="cep">
            </div>
         
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        <br>
        <a href="gerenciar-usu.php">
                <button type="submit" class="btn btn-secondary">Voltar</button>
            </a>
    </div>
</body>
</html>
