<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Veículo</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<header>
    <div class="col-3">
        <a href="index.php"><img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;"></a>
    </div>
</header>
<body>
    <div class="container">
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
        <br>
                <h1>Alterar Veículo</h1>
                <form action="alterar-veiculos-post.php" method="post">
                    <!-- Campos do formulário preenchidos com os dados do veículo -->
                    <input type="hidden" name="id" value="<?php echo $veiculo['id']; ?>">
                    Nome: <input type="text" name="nome" value="<?php echo $veiculo['nome']; ?>" class="form-control mb-2"><br>
                    Marca: <input type="text" name="marca" value="<?php echo $veiculo['marca']; ?>" class="form-control mb-2"><br>
                    Modelo: <input type="text" name="modelo" value="<?php echo $veiculo['modelo']; ?>" class="form-control mb-2"><br>
                    Ano: <input type="text" name="ano" value="<?php echo $veiculo['ano']; ?>" class="form-control mb-2"><br>
                    Motorização: <input type="text" name="motorizacao" value="<?php echo $veiculo['motorizacao']; ?>" class="form-control mb-2"><br>
                    Combustivel: <input type="text" name="combustivel" value="<?php echo $veiculo['combustivel']; ?>" class="form-control mb-2"><br>
                    Direção: <input type="text" name="direcao" value="<?php echo $veiculo['direcao']; ?>" class="form-control mb-2"><br>
                    Câmbio: <input type="text" name="cambio" value="<?php echo $veiculo['cambio']; ?>" class="form-control mb-2"><br>
                    Portas: <input type="text" name="portas" value="<?php echo $veiculo['portas']; ?>" class="form-control mb-2"><br>
                    Foto: <input type="file" name="foto" value="<?php echo $veiculo['foto']; ?>" class="form-control mb-2"><br>
                    ar: <input type="text" name="ar" value="<?php echo $veiculo['ar']; ?>" class="form-control mb-2"><br>
                    abs: <input type="text" name="abs" value="<?php echo $veiculo['abs']; ?>" class="form-control mb-2"><br>
                    alugado: <input type="text" name="alugado" value="<?php echo $veiculo['alugado']; ?>" class="form-control mb-2"><br>

                    <input type="submit" value="Salvar Alterações" class="btn btn-primary">
                </form>
        <?php
            } else {
                echo "Veículo não encontrado.";
            }
        } else {
            echo "ID do veículo não fornecido.";
        }
        ?>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
