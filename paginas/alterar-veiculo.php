<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Veículo</title>
</head>
<body>
    <?php
    // Conectar ao banco de dados
    require_once('classes\Conexaobd.php');
    $conexao = Conexaobd::pegarConexao();

    // Verificar se o ID do veículo foi fornecido
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Consultar o veículo no banco de dados
        $query = "SELECT * FROM tb_adicionar_carro WHERE id = :id";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $veiculo = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar se o veículo existe
        if ($veiculo) {
    ?>
            <h1>Alterar Veículo</h1>
            <form action="alterar-veiculos-post.php" method="post">
                <!-- Campos do formulário preenchidos com os dados do veículo -->
                <input type="hidden" name="id" value="<?php echo $veiculo['id']; ?>">
                Nome: <input type="text" name="nome" value="<?php echo $veiculo['nome']; ?>"><br>
                Marca: <input type="text" name="marca" value="<?php echo $veiculo['marca']; ?>"><br>
                Modelo: <input type="text" name="modelo" value="<?php echo $veiculo['modelo']; ?>"><br>
                Ano: <input type="text" name="ano" value="<?php echo $veiculo['ano']; ?>"><br>
                Motorização: <input type="text" name="motorizacao" value="<?php echo $veiculo['motorizacao']; ?>"><br>
                Combustivel: <input type="text" name="combustivel" value="<?php echo $veiculo['combustivel']; ?>"><br>
                Direção: <input type="text" name="direcao" value="<?php echo $veiculo['direcao']; ?>"><br>
                Câmbio: <input type="text" name="cambio" value="<?php echo $veiculo['cambio']; ?>"><br>
                Portas: <input type="text" name="portas" value="<?php echo $veiculo['portas']; ?>"><br>
                Foto: <input type="file" name="foto" value="<?php echo $veiculo['foto']; ?>"><br>
                ar: <input type="text" name="ar" value="<?php echo $veiculo['ar']; ?>"><br>
                abs: <input type="text" name="abs" value="<?php echo $veiculo['abs']; ?>"><br>
                alugado: <input type="text" name="alugado" value="<?php echo $veiculo['alugado']; ?>"><br>

                <input type="submit" value="Salvar Alterações">
            </form>
    <?php
        } else {
            echo "Veículo não encontrado.";
        }
    } else {
        echo "ID do veículo não fornecido.";
    }
    ?>
</body>
</html>
