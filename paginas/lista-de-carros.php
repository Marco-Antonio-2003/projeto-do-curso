<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link rel="stylesheet" href="../CSS/styles_cadastro.css">
</head>
<body>

<div class="container">
    <h2>Lista de Carros</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Motorização</th>
                <th>Combustível</th>
                <th>Direção</th>
                <th>Câmbio</th>
                <th>Portas</th>
                <th>Foto</th>
                <th>Ar Condicionado</th>
                <th>ABS</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conectar ao banco de dados (substitua os valores conforme necessário)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "alugue";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar a conexão
            if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Selecionar os dados da tabela
            $sql = "SELECT * FROM tb_adicionar_carro";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Exibir os dados em uma tabela
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['marca'] . "</td>";
                    echo "<td>" . $row['modelo'] . "</td>";
                    echo "<td>" . $row['ano'] . "</td>";
                    echo "<td>" . $row['motorizacao'] . "</td>";
                    echo "<td>" . $row['combustivel'] . "</td>";
                    echo "<td>" . $row['direcao'] . "</td>";
                    echo "<td>" . $row['cambio'] . "</td>";
                    echo "<td>" . $row['portas'] . "</td>";
                    echo "<td><img src='../img/" . $row['foto'] . "' alt='Foto do Carro' style='max-width: 100px;'></td>";
                    echo "<td>" . ($row['ar'] == 1 ? 'Sim' : 'Não') . "</td>";
                    echo "<td>" . ($row['abs'] == 1 ? 'Sim' : 'Não') . "</td>";
                    echo "<td><a href='../paginas/excluir-carro.php?id=" . $row['id'] . "' class='btn btn-danger'>Excluir</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='14'>Nenhum carro encontrado.</td></tr>";
            }

            // Fechar a conexão com o banco de dados
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<a href="../paginas/adc-veiculos.php">
    <button type="submit" class="btn btn-warning" > Voltar </button>
</a>
</body>
</html>
