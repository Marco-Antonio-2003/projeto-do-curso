<?php
require_once('classes\Conexaobd.php');
$conexao = Conexaobd::pegarConexao();

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    $query = "SELECT * FROM tb_usuarios WHERE codigo = :codigo";
    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Processar o formulário enviado
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
                echo "Usuário atualizado com sucesso.";
            } else {
                echo "Erro ao atualizar usuário.";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<header>
        <div class="col-3">
			<a href="index.php"><img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;"></a>
		</div>
</header>
<body style="padding-top:10px">
    <div class="container">
        <h1>Alterar Usuário</h1>
        <form action="usu-alterar-post.php" method="post">
             <input type="hidden" name="codigo" value="<?= $usuario['codigo']; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            Nome: <input type="text" name="nome" value="<?= $usuario['nome']; ?>" class="form-control mb-2"><br>
                        </div>
                        <div class="col-6">
                            Sobrenome: <input type="text" name="sobrenome" value="<?= $usuario['sobrenome']; ?>" class="form-control mb-2"><br>
                        </div>
                    </div>
 
                    <div class="row">
                        <div class="col-8">
                        CPF: <input type="text" name="cpf" value="<?= $usuario['cpf']; ?>" class="form-control mb-2"><br>
                        </div>
                        <div class="col-4">
                        Nascimento: <input type="text" name="nascimento" value="<?= $usuario['nascimento']; ?>" class="form-control mb-2"><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                        Rua: <input type="text" name="rua" value="<?= $usuario['rua']; ?>" class="form-control mb-2"><br>
                        </div>
                        <div class="col-6">
                        Bairro: <input type="text" name="bairro" value="<?= $usuario['bairro']; ?>" class="form-control mb-2"><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                        CEP: <input type="text" name="cep" value="<?= $usuario['cep']; ?>" class="form-control mb-2"><br>
                        </div>
                       
                    </div>
                </div>
           
            <input type="submit" value="Salvar Alterações" style="margin:10px" class="btn btn-primary">
        </form>
        <a href="gerenciar-usu.php" class="btn btn-secondary" style="margin:10px">Cancelar</a>
    </div>

    <!-- Adicione os scripts do Bootstrap e Popper.js aqui -->

</body>
</html>
<?php
    } else {
        echo "Usuário não encontrado.";
    }
} else {
    echo "Código do usuário não fornecido.";
}
?>
