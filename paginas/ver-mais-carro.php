<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <!-- Adicione a referência ao Bootstrap 4 CSS -->
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        
        .cars li {
            display: inline-block;
            width: 30%;
            margin-right: 4%;
            vertical-align: top;
            text-align: center;

        }

        .cars li:last-child {
            margin-right: 0;
        }

        .cars li img {
            max-width: 50%;
            height: auto;
        }
        
    </style>
</head>
</head>
<header>
        <div class="col-3">
			<a href="index.php"><img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;"></a>
		</div>
</header>
<body style="background-image: url('../img/pexels-aleksandar-pasaric-4512439.jpg');background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

<main role="main" class="flex-shrink-0">
    <div class="container text-center">
        <h2 style="color: #b0b0b0;">Lista de Carros</h2>

            <div class="input-group">
                <input class="form-control" id="myInput" type="text" placeholder="Pesquisar carros">
            </div>

       <br>
        <table class="table" style="border-radius: 10px solid #b0b0b0;">
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
                <th>Preço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php
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
                    echo "<td>" . $row['preco'] . "</td>";
                    echo "<td><a href='../paginas/detalhes.php?id=" . $row['id'] . "' class='btn btn-info'>Alugar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='14'>Nenhum carro encontrado.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
        </table>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
